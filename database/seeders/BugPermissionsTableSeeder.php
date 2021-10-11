<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BugPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bug_permissions')->insert([

        	[
	            'permission_id' => '1',
	            'read' => 'Y',
	            'create' => 'Y',
	            'edit' => 'Y',
	            'delete' => 'Y',
	            'slove' => 'N',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
        	],
	        [
	            'permission_id' => '2',
	            'read' => 'Y',
	            'create' => 'N',
	            'edit' => 'N',
	            'delete' => 'N',
	            'slove' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'permission_id' => '3',
	            'read' => 'Y',
	            'create' => 'N',
	            'edit' => 'N',
	            'delete' => 'N',
	            'slove' => 'N',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'permission_id' => '4',
	            'read' => 'Y',
	            'create' => 'Y',
	            'edit' => 'Y',
	            'delete' => 'Y',
	            'slove' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
    	]);
    }
}
