<?php

use Illuminate\Database\Seeder;
use App\Page;
Use App\Category;
use App\Traits\SeoURL;

class PageTableSeeder extends Seeder
{
	use SeoURL;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
        	'About' => [
        		'Mission Statement',
        		'The Classroom',
        		'Our Success',
        		'Contact Us'
        	], 
        	'Admissions' => [
        		'Requirements',
        		'Preperation',
        		'Application',
        		'Review Process',
        		'Admittance'
        	], 
        	'Courses' => [
        		'Corriculum',
        		'Electives',
        		'Programs'
        	], 
        	'Donate' =>[
        		'Time',
        		'Finacially'
        	]
        ];
        
        $pages = [];
        foreach ($titles as $title => $pagesData) {
        	$categoryID = Category::where('title', $title)->first()->id;
        	foreach ($pagesData as $page) {
        		$pages[] = array(
        			'title' => $page,
        			'content' => 'this is the default content',
        			'url' =>  $this->cleanstring($page),
        			'category_id' => $categoryID
        		);
        	}
        }
        Page::insert($pages);        
    }
}
