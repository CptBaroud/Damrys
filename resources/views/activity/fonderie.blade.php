@extends('activity')

@section('title')
    <title id="pageTitle">Fonderie | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id="title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">FONDERIE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Fonderie</h1>
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
                        <img src="{{ asset('images/accueil/abu-dhabi-1175x744.jpg') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">Damrys possède une réelle expertise dans les travaux d'entretien de routine</h2>
                    <h3 id="secondTitle"><a href="#">Notre objectif : l'optimisation de la production par la qualité
                            et la rapidité de nos interventions.</a></h3>
                    <p id="mainText">D'importantes entreprises françaises nous font confiance depuis des années pour
                        l'entretien de leurs fours.
                        Cet accord nous a permis de planifier les travaux et interventions à venir dans les différents
                        pays de l'Union européenne.
                        pour s'assurer que l'innervation de la production sera optimisée.
                        Cela nous donne également la possibilité d'adapter nos services en fonction de vos besoins et de
                        vos désirs.</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="single-detail-build">
                <ul class="list-solutions">
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 id="addon1" class="title">Briquetage, coulage, démolition manuelle ou à l'aide d'une mini-pelle/roche, terre battue</h4>
                            </div>
                        </div>
                    </li>
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 id="addon2" class="title">Technique par bourrage ou vibration, modèle fibreux mis en place...</h4>
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
                                <li id="wrapperItem1">Four de galvanisation</li>
                                <li id="wrapperItem2">Four de préchauffage</li>
                                <li id="wrapperItem3">Les fours Junker...</li>
                                <li id="wrapperItem4">Fours Calmow / Striko</li>
                                <li id="wrapperItem5">Volets de brûleurs</li>
                                <li id="wrapperItem6">(Pochette de transfert)...</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- <article class="post post-inner style2 clearfix">
                                                    <div class="content-post">
                                                        <h3><a href="#">Industry Solutions</a></h3>
                                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble.</p>
                                                        <div class="info-inner">
                                                            <ul class="infomation">
                                                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Research beyond the business plan</li>
                                                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Marketing options and rates</li>
                                                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>The ability to turnaround consulting</li>
                                                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Help companies into more profitable</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="featured-post">
                                                        <img src="{{ asset('images/services/service3.png') }}" alt="image">
                                                    </div>
                                                </article>-->
        </div>
    </div>
@endsection
