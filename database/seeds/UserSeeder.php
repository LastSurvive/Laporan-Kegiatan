<?php

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
        \DB::table('users')->insert([
        	'nama'=>'Admin',
        	'email'=>'juan@in.dev',
        	'password'=>bcrypt('1')
        ]);
    }
}
