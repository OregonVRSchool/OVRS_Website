<?php

use Illuminate\Database\Seeder;
use App\User;

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
        	
        }
        User::insert($users)
    }
}
