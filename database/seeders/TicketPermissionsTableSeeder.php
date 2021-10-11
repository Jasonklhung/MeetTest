<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class TicketPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_permissions')->insert([

        	[
	            'permission_id' => '1',
	            'read' => 'Y',
	            'create' => 'Y',
	            'delete' => 'Y',
	            'slove' => 'N',
	            'type_featureRequest_create' => 'N',
	            'type_featureRequest_slove' => 'N',
	            'type_testCase_create' => 'Y',
	            'type_testCase_slove' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
        	],
	        [
	            'permission_id' => '2',
	            'read' => 'Y',
	            'create' => 'N',
	            'delete' => 'N',
	            'slove' => 'Y',
	            'type_featureRequest_create' => 'N',
	            'type_featureRequest_slove' => 'Y',
	            'type_testCase_create' => 'N',
	            'type_testCase_slove' => 'N',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'permission_id' => '3',
	            'read' => 'Y',
	            'create' => 'N',
	            'delete' => 'N',
	            'slove' => 'N',
	            'type_featureRequest_create' => 'Y',
	            'type_featureRequest_slove' => 'N',
	            'type_testCase_create' => 'N',
	            'type_testCase_slove' => 'N',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
	        [
	            'permission_id' => '4',
	            'read' => 'Y',
	            'create' => 'Y',
	            'delete' => 'Y',
	            'slove' => 'Y',
	            'type_featureRequest_create' => 'Y',
	            'type_featureRequest_slove' => 'Y',
	            'type_testCase_create' => 'Y',
	            'type_testCase_slove' => 'Y',
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s')
	        ],
    	]);
    }
}
