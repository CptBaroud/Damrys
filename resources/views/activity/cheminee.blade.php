@extends('activity')

@section('title')
    <title id="pageTitle">Cheminée | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id = "title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">CHEMINEE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Cheminée</h1>
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
                        <img src="{{ asset('images/page/chemine/CHEMINEE1.jpg') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">Damrys, une expérience dans la réfection des cheminées industrielles</h2>
                    <h3 id="secondTitle"><a href="#">De nombreuses méthodes d’application adaptées aux types
                            d’installation</a></h3>
                    <p id="mainText">Nos expériences multiples et nos connaissances techniques, nous permettent
                        de vous proposez une gamme complète de produits, matériaux en fonction des structures
                        (métalliques, béton, briques) mais aussi d’adapter nos garnissages ou chemisages au
                        process des installations selon vos contraintes d’exploitations et
                        environnementales.<br><br>

                        Notre politique qualité consiste à satisfaire notre client par une gestion globale de
                        nos chantiers, en alliant : savoir-faire, sécurité, coûts et délai.<br><br>

                        Nous pouvons intervenir pour l’expertise, le contrôle, l’entretien, les réparations et
                        la mise en place d’équipement sur l’ensemble de vos installations.</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="single-detail-build">
                <ul class="list-solutions">
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon1">Traitement d’armatures, couturage, protection
                                    anti-acide, réparation des bétons dégradés, réagréage</h4>
                            </div>
                        </div>
                    </li>
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon2">Bouchage de fissures, entoilage, cerclage,
                                    corsetage…</h4>
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
                            <p id="wrapperTitle">Nos types d'installations</p> <i class="fas fa-plus"
                                                                                  aria-hidden="true"></i>
                        </div>
                        <div class="toggle-content">
                            <ul>
                                <li id="wrapperItem1">Cheminées industrielles</li>
                                <li id="wrapperItem2">Châteaux d’eau réfrigérants</li>
                                <li id="wrapperItem3">Tours béton</li>
                                <li id="wrapperItem4">Silos</li>
                                <li id="wrapperItem5">Réservoirs</li>
                                <li id="wrapperItem6">Structures béton armé diverses…</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-wrap" style="margin-top: 10px">
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE6.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE7.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE8.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE10.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE11.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE12.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE13.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chemine/gallerie/CHEMINEE14.jpg') }}" class="d-block w-100" alt="...">
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
