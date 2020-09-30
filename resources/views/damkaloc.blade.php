@extends('app')

@section('title')
    <title id="pageTitle">Damkaloc | Damrys</title>
@endsection

@section('content')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id="title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">DAMKALOC</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Damkaloc</h1>
            </div>
        </div>
    </div>

    <div class="main-home1">
        <section class="flat-welcome clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="image-welcome">
                            <div class="image-wrap">
                                <img src="{{ asset('images/page/damkaloc/damkaloc.jpg') }}" alt="image">
                            </div>
                            <div class="image-inner">
                                <img src="{{ asset('images/page/damkaloc/damkaloc2.png') }}" alt="image">
                            </div>
                            <div class="icon-welcome">
                                <i class="icon-factory-3"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="spacer" data-desktop_height="0" data-mobile_height="50"
                             data-smobile_height="50"></div>
                        <div class="info-welcome">
                            <img src="{{ asset('images/home/home7.jpg') }}" alt="image">
                            <h1 id="mainTitle">La société DAMKALOC à été crée aux Caraïbes en février 2016</h1>
                            <p class="text" id="mainText">par les Dirigeants des sociétés DAMRYS
                                et DAMLOC : Pascal MOREAU et Sébastien ROGER et de leur collaboration et association
                                avec : Emmanuel LECARDEUR, déjà implanté en Guadeloupe depuis 20 ans et ayant une forte
                                expérience dans le domaine du bâtiment
                                <br><br>
                                DAMKALOC est donc née de la réflexion de nos deux entités DAMRYS : spécialiste en Génie
                                Thermique et DAMLOC : spécialiste dans la location de matériel TP et BTP qui au travers
                                de leurs activités, de leurs besoins et de leurs expériences, ont découvert et constaté,
                                les réels avantages apportés par les produits de la marque DOKA°.
                                <br><br>
                                DOKA° étant le spécialiste, le technicien mondial n°1 du coffrage modulaire
                                <br><br>
                                DAMKALOC est orientée vers la commercialisation et la location de coffrages modulaires
                                pour vous proposer des solutions de coffrage de grande qualité pour tous les domaines du
                                BTP; avec la mise en application de la méthodologie reconnue, de la marque DOKA®, créée
                                depuis 1956.
                                <br><br>
                                DAMKALOC est aujourd'hui le distributeur exclusif des produits de la marque DOKA° aux
                                Caraïbes.
                                <br><br>
                                Nous vous proposons une prestation complète en vous accompagnant dès le début de vos
                                projets grâce à l'Etude, l'Analyse et à la Méthodologie DOKA° qui permet une vraie
                                anticipation de vos besoins chantier. Les systèmes et les composants de coffrages
                                utilisés sont ainsi adaptés à chacun de vos projets et répondent à toutes vos exigences.
                                <br><br>
                                Puis au travers de la location et de la commercialisation de systèmes de coffrage et
                                d'étaiement DOKA° adaptables à tous les secteurs du BTP : Planchers / Voiles
                            </p>
                            <div class="info-inner">
                                <ul class="infomation">
                                    <li id="operationItem1"><i class="fa fa-check"></i>Vente de coffrages et de consomables</li>
                                    <li id="operationItem2"><i class="fa fa-check"></i>Capacité de 1200m² de voiles et murs et autant de planchers</li>
                                </ul>
                            </div>
                            <p id="secondText">DAMKALOC vous accompagne pour bâtir vos projets de manière plus efficace et plus sûre</p>
                            <div class="info-button">
                                <a href="http://damkaloc.fr/" class=" hvr-shutter-out-verticall"
                                   id="operationMore">En savoir plus</a>
                            </div>
                            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
                            <div class="service-wrap" style="margin-top: 10px">
                                <div class="row">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC2.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC3.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC6.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC7.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC8.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC9.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC10.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC11.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC12.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC13.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC14.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC15.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC16.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC17.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC18.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC19.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/page/damkaloc/gallerie/DAMKALOC20.jpg') }}" class="d-block w-100" alt="...">
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
                </div>
            </div>
        </section>
@endsection
