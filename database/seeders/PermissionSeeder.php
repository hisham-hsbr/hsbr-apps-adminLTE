<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // => Default
        // Permission::create(['name' => 'Admin Section Menu' , 'parent' => 'Default' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // Permission::create(['name' => 'Masters Menu' , 'parent' => 'Default' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Dashboard Menu' , 'parent' => 'Default' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Sidebar Search Menu' , 'parent' => 'Default' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Default

        // => User
        Permission::create(['name' => 'User Read' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Create' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Edit' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Update' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Delete' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Settings' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Table' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'User Read First Name' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Last Name' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read DOB' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Phone1' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Phone2' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Gender' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Avatar' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Email' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Email Verified' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read City' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Blood' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Time Zone' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Roles' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Permissions' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'User Read Status' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Created By' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Created At' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Updated By' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Updated At' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'User Table Export Excel' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Table Export PDF' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Table Print' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Table Copy' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Table Column Visible' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= User

        // => Blood
        Permission::create(['name' => 'Blood Menu' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Create' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Edit' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Update' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Delete' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Settings' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Table' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Name' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Status' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Created By' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Created At' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Updated By' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Updated At' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Export Excel' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Export PDF' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Print' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Table Column Visible' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Blood

        // => Role
        Permission::create(['name' => 'Role Menu' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Create' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Edit' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Update' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Delete' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Settings' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Table' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Name' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Parent' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Status' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Created By' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Created At' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Updated By' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Updated At' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Export Excel' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Export PDF' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Table Column Visible' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Role

        // => Permission
        Permission::create(['name' => 'Permission Read' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Create' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Edit' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Update' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Delete' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Settings' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Table' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'Permission Read Name' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Parent' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'Permission Read Status' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Created By' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Created At' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Updated By' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Updated At' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'Permission Table Export Excel' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Table Export PDF' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Table Print' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Table Copy' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Table Column Visible' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Permission

        // => Activity Log
        Permission::create(['name' => 'Activity Log Read' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);Permission::create(['name' => 'Activity Log Settings' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Table' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log View' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'Activity Log Read Log Name' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Read Description' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Read Event' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Read Event User' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Read Subject Type' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Read Causer Type' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'Activity Log Read Created At' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // Permission::create(['name' => 'Activity Log Read Created By' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // Permission::create(['name' => 'Activity Log Read Updated By' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // Permission::create(['name' => 'Activity Log Read Updated At' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        Permission::create(['name' => 'Activity Log Table Export Excel' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Table Export PDF' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Table Print' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Table Copy' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Activity Log Table Column Visible' , 'parent' => 'Activity Log' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Permission

        // Start => Price List
        Permission::create(['name' => 'Price List Menu' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Create' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Edit' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Update' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Delete' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Settings' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Table' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Name' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Status' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Created By' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Created At' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Updated By' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Updated At' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Export Excel' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Export PDF' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Print' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Code' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Group' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Packing' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read UOM' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Box Price' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Half Box Price' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Wholesale Price' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Cash Price' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Credit Price' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read Description' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);

        // End <= Price List

    }
}
