@extends('activity')

@section('title')
    <title id="pageTitle">Nucléaire | Damrys</title>
@endsection

@section('paralax')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id = "title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">NUCLEAIRE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Nucléaire</h1>
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
                        <img src="{{ asset('images/page/cremation/Four%20crématoire.jpg') }}" alt="image">
                        <!--<div class="overlay"></div>-->
                    </div>
                    <div class="icon-wrap">
                        <span class="icon-industry"></span>
                    </div>
                </div>
                <div class="content-post">
                    <h2 id="mainTitle">Damrys, génie thermique en zone contrôlée dite nucléaire</h2>
                    <h3 id="secondTitle"><a href="#">Travaux de réfection sur four de traitement de déchets,
                            chaudières auxiliaires, etc</a></h3>
                    <p id="mainText"> Dans le développement de son savoir-faire DAMRYS a voulu intégrer le
                        marché du nucléaire ; avec l’augmentation du prix du pétrole et l’ouverture du marché de
                        l’électricité à la concurrence ; l’industrie nucléaire est devenue la principale source
                        d’électricité en France et devra donc être maintenue pendant plusieurs années.

                        L’entreprise DAMRYS a donc souhaité former son personnel (PR1RN, PR2RN , PCR…), ce qui
                        nous permet de travailler en zone contrôlée, c’est-à-dire avec risques de rayons
                        ionisants.</p>
                </div>
            </article>
            <div class="spacer" data-desktop_height="60" data-mobile_height="60" data-smobile_height="60"></div>
            <div class="single-detail-build">
                <ul class="list-solutions">
                    <li class="item clearfix">
                        <div class="wrap-icon">
                            <div class="wrap-content">
                                <h4 class="title" id="addon1">Briquetage en voûte et mur, coffrage / coulage, gunitage, damage…</h4>
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
                            <p id="wrapperTitle">Nos types d'installation</p> <i class="fas fa-plus"
                                                                                 aria-hidden="true"></i>
                        </div>
                        <div class="toggle-content">
                            <ul>
                                <li id="wrapperItem1">Four de traitement des dêchets</li>
                                <li id="wrapperItem2">Chaudières auxillaire</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!--
                <div class="row stage">
                    <div class="col-md-12">
                        <h2 class="titre-raffinerie">Nos réalisations</h2>
                        <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">


                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO4.jpg" itemprop="contentUrl" data-size="2592x1936">
                                    <img src="assets/image/raffinerie/PETRO4.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 5</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO5.jpg" itemprop="contentUrl" data-size="2048x1536">
                                    <img src="assets/image/raffinerie/PETRO5.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 6</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO6.jpg" itemprop="contentUrl" data-size="2048x1536">
                                    <img src="assets/image/raffinerie/PETRO6.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 7</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/Abu Dhabi 2.jpg" itemprop="contentUrl" data-size="3264x2448">
                                    <img src="assets/image/raffinerie/Abu Dhabi 2.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO2.jpg" itemprop="contentUrl" data-size="2592x1936">
                                    <img src="assets/image/raffinerie/PETRO2.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO9.jpg" itemprop="contentUrl" data-size="2592x1944">
                                    <img src="assets/image/raffinerie/PETRO9.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 10</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO3.jpg" itemprop="contentUrl" data-size="4224x2376">
                                    <img src="assets/image/raffinerie/PETRO03-180x53.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>--
                            </figure>


                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO7.jpg" itemprop="contentUrl" data-size="2048x1536">
                                    <img src="assets/image/raffinerie/PETRO7.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 8</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/PETRO8.jpg" itemprop="contentUrl" data-size="604x604">
                                    <img src="assets/image/raffinerie/PETRO8.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption 9</figcaption>--
                            </figure>

                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="assets/image/raffinerie/Abu Dhabi 1.jpg" itemprop="contentUrl" data-size="2448x3264">
                                    <img src="assets/image/raffinerie/Abu Dhabi 1.jpg" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption  1</figcaption>--
                            </figure>


                        </div>-->
            </div>
        </div>
    </div>
@endsection
