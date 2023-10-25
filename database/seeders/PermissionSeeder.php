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
        // => User
        Permission::create(['name' => 'User Menu' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Create' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Edit' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Update' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Delete' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Name' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Status' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Created By' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Created At' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Updated By' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Read Updated At' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Export Excel' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Export PDF' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'User Print' , 'parent' => 'User' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= User

        // => Blood
        Permission::create(['name' => 'Blood Menu' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Create' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Edit' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Update' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Delete' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Name' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Status' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Created By' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Created At' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Updated By' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Read Updated At' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Export Excel' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Export PDF' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Blood Print' , 'parent' => 'Blood' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Blood

        // => Role
        Permission::create(['name' => 'Role Menu' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Create' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Edit' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Update' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Delete' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Name' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Status' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Created By' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Created At' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Updated By' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Read Updated At' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Export Excel' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Export PDF' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Role Print' , 'parent' => 'Role' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Role

        // => Permission
        Permission::create(['name' => 'Permission Menu' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Create' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Edit' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Update' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Delete' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Name' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Status' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Created By' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Created At' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Updated By' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Read Updated At' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Export Excel' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Export PDF' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Permission Print' , 'parent' => 'Permission' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        // <= Permission

        // Start => Price List
        Permission::create(['name' => 'Price List Menu' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Read' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Create' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Edit' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Update' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        Permission::create(['name' => 'Price List Delete' , 'parent' => 'Price List' , 'guard_name' => 'web' , 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
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
