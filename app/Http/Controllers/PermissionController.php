<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:Permission Read', ['only' => ['index']]);
        $this->middleware('permission:Permission Create', ['only' => ['create','store']]);
        $this->middleware('permission:Permission Edit', ['only' => ['Edit','Update']]);
        $this->middleware('permission:Permission Delete', ['only' => ['destroy']]);

    }

    public function index()
    {
        $permissions = Permission::all();
        return view('back_end.spatie.permissions.index',compact('permissions'))->with('i');
    }

    public function getPermissions()
    {
        return Datatables::of(Permission::query())

        ->setRowId(function ($permission) {
            return $permission->id;
            })

        ->editColumn('status', function (Permission $permission) {

            $active='<span style="background-color: #04AA6D;color: white;padding: 3px;width:100px;">Active</span>';
            $inActive='<span style="background-color: #ff9800;color: white;padding: 3px;width:100px;">In Active</span>';

            $activeId = ($permission->status);

                if($activeId==1){
                    $activeId = $active;
                }
                else {
                    $activeId = $inActive;
                }
                return $activeId;
        })
        ->addColumn('created_at', function (Permission $permission) {
            return $permission->created_at->format('d-M-Y h:m');
        })
        ->addColumn('updated_at', function (Permission $permission) {

            return $permission->updated_at->format('d-M-Y h:m');
        })
        ->editColumn('created_by', function (Permission $permission) {

            return ucwords($permission->CreatedBy->name);
        })
        ->editColumn('updated_by', function (Permission $permission) {
        return ucwords($permission->UpdatedBy->name);
        })
        ->addColumn('editLink', function (Permission $permission) {

            $editLink ='<a href="'. route('permissions.edit', $permission->id) .'" class="ml-2"><i class="fa-solid fa-edit"></i></a>';
               return $editLink;
        })
        ->addColumn('deleteLink', function (Permission $permission) {
           $CSRFToken = "csrf_field()";
            $deleteLink ='
                                           <button class="btn btn-link delete-permission" data-permission_id="'.$permission->id.'" type="submit"><i
                                                   class="fa-solid fa-trash-can text-danger"></i>
                                           </button>';
               return $deleteLink;
        })

       ->rawColumns(['status','editLink','deleteLink'])
        ->toJson();
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
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        dd('de');
         $permission  = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->route('permissions.index')
                ->with('message_update', 'Permission Deleted Successfully');
    }
}
