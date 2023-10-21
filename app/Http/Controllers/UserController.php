<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;

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
        ->addColumn('created_at', function (User $User) {
            return $User->created_at->format('d-M-Y h:m');
        })
        ->addColumn('updated_at', function (User $User) {

            return $User->updated_at->format('d-M-Y h:m');
            // return $Csdcity->updated_at->diffForHumans();
        })
        ->toJson();
    }


    public function create()
    {
        //
        // $bloods = Blood::where('status', 1)->get();
        // $time_zones = TimeZone::where('status', 1)->get();
        // $jobs = Job::where('status', 1)->get();
        // $educations = DB::table('educations')
        //             ->groupBy('name')
        //             ->get();
        // $countries = Country::where('status', 1)->get();

        // $country_list = DB::table('country_state_district_cities')
        //                 ->groupBy('country')
        //                 ->where('status', 1)->get();

        $roles = Role::where('status', 1)->get();
        $users = User::all();
        $permissions = Permission::all()->groupBy('parent');


        return view('back_end.masters.users.create',compact('roles','permissions','users'));
        // return view('back_end.masters.users.create',compact('roles','permissions','users','bloods','educations','countries','country_list','jobs','time_zones'));
        // return view('admin.users.create',compact('roles','permissions','users','bloods','educations','countries','country_list','jobs'))->with('country_list', $country_list);
    }

    public function store(Request $request)
    {

        // dd($request->city);
        $this->validate($request, [
            'name' => 'required',
            // 'last_name' => 'required',
            // 'dob' => 'required',
            // 'phone1' => 'required',
            // 'blood_id' => 'required',
            // 'time_zone_id' => 'required',
            // 'city' => 'required',
            // 'gender' => 'required',

            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        // $city_id=(DB::table('country_state_district_cities')->where('city', $request->city)->first())->id;

        $user = new User();


        $user->name = $request->name;
        // $user->last_name = $request->last_name;
        // $user->dob  = $request->dob;
        // $user->phone1  = $request->phone1;
        // $user->phone2  = $request->phone2;
        // $user->blood_id  = 1;
        // $user->city_id  = 1;
        // $user->time_zone_id  = 1;
        $user->gender  = 'male';

        $user->email  = $request->email;
        $user->password = Hash::make($request['password']);



        $user->created_by = 1;
        $user->updated_by = 1;
        $user->save();

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
}
