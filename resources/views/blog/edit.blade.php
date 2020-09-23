@extends('app')

@section('title')
    <title id="pageTitle">Contact | Damrys</title>
@endsection

@section('content')
    <div class="page-title parallax parallax1 style1" style="background-image: url({{asset($blog->path)}});">
        <div class="overlay overlay1"></div>
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.php" id="title">ACCUEIL</a></li>
                    <li><a href="{{ route('blogHome') }}" id="title2">ACTUALITE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Modifier un article</h1>
            </div>
        </div>
    </div>
    <div class="main-contact">
        <section class="flat-contact bg-one-third" style="margin-bottom: 35px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="spacer" data-desktop_height="81" data-mobile_height="100"
                             data-smobile_height="100"></div>
                        <div class="spacer" data-desktop_height="47" data-mobile_height="40" data-smobile_height="40"></div>
                        <div class="form-submit">
                            <form class="comment-form" id="contact_form" method="post" action="{{route('blogEditPost', $blog->id)}}" enctype="multipart/form-data"> 
                                @csrf
                                <p class="comment-form-author">
                                    <!-- <label>Name *</label> -->
                                    <input id="contact_name" name="title" type="text" placeholder="Nom de l'article"
                                           required="required" value="{{$blog->title}}">
                                </p>
                                <div class="clearfix"></div>
                                <p class="comment-form-comment">
                                    <!-- <label>Comment</label>  -->
                                    <textarea id="contact_message" name="content" placeholder="Corps de l'article"  required="required">{{$blog->content}}</textarea>
                                </p>
                                <p class="submit-form">
                                    <button type="submit" class="submit hvr-shutter-out-verticall" id="buttonContactSend">
                                        Modifier
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
