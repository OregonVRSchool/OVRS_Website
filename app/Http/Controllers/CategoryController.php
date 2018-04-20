<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Traits\SeoURL;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	use SeoURL;
    
    /**
     * Return a Category index page
     */
    public function index($category)
    {
      $page = Category::where('title', $category)->first()
             ->pages()->where('title', 'index')->first();
      
      return view('layouts/page', $page);
    }

    /**
     * Return the form for a new category
     */
    public function creator()
   	{
   		
   		return view('partials/forms/category');
   	}

    /**
     * Create the requested category
     * Create an index page for the category
     */
   	public function create(Request $Request)
   	{
   		$category = Category::create([
        'title' => $Request->title,
        'url' => $this->cleanString($Request->title)
      ]);

   		$page = Page::create([
        'title' => "index",
        'content' => "This is the default content",
        'url' => "index",
        'category_id' => $category->id
      ]);

   		return redirect()->route('page-editor', ['category' => $category->url, 'page' => $page->url]);
   	}

    /**
     * Update a category
     */
    public function update(Request $Request, $category)
    {
      $category = Category::where('url', $category)->first();

      $category->update([
        'title' => $Request->title,
        'url' => $this->cleanString($Request->title)
      ]);      

      return redirect(route('cms-categories'));
    }

    /**
     * Return the form for 
     * for editing a category
     */
    public function edit($category)
    {
      $category = Category::where('url', $category)->first();

      return view('partials/forms/category', ['category' => $category]);
    }

}
