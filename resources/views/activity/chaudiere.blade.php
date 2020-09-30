@extends('activity')

@section('title')
    <title id="pageTitle">Chaudière | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id = "title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">CHAUDIERE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Chaudière</h1>
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
                        <img src="{{ asset('images/page/chaudiere/chaudiere.jpg') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">Une prestation sur mesure pour tous les types d’installation de
                        chaudières</h2>
                    <h3 id="secondTitle"><a href="#">Travaux neufs et rénovation des chaudières et récupérateur
                            d’énergie</a></h3>
                    <p id="mainText">Nous avons une expérience reconnue sur la mise en œuvre des matériaux
                        réfractaires dans
                        les chaudières et récupérateur d’énergie présent dans de nombreuses industries, nous
                        sommes force de proposition pour vous accompagner dans la rénovation ou les travaux
                        neufs.
                        <br>
                        DAMRYS prend en charge la gestion complète de la conception d’un projet, à la
                        maintenance du réfractaire et de l’ouvreau de brûleurs, le dépannage de votre chaudière,
                        en passant par : l’expertise, l’étude et la conception, la fourniture des matériaux, la
                        démolition et reconstruction du réfractaire, la supervision, les échafaudages, le
                        séchage de la fumisterie et le traitement des déchets</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="single-detail-build">
                <ul class="list-solutions">
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon1">Briquetage, coffrage / coulage, gunitage,
                                    damage…</h4>
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
                                <li id="wrapperItem1">Chaudière à tubes d’eau</li>
                                <li id="wrapperItem2">Chaudière à tubes de fumée</li>
                                <li id="wrapperItem3">Chaudière à combustibles : gaz, fuel, bois, charbon</li>
                                <li id="wrapperItem4">Chaudière biomasse</li>
                                <li id="wrapperItem5">De type horizontal ou vertical…</li>
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
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE6.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE7.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE8.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE9.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE10.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE11.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE12.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE13.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE14.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE15.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE16.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE17.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE18.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE19.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE20.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE21.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/chaudiere/gallerie/ENERGIE22.jpg') }}" class="d-block w-100" alt="...">
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
