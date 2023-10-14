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

    }
}
