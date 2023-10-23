<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blood;
use App\Models\TimeZone;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $users = User::all();
        return view('back_end.masters.users.index',compact('users'))->with('i');
    }
    public function getUsers()
    {
        return Datatables::of(User::query())

        ->setRowId(function ($User) {
            return $User->id;
            })

            ->editColumn('status', function (User $user) {

                $active='<span style="background-color: #04AA6D;color: white;padding: 3px;width:100px;">Active</span>';
                $inActive='<span style="background-color: #ff9800;color: white;padding: 3px;width:100px;">In Active</span>';

                $activeId = ($user->status);

                    if($activeId==1){
                        $activeId = $active;
                    }
                    else {
                        $activeId = $inActive;
                    }
                    return $activeId;
            })

        ->editColumn('emailVerified', function (User $user) {

            $verified='<span style="background-color: #190482;color: white;padding: 3px;width:100px;">Verified</span>';
            $pending='<span style="background-color: #C70039;color: white;padding: 3px;width:100px;">Pending</span>';

            $verifiedStatus=($user->email_verified_at);

            if($verifiedStatus==NULL){
                $verifiedStatus = $pending;
            }
            else {
                $verifiedStatus = $verified;
            }
            return $verifiedStatus;

            return ucwords($user->email_verified_at->name);
        })
        ->editColumn('created_by', function (User $user) {

            return ucwords($user->CreatedBy->name);
        })
        ->editColumn('cityName', function (User $user) {

            return ucwords($user->cityName->city);
        })
        ->editColumn('timeZone', function (User $user) {

            return ucwords($user->timeZone->time_zone);
        })
        ->editColumn('blood', function (User $user) {

            return ucwords($user->blood->name);
        })
        ->editColumn('roles', function(User $user) {

            $label="";
            if (!empty($user->getRoleNames())){

                foreach ($user->getRoleNames() as $v){

                    $label='<label class="badge badge-info">'.$v.'</label>';
                }
            }

            return $label;

        })
        ->editColumn('permissions', function(User $user) {

            $label="";
            if (!empty($user->getPermissionNames())){

                foreach ($user->getPermissionNames() as $v){

                    $label='<label class="badge badge-warning">'.$v.'</label>';
                }
            }

            return $label;

        })



        ->editColumn('updated_by', function (User $user) {

            return ucwords($user->UpdatedBy->name);
        })
        ->addColumn('created_at', function (User $User) {
            return $User->created_at->format('d-M-Y h:m');
        })
        ->addColumn('updated_at', function (User $User) {

            return $User->updated_at->format('d-M-Y h:m');
        })

        ->addColumn('editLink', function (User $user) {

            $editLink ='<a href="'. route('users.edit', $user->id) .'" class="ml-2"><i class="fa-solid fa-edit"></i></a>';
               return $editLink;
        })
        ->addColumn('deleteLink', function (User $user) {
           $CSRFToken = "csrf_field()";
            $deleteLink ='
                                           <button class="btn btn-link delete-user" data-user_id="'.$user->id.'" type="submit"><i
                                                   class="fa-solid fa-trash-can text-danger"></i>
                                           </button>';
               return $deleteLink;
        })

       ->rawColumns(['emailVerified','roles','permissions','status','editLink','deleteLink'])
        ->toJson();
    }


    public function create()
    {
        //
        $bloods = Blood::where('status', 1)->get();
        $time_zones = TimeZone::where('status', 1)->get();
        $country_list = DB::table('country_state_district_cities')
                        ->groupBy('country')
                        ->where('status', 1)->get();

        $roles = Role::where('status', 1)->get();
        $users = User::all();
        $permissions = Permission::all()->groupBy('parent');


        return view('back_end.masters.users.create',compact('roles','permissions','users','bloods','time_zones','country_list'));
        // return view('back_end.masters.users.create',compact('roles','permissions','users','bloods','educations','countries','country_list','jobs','time_zones'));
        // return view('admin.users.create',compact('roles','permissions','users','bloods','educations','countries','country_list','jobs'))->with('country_list', $country_list);
    }
    function getCsdcs(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('country_state_district_cities')
        ->where($select, $value)
        ->groupBy($dependent)
        ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
        $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }

    public function store(Request $request)
    {

        // dd($request->city);
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'phone1' => 'required',
            'blood_id' => 'required',
            'time_zone_id' => 'required',
            'city' => 'required',
            'gender' => 'required',

            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $city_id=(DB::table('country_state_district_cities')->where('city', $request->city)->first())->id;

        $user = new User();


        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->dob  = $request->dob;
        $user->phone1  = $request->phone1;
        $user->phone2  = $request->phone2;
        $user->blood_id  = $request->blood_id;
        $user->city_id  = $city_id;
        $user->time_zone_id  = $request->time_zone_id;
        $user->gender  = $request->gender;

        $user->email  = $request->email;
        $user->password = Hash::make($request['password']);



        // $user->created_by = 1;
        // $user->updated_by = 1;
        // $user->save();

        if ($request->status==0)
            {
                $user->status==0;
            }

        $user->status = $request->status;

        $user->created_by = Auth::user()->id;
        $user->updated_by = Auth::user()->id;

        $user->save();
        $user->assignRole($request->input('roles'));
        $user->givePermissionTo($request->input('permission'));

        return redirect()->route('users.index')
                        ->with('message_store', 'User Created Successfully');
    }

    public function edit($id)
    {
        $bloods = Blood::where('status', 1)->get();
        $time_zones = TimeZone::where('status', 1)->get();
        $country_list = DB::table('country_state_district_cities')
                        ->groupBy('country')
                        ->where('status', 1)->get();

        $roles = Role::where('status', 1)->get();
        $user = User::find($id);
        $permissions = Permission::all()->groupBy('parent');


        return view('back_end.masters.users.edit',compact('roles','permissions','user','bloods','time_zones','country_list'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'phone1' => 'required',
            'blood_id' => 'required',
            'time_zone_id' => 'required',
            'city' => 'required',
            'gender' => 'required',

            'email' => "required|unique:users,name,$id",
            // 'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $city_id=(DB::table('country_state_district_cities')->where('city', $request->city)->first())->id;

        $user = User::find($id);


        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->dob  = $request->dob;
        $user->phone1  = $request->phone1;
        $user->phone2  = $request->phone2;
        $user->blood_id  = $request->blood_id;
        $user->city_id  = $city_id;
        $user->time_zone_id  = $request->time_zone_id;
        $user->email_verified_at  = $request->email_verified_at;
        $user->gender  = $request->gender;

        $user->email  = $request->email;
        // $user->password = Hash::make($request['password']);


        if ($request->status==0)
            {
                $user->status==0;
            }

        $user->status = $request->status;

        $user->updated_by = Auth::user()->id;

        $user->save();

        DB::table('model_has_roles')->where('model_id',$id)->delete();
        DB::table('model_has_permissions')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));
        $user->givePermissionTo($request->input('permission'));

        return redirect()->route('users.index')
                        ->with('message_store', 'User Updated Successfully');
    }
}
