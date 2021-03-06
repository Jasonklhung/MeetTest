<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();

	    $this->call(UsersTableSeeder::class);
	    $this->call(PermissionsTableSeeder::class);
        $this->call(BugPermissionsTableSeeder::class);
        $this->call(TicketPermissionsTableSeeder::class);

	    Model::reguard();
    }
}
