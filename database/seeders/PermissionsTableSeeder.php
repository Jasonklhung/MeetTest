<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([

        	[
	            'job_name' => 'QA',
	            'status' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
        	],
	        [
	            'job_name' => 'RD',
	            'status' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'job_name' => 'PM',
	            'status' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'job_name' => 'Manager',
	            'status' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
    	]);
    }
}
