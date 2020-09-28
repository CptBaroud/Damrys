@extends('app')

@section('title')
<title id="pageTitle">Actualitées | Damrys</title>
@endsection

@section('content')
<div class="page-title parallax parallax1 style1">
    <div class="overlay overlay1"></div>
    <div class="container wrap-page-title">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ route('home') }}" id="title">ACCUEIL</a></li>
                <li><a href="{{ route('blogHome') }}" id="title2">ACTUALITE</a></li>
            </ul>
        </div>
        <div class="page-title-heading">
            <h1 id="title3">Actualités</h1>
        </div>
    </div>
</div>
<div class="main-blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                @if(count($blogs) == 0)
                <p>Aucun article trouvé !</p>
                @else
                @foreach($blogs as $blog)
                <article class="blog-list post-wrap clearfix">
                    <div class="featured-post">
                        <div class="post-img">
                            <img src="{{asset($blog->path)}}" alt="image">
                            <div class="overlay"></div>
                        </div>
                        <div class="wrap-time"><span class="date">{{$blog->created_at->day}}</span><span class="month">{{$blog->created_at->format('F')}}</span></div>
                    </div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li class="user">par <a href="{{route('blogArticle', $blog->id)}}">{{App\User::find($blog->author)->name}}</a></li>

                            <!--<li class="post-comment">3 Comments</li>-->
                        </ul>

                        <h3 class="post-title"><a href="{{route('blogArticle', $blog->id)}}">{{$blog->title}}</a></h3>
                        <div class="wrap-content-post">
                            <p><?php echo nl2br(substr($blog->content, 0, 100)) ?></p>
                        </div>
                        <div class="wrap-btn"><a class="flat-btn btn-blog hvr-shutter-out-vertical" href="{{route('blogArticle', $blog->id)}}" rel="nofollow">En savoir plus</a></div>
                    </div>
                </article>
                @endforeach
                @endif
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                @if(Auth::check())
                <a class="send-button submit hvr-shutter-out-verticall" href="{{route('blogAdd')}}">Ajouter un article</a>
                @endif
                <div class="sidebar-inner">
                        <div class="widget widget-recent">
                            <h3 class="widget-title">Actualités récentes</h3>
                            <ul>
                                @foreach($recent_blogs as $recent_blog)
                                    <li class="clearfix">
                                        <div class="widget-img">
                                            <img style="width:61px;" src="{{ asset($recent_blog->path) }}" alt="image">
                                        </div>
                                        <div class="widget-text">
                                            <h3><a href="{{route('blogArticle', $recent_blog->id)}}">06 April, 2019</a></h3>
                                            <p>{{$recent_blog->title}}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="0" style="height: 0;"></div>
                <!--<div class="sidebar-inner">
                    <div class="widget widget-recent">
                        <h3 class="widget-title">Actualités récentes</h3>
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
                </div>-->
            </div>
        </div>
    </div>
</div>
@endsection
