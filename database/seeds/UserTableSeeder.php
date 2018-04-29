<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permissions;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['guest', 'volunteer', 'student', 'admin', 'superAdmin'];
        $users = [];
        foreach ($titles as $title) {
        	$users[] = array(
        		'name' => $title, 
        		'email' => $title.'@ovrs.com',
        		'password' => Hash::make('password'),
        		'permissions_id' => Permissions::where('title', $title)->first()->id,
        		'confirmed' => 1,
        	);
        }
        User::insert($users);
    }
}
