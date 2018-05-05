<h3 class="quicknav-heading">Quick Navigation</h3>
<div class="dropdown-list">
    @foreach($map as $category)
    
        <div class="dropdown">        
            <button class="dropbtn" data-toggle="collapse" data-target="#{{ $category->title }}Collapse" aria-controls="{{ $category->title }}Collapse">{{ $category->title }}</button>
            <div class="dropdown-content collapse multi-collapse" id="{{ $category->title }}Collapse">
                <ul>
                    @foreach($category->pages as $page)
                        <li><a href="{{ url('/'.$category->url.'/'.$page->url) }}">{{ $page->title }}</a></li>
                    @endforeach
                </ul>
            </div>    
        </div>

    @endforeach
</div>  