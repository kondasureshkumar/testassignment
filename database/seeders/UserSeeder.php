<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    //factory(User::class, 20)->create();
	    \App\Models\User::factory()->count(20)->create(); 
    }
}
