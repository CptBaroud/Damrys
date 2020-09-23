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
                <li><a href="{{ route('blogHome') }}" id="title2">ACTUALITE</a></li>
            </ul>
        </div>
        <div class="page-title-heading">
            <h1 id="title3">Actualités</h1>
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
                                <img src="{{ asset($blog->path) }}" alt="image">
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="content-post">
                            <div class="meta-post meta-post-shared">
                                <ul>
                                    <li class="active"><a href="">{{$blog->created_at->day}} {{$blog->created_at->format('F')}}, {{$blog->created_at->year}}</a></li>
                                    <li class="active"><a href="">{{App\User::find($blog->author)->name}}</a></li>
                                </ul>
                            </div>
                            <h2><a href="">{{$blog->title}}</a></h2>
                            <p><?php echo nl2br($blog->content) ?></p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                @if(Auth::check())
                <p>
                    <a href="{{route('blogEdit', $blog->id)}}">Modifier l'article</a>
                </p>
                <p>
                    <a href="{{route('blogDelete', $blog->id)}}">Supprimer l'article</a>
                </p>
                @endif
                <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="0" style="height: 0px;"></div>
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
            </div>
        </div>
    </div>
</div>
@endsection