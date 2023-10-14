<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
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
        $roles = Role::all();
        return view('back_end.spatie.roles.index',compact('roles'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all()->groupBy('parent');
        return view('back_end.spatie.roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);


            $role = new Role();
            $role->name = $request->name;

        if ($request->status==0)
        {
            $role->status==0;
        }

        $role->status = $request->status;

        $role->created_by = Auth::user()->id;
        $role->updated_by = Auth::user()->id;

        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('message_store', "{$request->name} -  Role Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
