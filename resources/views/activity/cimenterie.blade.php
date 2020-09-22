@extends('activity')

@section('title')
    <title id="pageTitle">Cimenterie | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id = "title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">CIMENTRIE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Cimenterie</h1>
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
                        <img src="{{ asset('images/page/cimenterie/Cimenterie.jpg') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">Damrys est un partenaire majeurdes cimenteries en France</h2>
                    <h3 id="secondTitle"><a href="#">Travaux neufs et rénovation des fours pour optimiser la production.</a></h3>
                    <p id="mainText">Depuis plusieurs années nous avons réalisé des arrêts majeurs ainsi que des opérations de
                        travaux neufs chez les acteurs principaux de la cimenterie en France<br><br>

                        Au travers de DAMLOC, nous possédons le matériel spécifique pour les interventions
                        urgentes en cimenterie (DAT pour les diamètres de 3 à 5 m, mini pelle radiocommandée,
                        shotcreting…)<br><br>

                        Nous sommes également force de proposition pour répondre à l’ensemble de vos travaux
                        courants au travers de techniques innovantes permettant des temps d’arrêt réduits et
                        vous permettant d’optimiser votre production.</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="single-detail-build">
                <ul class="list-solutions">
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon1">Briquetage sur DAT, briquetage en mur et voûte</h4>
                            </div>
                        </div>
                    </li>

                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon2">Gunitage, coffrage / coulage, damage…</h4>
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
                            <p id="wrapperTitle">Nos types d'installations</p> <i class="fas fa-plus" aria-hidden="true"></i>
                        </div>
                        <div class="toggle-content">
                            <ul>
                                <p id="wrapperText">Fours cylindriques</p>
                                <li id="wrapperItem1"><i class="fa fa-check-circle"></i> Sur Ligne sèche</li>
                                <li id="wrapperItem2"><i class="fa fa-check-circle"></i> Semi-sèche</li>
                                <li id="wrapperItem3"><i class="fa fa-check-circle"></i> Humide</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
