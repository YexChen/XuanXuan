<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\myusers',3) ->create([
        	'password' => bcrypt('123456')
        	]);
    }
}
