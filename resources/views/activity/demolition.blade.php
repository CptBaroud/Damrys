@extends('activity')

@section('title')
    <title id="pageTitle">Démolition | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id = "title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">DEMOLITION</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Démolition</h1>
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
                        <img src="{{ asset('images/page/demolition/gallerie/DEMOLITION2.jpeg') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">DAMRYS est une entreprise innovante, toujours à l’écoute des nouvelles technologies pour vous
                        en faire profiter</h2>
                    <h3 id="secondTitle">C’est pourquoi, nous développons depuis plusieurs années notre activité de démolition robotisée et
                            contrôlée grâce à des Brokk®.</h3>
                    <p id="mainText">Tout d’abord au sein des sites industriels français pour lesquels nous sommes prestataires de travaux
                        réfractaires et depuis, sur de nouveaux marchés particulièrement dans le secteur du bâtiment en Franc
                        et en Europe.
                        <br><br>
                        Nous répondons ainsi à vos travaux de démolition en espace exigus et/ou confinés : par rapport à une
                        pelleteuse, l’encombrement et le poids d’un BROKK® est réduit par 3 pour une puissance aussi
                        importante et des équipements tout aussi adaptés : pince, BRH, fraise, godet, cisaille…
                        <br><br>
                        Electrique et radiocommandé, ce matériel réduit considérablement les nuisances, il ne génère aucune
                        pollution, ni aucune fumée pouvant gêner la progression de l’opérateur qui garde ainsi une vue
                        d’ensemble sur son travail et avance en toute sécurité.
                        <br><br>
                        Le développement de cette activité nous permet aujourd’hui d’avoir notre propre matériel avec un
                        responsable de chantier dédié et accompagné d’une équipe de personnes qualifiées et habilitées à son
                        utilisation. Ce qui nous permet d’être complétement autonome et de vous offrir une prestation
                        complète (opérateur, matériel, consommables, entretien…)
                        <br><br>
                        Reconnu pour notre réactivité et notre savoir-faire, nous sommes devenu, au fil du temps, un acteur qui
                        compte dans le domaine de la démolition robotisée de qualité.</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="service-wrap" style="margin-top: 10px">
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/page/demolition/gallerie/DEMOLITION.jpeg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/demolition/gallerie/DEMOLITION2.jpeg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/demolition/gallerie/DEMOLITION3.jpeg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/demolition/gallerie/DEMOLITION4.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/demolition/gallerie/DEMOLITION5.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/page/demolition/gallerie/DEMOLITION6.png') }}" class="d-block w-100" alt="...">
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
