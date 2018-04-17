<?php

namespace App\Traits;

use App\Category;

trait SiteMap
{
	public function GetMap()
	{
		$categories = Category::all();
        $map = [];
        foreach ($categories as $category) {
            $category['index'] = $category->pages()->where('title', 'index')->first();
            $category['pages'] = $category->pages()->where('title', '!=', 'index')->get();            
            $map[] = $category;
        }

        return $map;
	}
}