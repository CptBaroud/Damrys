@extends('activity')

@section('title')
    <title id="pageTitle">Incineration | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1" style="background-repeat: no-repeat">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id="title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">INCINERATION</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Incinération</h1>
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
                        <img src="{{ asset('images/page/incineration/INCINERATION11.jpg') }}" alt="image">
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">Damrys, société spécialisée dans les fours d’incinération</h2>
                    <h3 id="secondTitle"><a href="#">Maintenance et réfection de four d’incinération de déchets ménagers,
                            industriels, hospitaliers et carcasses d'animaux.</a></h3>
                    <p id="mainText"> Suite aux changements de nos habitudes de consommation, aux évolutions de la
                        réglementation et aux augmentations des PCI, les fours et notamment les matériaux
                        réfractaires sont fortement sollicités<br>

                        Du fait de notre expérience et d’un savoir faire reconnu, nous réalisons en utilisant
                        les techniques les plus fiables et les plus innovantes, des incinérateurs neufs et nous
                        vous accompagnons dans la maintenance curative et préventive pour préserver votre outil
                        de production<br>

                        Au-delà de ses missions classiques DAMRYS assure une activité de conseil ; un mode
                        d’intervention adapté à votre process et à votre délai</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="single-detail-build">
                <ul class="list-solutions">
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon1">Briquetage, coffrage / coulage, damage, shotcreting…</h4>
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
                            <p id="wrapperTitle">Nos types de four</p> <i class="fas fa-plus" aria-hidden="true"></i>
                        </div>
                        <div class="toggle-content">
                            <ul>
                                <li id="wrapperItem1">Incinérateurs rotatifs</li>
                                <li id="wrapperItem2">Incinérateurs à grilles</li>
                                <li id="wrapperItem3">Incinérateurs de déchets divers</li>
                                <li id="wrapperItem4">Hospitaliers</li>
                                <li id="wrapperItem5">Industriels</li>
                                <li id="wrapperItem6">Carcasses d'animaux ...</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="service-wrap" style="margin-top: 10px">
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/page/incineration/gallerie/INCINERATION.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/incineration/gallerie/INCINERATION2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/incineration/gallerie/INCINERATION3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/incineration/gallerie/INCINERATION6.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/incineration/gallerie/INCINERATION7.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/incineration/gallerie/INCINERATION8.jpg') }}" class="d-block w-100" alt="...">
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
