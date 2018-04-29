<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Traits\SeoURL;

class CategoryTableSeeder extends Seeder
{
	use SeoURL;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['About', 'Admissions', 'Courses', 'Donate'];
        $categories = [];
        foreach ($titles as $title) {
        	$categories[] = array(
        		'title' => $title,
        		'url' =>  $this->cleanstring($title)
        	);
        }
        Category::insert($categories);
    }
}
