@extends('activity')

@section('title')
    <title id="pageTitle">Incineration | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id = "title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">CREMATION</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Crémation</h1>
            </div>
        </div>
    </div>
@endsection

@section('body')
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="service-wrap">
            <article class="post post-wrap">
                <div class="featured-post">
                    <div class="post-img">
                        <img src="{{ asset('images/page/cremation/Cremation.jpg') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">Spécialisé dans les fours de crémation humaine</h2>
                    <h3 id="secondTitle"><a href="#">Création et réfection des fours de crémation sur toute la
                            France</a></h3>
                    <p id="mainText"> La crémation est réalisée à de hautes températures, il faut donc protéger
                        les structures du four à l’aide de matériaux réfractaires ; cette particularité de notre
                        métier nous permet donc de vous accompagner dans la création et la mise en œuvre de ces
                        matériaux réfractaires</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="single-detail-build">
                <ul class="list-solutions">
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon1">Briquetage, coffrage / coulage, fourniture de
                                    dalles spécifiques en stock…</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="spacer" data-desktop_height="55" data-mobile_height="55" data-smobile_height="55"></div>
            <div class="flat-question">
                <div class="flat-spacer clearfix" data-desktop="98" data-mobile="45" data-smobile="45"></div>
                <div class="accordion">
                    <div class="accordion-toggle">
                        <div class="toggle-title clearfix">
                            <p id="wrapperTitle">Nos types de four</p> <i class="fas fa-plus"
                                                                          aria-hidden="true"></i>
                        </div>
                        <div class="toggle-content">
                            <ul>
                                <li>FT2</li>
                                <li>FT3</li>
                                <li>ATI ...</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer" data-desktop_height="55" data-mobile_height="55" data-smobile_height="55"></div>
            <div class="service-wrap" style="margin-top: 10px">
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/page/cremation/gallerie/CREMATION1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/cremation/gallerie/CREMATION2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/cremation/gallerie/CREMATION3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/cremation/gallerie/CREMATION4.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/cremation/gallerie/CREMATION5.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précedent</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
