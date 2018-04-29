<?php

use Illuminate\Database\Seeder;
use App\Permissions;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$titles = ['guest', 'volunteer', 'student', 'admin', 'superAdmin'];
    	$permissions = [];
    	foreach ($titles as $title) {
	    	$permissions[] = array(
    			'title' => $title
    		);
	    }
    	Permissions::insert($permissions);
    }
}
