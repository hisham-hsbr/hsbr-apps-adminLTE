<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
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
        $bloods = Blood::all();
        return view('back_end.masters.bloods.index',compact('bloods'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bloods = Blood::all();
        return view('back_end.masters.bloods.create',compact('bloods'))->with('i');
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
    public function show(Blood $blood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blood $blood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blood $blood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blood $blood)
    {
        //
    }
}
