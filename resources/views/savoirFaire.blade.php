@extends('app')

@section('title')
    <title id="pageTitle">Savoir Faire | Damrys</title>
@endsection

@section('content')
    <div class="page-title parallax parallax1 style1">
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ route('home') }}" id="title">ACCUEIL</a></li>
                    <li><a id="title2">SAVOIR FAIRE</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">Savoir Faire</h1>
            </div>
        </div>
    </div>

    <section class="flat-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="wrap-info">
                        <div class="info-inner">
                            <ul>
                                <li>
                                    <p id="wrapInfoText1" style="text-align: left !important;">L'expertise refractaire </p>
                                </li>
                                <li>
                                    <p id="wrapInfoText2" style="text-align: left !important;">L'etude et la conception des garnissages </p>
                                </li>
                                <li>
                                    <p id="wrapInfoText3" style="text-align: left !important;">Travaux neufs et mise aux normes </p>
                                </li>
                                <li>
                                    <p id="wrapInfoText4" style="text-align: left !important;">La Fourniture des matériaux réfractaires </p>
                                </li>
                                <li>
                                    <p id="wrapInfoText5" style="text-align: left !important;">La création d’un dossier de fin de contrat</p>
                                </li>
                                <li>
                                    <p id="wrapInfoText6" style="text-align: left !important;">Logistique et transport</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="wrap-content">
                        <div class="text-top">
                            <h2 id="mainTitle">Damrys intervient sur toute la France et à l'étranger</h2>
                            <p id="mainText">L’entreprise DAMRYS est capable d’intervenir dans un délai très court sur l’ensemble du
                                territoire national et international avec ses équipes formées et compétentes pour l’ensemble
                                des travaux de fumisterie.
                                Nous possédons une main-d’œuvre hautement qualifiée et habilitée nous permettant
                                d’intervenir sur tous types de sites.</p>
                        </div>
                        <div class="text-centerr">
                            <h1 id="secondTitle">Nos axes</h1>
                            <div class="text-centerr-inner style1">
                                <div class="icon-inner">
                                    <i class="icon-growth"></i>
                                </div>
                                <div class="text-inner">
                                    <h4 id="title1">L'expertise réfractaire</h4>
                                    <p id="text1">Analyse en commun des problèmes rencontrés, amélioration des garnissages et réduction
                                        des coûts d’exploitation</p>
                                </div>
                            </div>

                            <div class="text-centerr-inner style1">
                                <div class="icon-inner">
                                    <i class="icon-factory"></i>
                                </div>
                                <div class="text-inner">
                                    <h4 id="title2">L’étude et la conception des garnissages</h4>
                                    <p id="text2">Adaptation du garnissage au process du four selon les nouvelles contraintes
                                        d’exploitation et environnementales</p>
                                </div>
                            </div>

                            <div class="text-centerr-inner style1">
                                <div class="icon-inner">
                                    <i class="icon-factory-2"></i>
                                </div>
                                <div class="text-inner">
                                    <h4 id="title3">Travaux neufs et mise aux normes</h4>
                                    <p id="text3">Etudes et conception de garnissage selon les types de fours, les contraintes
                                        chimiques, thermiques…</p>
                                </div>
                            </div>

                            <div class="text-centerr-inner style1">
                                <div class="icon-inner">
                                    <i class="icon-factory-4"></i>
                                </div>
                                <div class="text-inner">
                                    <h4 id="title4">La Fourniture des matériaux réfractaires</h4>
                                    <p id="text4">Basé sur nos expériences multiples et connaissances techniques nous vous proposons
                                        une gamme complète de produits
                                        Afin d’améliorer la disponibilité des ces produits et notre réactivité, nous avons
                                        créé un partenariat avec nos fournisseurs ce qui nous permet d’avoir un stock
                                        toujours prêt à être mis en œuvre par nos équipes dans vos installations</p>
                                </div>
                            </div>

                            <div class="text-centerr-inner style1">
                                <div class="icon-inner">
                                    <i class="icon-strategy"></i>
                                </div>
                                <div class="text-inner">
                                    <h4 id="title5">La création d’un dossier de fin de contrat</h4>
                                    <p id="text5">Afin de suivre l’évolution et la qualité de nos interventions nous mettons à votre
                                        disposition un Bureau d’Etudes qui saura faire les relevés pour les intégrer dans un
                                        suivi systématique « le dossier de fin de contrat »</p>
                                </div>
                            </div>

                            <div class="text-centerr-inner style1">
                                <div class="icon-inner">
                                    <i class="icon-factory-3"></i>
                                </div>
                                <div class="text-inner">
                                    <h4 id="title6">Logistique et transport</h4>
                                    <p id="text6">Nous mettons à votre disposition le matériel, les matériaux et les hommes pour
                                        respecter vos exigences de planning et vos délais d’intervention en accord avec vos
                                        contraintes de production</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row style2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap-row">
                        <p id="contactText">Damrys</p>
                        <span id="contactTextSpan">Une prestation sur mesure en génie thermique</span>
                        <a class="themesflat-btn hvr-shutter-out-verticallll" href="{{ route('contact') }}" id="buttonContact">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
