<?php

namespace App\Http\Controllers;

use App\Models\AppSettings;
use Illuminate\Http\Request;

class AppSettingsController extends Controller
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
        $appSettingss = AppSettings::all();
        return view('folder.AppSettingss.folder',compact('AppSettingss'))->with('i');
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
    public function show(AppSettings $appSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppSettings $appSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AppSettings $appSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppSettings $appSettings)
    {
        //
    }
}