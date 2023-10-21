<?php

namespace Database\Seeders;

use App\Models\AppSettings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppSettings::create(['name' => 'default layout' ,'data'=>['card_header'=>1,'card_footer'=>1], 'description' => 'app des' ,'parent'=>'layout', 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
    }
}
