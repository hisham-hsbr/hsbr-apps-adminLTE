<?php

namespace App\Http\Controllers;

use App\Models\DeveloperSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeveloperSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $application = DeveloperSettings::firstWhere('name', 'application');
        $page = DeveloperSettings::firstWhere('name', 'page');
        $developer = DeveloperSettings::firstWhere('name', 'developer');

        return view('back_end.settings.app_settings',compact('application','page','developer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DeveloperSettings $developerSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeveloperSettings $developerSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'app_name' => 'required',
            'app_version' => 'required',
            'page_title_prefix' => 'required',
            'page_title_suffix' => 'required',
            'name' => 'required',
            'website' => 'required',
            'mail' => 'required',
            'starting_year' => 'required',
            'ending_year' => 'required',
        ]);

        //Application Settings
        $application = DeveloperSettings::firstWhere('name', 'application');
        $application->data= [
            'app_name'=>$request->app_name,
            'app_version'=>$request->app_version,
        ];
        $application->updated_by = Auth::user()->id;
        $application->save();

        //Page Settings
        $page = DeveloperSettings::firstWhere('name', 'page');
        $page->data= [
            'page_title_prefix'=>$request->page_title_prefix,
            'page_title_suffix'=>$request->page_title_suffix
        ];
        $page->updated_by = Auth::user()->id;
        $page->save();

        //Developer Settings
        $developer = DeveloperSettings::firstWhere('name', 'developer');
        $developer->data= [
            'name'=>$request->name,
            'website'=>$request->website,
            'mail'=>$request->mail,
            'starting_year'=>$request->starting_year,
            'ending_year'=>$request->ending_year,
        ];
        $developer->updated_by = Auth::user()->id;
        $developer->save();



        return redirect()->route('app-settings.index')
                        ->with('message_store', 'Settings Are Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeveloperSettings $developerSettings)
    {
        //
    }
}
