@extends('app')

@section('title')
    <title id="pageTitle">Cheminée | Damrys</title>
@endsection

@section('content')
    <div class="page-title parallax parallax1 style1">
        <div class="overlay overlay1"></div>
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id="title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">ACTUALITEE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Actualitées</h1>
            </div>
        </div>
    </div>
    <div class="main-blog-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <article class="blog-list post-wrap clearfix">
                        <div class="featured-post">
                            <div class="post-img">
                                <img src="{{ asset('images/blog/post-list-1.jpg') }}" alt="image">
                                <div class="overlay"></div>
                            </div>
                            <div class="wrap-time"><span class="date">06</span><span class="month">April</span></div>
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="user">by <a href="#">Admin</a></li>

                                <li class="post-comment">3 Comments</li>
                            </ul>

                            <h3 class="post-title"><a href="#">We believe in building long lasting our business relationships</a></h3>
                            <div class="wrap-content-post">
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla.</p>
                            </div>
                            <div class="wrap-btn"><a class="flat-btn btn-blog hvr-shutter-out-vertical" href="#" rel="nofollow">Read More</a></div>
                        </div>
                    </article>

                    <article class="blog-list post-wrap clearfix">
                        <div class="featured-post">
                            <div class="post-img">
                                <img src="{{ asset('images/blog/post-list-2.jpg') }}" alt="image">
                                <div class="overlay"></div>
                            </div>
                            <div class="wrap-time"><span class="date">05</span><span class="month">April</span></div>
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="user">by <a href="#">Admin</a></li>

                                <li class="post-comment">2 Comments</li>
                            </ul>

                            <h3 class="post-title"><a href="#">How to build a powerful building construction plan</a></h3>
                            <div class="wrap-content-post">
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla.</p>
                            </div>
                            <div class="wrap-btn"><a class="flat-btn btn-blog hvr-shutter-out-vertical" href="#" rel="nofollow">Read More</a></div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="0" style="height: 0;"></div>
                    <div class="sidebar-inner">
                        <div class="widget widget-recent">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li class="clearfix">
                                    <div class="widget-img">
                                        <img src="{{ asset('images/blog/blog9.jpg') }}" alt="image">
                                    </div>
                                    <div class="widget-text">
                                        <h3><a href="{{ route('home') }}">06 April, 2019</a></h3>
                                        <p>We design industry materials of innovation</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-img">
                                        <img src="{{ asset('images/blog/blog21.jpg') }}" alt="image">
                                    </div>
                                    <div class="widget-text">
                                        <h3><a href="{{ route('home') }}">06 April, 2019</a></h3>
                                        <p>We design industry materials of innovation</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-img">
                                        <img src="{{ asset('images/blog/blog22.jpg') }}" alt="image">
                                    </div>
                                    <div class="widget-text">
                                        <h3><a href="{{ route('home') }}">06 April, 2019</a></h3>
                                        <p>We design industry materials of innovation</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-pagination">
                <ul>
                    <li>
                        <a href="#"><i class="fas fa-angle-left" aria-hidden="true"></i></a>
                    </li>
                    <li class="active">
                        <a href="#">01</a>
                    </li>
                    <li>
                        <a href="#">02</a>
                    </li>
                    <li>
                        <a href="#">03</a>
                    </li>
                    <li>
                        <a href="#">05</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-angle-right" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
