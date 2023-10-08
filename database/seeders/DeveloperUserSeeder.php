<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeveloperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        	'name' => 'Developer',
        	'email' => 'hisham.hsbr@gmail.com',
        	'password' => bcrypt('hsbr@gmail.com'),
            'created_by' => '1',
            'updated_by' => '1',
        	'status' => '1'
        ]);
    }
}
