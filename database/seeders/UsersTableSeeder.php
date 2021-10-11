<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	[
	            'name' => 'QA',
	            'account' => 'QA',
	            'password' => bcrypt('QA'),
	            'permission_id' => '1',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
        	],
	        [
	            'name' => 'RD',
	            'account' => 'RD',
	            'password' => bcrypt('RD'),
	            'permission_id' => '2',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'name' => 'PM',
	            'account' => 'PM',
	            'password' => bcrypt('PM'),
	            'permission_id' => '3',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'name' => 'Administrator',
	            'account' => 'Administrator',
	            'password' => bcrypt('Administrator'),
	            'permission_id' => '4',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
    	]);
    }
}
