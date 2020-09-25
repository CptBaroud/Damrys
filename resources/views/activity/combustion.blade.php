@extends('activity')

@section('title')
    <title id="pageTitle">Combustion | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id="title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">COMBUSTION</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Combustion</h1>
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
                        <img src="{{ asset('images/combustion/combustion.png') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">DAMRYS COMBUSTION est une entreprise Française avec trente ans d'expérience,</h2>
                    <h3 id="secondTitle"><a href="#">leader dans la
                            conception, la fabrication et l'installation d'incinérateurs écologiques et de très haute
                            technologie. </a></h3>
                    <p id="mainText">Grâce à des études d'ingénierie détaillées et à la collaboration de techniciens
                        qualifiés, nous pouvons
                        vous proposer une gamme complète d'incinérateurs pour les déchets industriels dangereux, les
                        déchets cliniques (hospitaliers et pharmaceutiques), les déchets pathologiques (animaux et
                        vétérinaires), les déchets confidentiels (documents et billets) mais aussi de fours de
                        crémation.
                        <br><br>
                        Nos incinérateurs ont été conçus selon les critères les plus modernes en utilisant des
                        technologies de
                        pointe afin de répondre aux exigences environnementales et de combustion les plus strictes.
                        <br><br>
                        DAMRYS fournit également un système de gestion et de contrôle informatisé, entièrement
                        automatique avec une interface opérateur à écran tactile, un PLC convivial.
                        <br><br>
                        Il est livré avec un système de mesure, d'acquisition et d'enregistrement des paramètres du
                        processus
                        et de transmission à une station PC, ainsi qu'un service de système à distance.
                        <br><br>
                        Tous nos efforts sont orientés vers la satisfaction des besoins de chaque client :<br>
                        Notre personnel technique effectue quotidiennement avec un grand professionnalisme, l'analyse
                        des
                        spécifications des clients, des études de faisabilité, des conceptions et des tests
                        personnalisés, des
                        services après-vente et une assistance à distance.</p>
                        <br>
                    <div class="info-inner">
                        <h3 class="mb-3" id="operationTitle">Nos points forts sont :</h3>
                        <ul class="infomation">
                            <li id="operationItem1"><i class="fa fa-check"></i>Une grande fiabilité</li>
                            <li id="operationItem2"><i class="fa fa-check"></i>Un haut niveau d'efficacité et de sécurité de nos produits</li>
                            <li id="operationItem3"><i class="fa fa-check"></i>Des matériaux de haute qualité</li>
                            <li id="operationItem4"><i class="fa fa-check"></i>Une grande attention aux details</li>
                            <li id="operationItem5"><i class="fa fa-check"></i>Des délais de livraison <courts></courts></li>
                        </ul>
                    </div>
                    <p>
                        DAMRYS continue de s’adapter aux nouvelles technologies et contraintes industrielles pour fournir à
                        ses clients des équipements durables mais aussi respectueux de l'environnement.
                    </p>
                    <div class="post-img">
                        <img src="{{ asset('images/combustion/schema.png') }}" alt="image">
                    </div>
                    <p>Schéma d'un four rotatif</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
        </div>
    </div>
@endsection
