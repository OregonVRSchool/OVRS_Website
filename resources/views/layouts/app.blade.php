@include('partials.head')
    @include('partials.header')
        <div class="container-fluid" id="mainContent">
            <div class="row">
                <nav class="col-md-2 quicknav" aria-label="Main Navigation">
                    @include('partials.quickNav')
                </nav>

                
                <aside class="col-md-2" id="relatedArticles">
                    @section('complement')
                        <h3>Related Articles</h3>
                        <a href="#">
                            <div class="carosel">
                            
                                <img src="http://via.placeholder.com/180x120">
                                <div>
                                    <div class="title">
                                        This is a Title
                                    </div>
                                    <p>
                                        Some discription of the image
                                    </p>
                                </div>
                            </div>
                        </a>
                    @show
                </aside>                
            </div>
            <div class="row justify-content-md-center">
                <main class="col-md-8 col-md-offset-2" id="main">
                    @section('content')
                    @show
                </main>
            </div>
@include('partials.footer')
