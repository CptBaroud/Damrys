@extends('activity')

@section('title')
    <title id="pageTitle">Fonderie | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}">ACCUEIL</a></li>
                    <li><a href="#">FONDERIE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1>Fonderie</h1>
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
                            <h2>Damrys intervient sur le marché de la Raffinerie, Pétrochimie, Chimie</h2>
                            <h3><a href="#">Intervention en France et à l’étranger sur les sites de pétrochimie</a></h3>
                            <p>Nous sommes un intervenant incontournable sur le marché de la Pétrochimie, Raffinerie, Chimie, du fait de notre expérience, de notre savoir-faire et de nos compétences.
                                L’ensemble de notre personnel a les formations et les habilitations nécessaires pour intervenir sur tous les sites Pétrochimiques en France et à l’étranger.</p>
                        </div>
                    </article>
                    <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
                    <div class="single-detail-build">
                        <ul class="list-solutions">
                            <li class="item clearfix">
                                <div class="wrap-icon">
                                    <div class="wrap-content">
                                        <h4 class="title">Garnissage de béton ultra-résistant à l’érosion par du personnel homologué QUARTIS</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="item clearfix">
                                <div class="wrap-icon">
                                    <div class="wrap-content">
                                        <h4 class="title">Nous avons la certification MASE qui reflète notre implication dans le management de la sécurité et de la qualité</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="spacer" data-desktop_height="55" data-mobile_height="55" data-smobile_height="55"></div>
                    <div class="flat-question">
                        <div class="flat-spacer clearfix" data-desktop="98" data-mobile="45" data-smobile="45" ></div>
                        <div class="accordion">
                            <div class="accordion-toggle">
                                <div class="toggle-title clearfix">
                                    <p>Nos types de four</p> <i class="fas fa-plus" aria-hidden="true"></i>
                                </div>
                                <div class="toggle-content">
                                    <ul>
                                        <li>Unité FCC : Four de Cracking Catalytique,</li>
                                        <li>Unité à souffre,</li>
                                        <li>Huiles…</li>
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
