@extends('app')

@section('title')
    <title id="pageTitle">Article | Damrys</title>
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
    <div class="main-blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="content-wrap">
                        <article class="post">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/blog/blog5.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="content-post">
                                <div class="meta-post meta-post-shared">
                                    <ul>
                                        <li class="active"><a href="index.html">06 April, 2019</a></li>
                                        <li><a href="index.html">2 Comments</a></li>
                                    </ul>
                                </div>
                                <h2><a href="index.html">How to build a powerful building construction plan</a></h2>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum Take a look at our round up of the best shows coming soon to your telly box has been the is industrys. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has industr standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of.</p>
                            </div>
                        </article>
                        <div class="blockquote-wrap">
                            <blockquote>
                                “Long established fact that a reader will be not distracted by the readable content of a page”
                            </blockquote>
                        </div>
                        <div class="text-main">
                            <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesettin has been the ndustry stan when an unknown printer took a galley.</p>
                        </div>
                        <div class="main-author clearfix">
                            <div class="image-author">
                                <img src="{{ asset('images/blog/blog6.jpg') }}" alt="image">
                            </div>
                            <div class="info-author">
                                <h2>Christine Eve</h2>
                                <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="0" style="height: 0px;"></div>
                    <div class="sidebar-inner">
                        <div class="widget widget-recent">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li class="clearfix">
                                    <div class="widget-img">
                                        <img src="{{ asset('images/blog/blog9.jpg') }}" alt="image">
                                    </div>
                                    <div class="widget-text">
                                        <h3><a href="index.html">06 April, 2019</a></h3>
                                        <p>We design industry materials of innovation</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-img">
                                        <img src="{{ asset('images/blog/blog21.jpg') }}" alt="image">
                                    </div>
                                    <div class="widget-text">
                                        <h3><a href="index.html">06 April, 2019</a></h3>
                                        <p>We design industry materials of innovation</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-img">
                                        <img src="{{ asset('images/blog/blog22.jpg') }}" alt="image">
                                    </div>
                                    <div class="widget-text">
                                        <h3><a href="index.html">06 April, 2019</a></h3>
                                        <p>We design industry materials of innovation</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
