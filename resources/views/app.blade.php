<meta charset="utf-8">
<meta name="author" content="W4B">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Bootstrap  -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

<!-- Colors -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/colors/color1.css') }}" id="colors">

<!-- Animation Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

<!-- Slider Revolution CSS Files -->
<link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/navigation.css') }}">

<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">

<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png">') }} ">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png">') }} ">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png">') }} ">

<link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<head>
    @yield('title')
    <div class="top-bar style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 clearfix">
                    <div class="top-bar-content">
                    </div>
                    <div class="top-bar-language clearfix">
                        <div class="wrap-language">
                            <div class="language-name">
                                <span id="langueMenu">Langue</span>
                            </div>
                            <ul class="select-name">
                                <li>
                                    <a id="buttonEnglishChange"><img src="{{ asset('images/blog/flag.png') }}" alt="image">English
                                    </a>
                                </li>
                                <li>
                                    <a id="buttonFrenchChange"><img src="{{ asset('images/blog/flag-fr') }}-24x24.png" alt="image" id="buttonFrenchChange">Français</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="float: right;">
                        @if(Auth::check())
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @else
                            <a href="{{route('login')}}" style="color: white;">Se connecter</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-wrap-inner style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top clearfix">
                        <div class="header-top-logo">
                            <a id="logo" href="{{ route('home') }}" class="logo">
                                <img src="{{ asset('images/logo-damrys.png') }}" alt="Damrys" data-width="156" data-height="36">
                            </a>
                        </div>
                        <div class="header-top-info">
                            <ul>
                                <li class="email">
                                    <div class="header-image">
                                        <img src="{{ asset('images/blog/blog3.png') }}" alt="image">
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="#" id="headerMailTitle">EMAIL</a></h4>
                                        <h5><a href="#">damrys@damrys.fr</a></h5>
                                    </div>
                                </li>
                                <li class="phone" style="padding-left: 35px">
                                    <div class="header-image">
                                        <img src="{{ asset('images/blog/blog23.png') }}" alt="image">
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="#" id="headerPhoneTitle">TÉLÉPHONE</a></h4>
                                        <h5><a href="#" id="headerPhoneContent">02 40 67 18 53</a></h5>
                                        <h5><a href="#" id="headerPhoneContent2">02 35 68 33 33</a></h5>
                                    </div>
                                </li>
                                <li class="visit">
                                    <div class="header-image">
                                        <img src="{{ asset('images/blog/blog24.png') }}" alt="image">
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="#" id="headerAdressTitle" class="">ADRESSE</a></h4>
                                        <h5>
                                            <a href="https://www.google.com/maps/place/1+Rue+Ren%C3%A9+Panhard,+44360+Vigneux-de-Bretagne/@47.3045501,-1.7571017,17z/data=!3m1!4b1!4m5!3m4!1s0x48058e4215521d13:0x826cbcb96f1785c0!8m2!3d47.3045465!4d-1.754913" id="headerAdressContent">Siège social : 1 Rue René Panhard - 44360
                                                Vigneux-de-Bretagne</a></h5>
                                        <h5>
                                            <a href="https://www.google.com/maps/place/7+Rue+L%C3%A9on+Blum,+76530+Grand-Couronne/@49.3641951,1.0149102,17z/data=!3m1!4b1!4m5!3m4!1s0x47e0e0296112022d:0x2cc23dbef83a8608!8m2!3d49.3641916!4d1.0170989" id="headerAdressContent2">Agence : 7 rue Léon
                                                Blum - 76530 Grand-Couronne</a></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="style1" id="header">
        <div id="site-header">
            <div class="container">
                <div class="row-desk">
                    <div class="col-lg-12">
                        <div class="header-wrap">
                            <div class="mobile-button">
                                <span></span>
                            </div>
                            <div class="nav-wrap ">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li>
                                            <a href="{{ route('home') }}" title="" id="accueilLink">Accueil</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('entreprise') }}" title="" id="entrepriseLink">L'entreprise</a>
                                        </li>
                                        <li>
                                            <a href="#" title="" id="activityDropdown">Activités <i class="fa fa-caret-down"></i></a>
                                            <ul class="sub-menu">
                                                <li id="raffinerie">
                                                    <a href="{{ route('raffinerie') }}" title="" id="raffinerieLink">Raffinerie,
                                                        Chimie, Pétrochimie</a>
                                                </li>
                                                <li id="fonderie">
                                                    <a href="{{ route('fonderie') }}" title="" id="fonderieLink">Fonderie</a>
                                                </li>
                                                <li id="incineration">
                                                    <a href="{{ route('incineration') }}" title="" id="incinerationLink">Incinération</a>
                                                </li>
                                                <li id="cremation">
                                                    <a href="{{ route('cremation') }}" title="" id="cremationLink">Crémation</a>
                                                </li>
                                                <li id="chaudiere">
                                                    <a href="{{ route('chaudiere') }}" title="" id="chaudiereLink">Chaudière</a>
                                                </li>
                                                <li id="cimenterie">
                                                    <a href="{{ route('cimenterie') }}" title="" id="cimenterieLink">Cimenterie</a>
                                                </li>
                                                <li id="nucleaire">
                                                    <a href="{{ route('nucleaire') }}" title="" id="nucleaireLink">Nucléaire</a>
                                                </li>
                                                <li id="cheminee">
                                                    <a href="{{ route('cheminee') }}" title="" id="chemineeLink">Cheminée</a>
                                                </li>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                        <li id="demolition">
                                            <a href="{{ route('demolition') }}" title="" id="demolitionLink">Démolition</a>
                                        </li>
                                        <li id="export">
                                            <a href="{{ route('export') }}" title="" id="exportLink">Export</a>
                                        </li>
                                        <li id="actualite">
                                            <a href="{{ route('damkaloc') }}" title="">Damkaloc</a>
                                        </li>
                                        <li id="actualite">
                                            <a href="{{ route('blogHome') }}" title="" id="actualityLink">Actualitées</a>
                                        </li>
                                        <li id="contact">
                                            <a href="{{ route('contact') }}" title="" id="contactLink">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</head>

<body>

    @yield('content')

</body>

<footer class="style1" id="footer">
    <div class="container">
        <div class="row">
            <div class="footer">
                <div class="col-lg-12">
                    <div class="widget widget-about widget-menu">
                        <h2>Navigation</h2>
                        <ul>
                            <li><a href="{{ route('home') }}" id="indexFooter">Accueil</a></li>
                            <li><a href="{{ route('entreprise') }}" id="entrepriseFooter">L'entreprise</a></li>
                            <li><a href="{{ route('contact') }}" id="savoirFaireFooter">Notre savoir faire</a></li>
                            <li><a href="#footer">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-explore widget-menu">
                        <h2 id="activityFooter">Nos activités</h2>
                        <ul>
                            <li><a href="{{ route('raffinerie') }}" id="refineryFooter">Raffinerie, Chimie, Pétrochimie</a></li>
                            <li><a href="{{ route('fonderie') }}" id="foundryFooter">Fonderie</a></li>
                            <li><a href="{{ route('incineration') }}" id="incinerationFooter">Incinération</a></li>
                            <li><a href="{{ route('cremation') }}" id="cremationFooter">Crémation</a></li>
                            <li><a href="{{ route('chaudiere') }}" id="boilerFooter">Chaudière</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-links widget-menu">
                        <h2>&nbsp;</h2>
                        <ul>
                            <li><a href="{{ route('cimenterie') }}" id="cementFooter">Cimenterie</a></li>
                            <li><a href="{{ route('nucleaire') }}" id="nuclearFooter">Nucléaire</a></li>
                            <li><a href="{{ route('cheminee') }}" id="chimneyFooter">Cheminée</a></li>
                            <li><a href="{{ route('demolition') }}" id="demolitionFooter">Démolition</a></li>
                            <li><a href="{{ route('export') }}" id="exportFooter">Export</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-contact widget-menu">
                        <h2 id="contactTitleFooter">Contact</h2>
                        <ul>
                            <li><a id="addressContentFooter">1 rue René Panhard <br> 44360 Vigneux-de-Bretagne <br> ZA de la Biliais Deniaud </a></li>
                            <li><a>damrys@damrys.fr</a></li>
                            <li><a id="phoneContentFooter">02 40 67 18 53</a></li>
                        </ul>
                        <div class="widget-social">
                            <ul>
                                <li class="active">
                                    <a href="https://www.linkedin.com/company/damrys/?originalSubdomain=fr" target="_blank" rel="alternate" title="facebook">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://www.damloc.fr/" target="_blank" rel="alternate" title="twitter">
                                        <i class="fas fa-globe"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget-links widget-menu">
                        <h2 id=""> </h2>
                        <br>
                        <ul>
                            <li><a id="addressContentFooter2">7 rue Léon Blum <br>76530 Grand-Couronne</a></li>
                            <li><a>damrys@damrys.fr</a></li>
                            <li><a id="phoneContentFooter2">02 35 68 33 33</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="col-lg-12">
                    <div class="bottom-inner">
                        <p>Made by<a href="http://www.web4business.fr" target="_blank"> Web 4 Business </a>
                            <a href="#footer" id="legalMentionFooter">- Mentions légales</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="scroll-top"><i class="fa fa-angle-up"> </i></div>
<!-- Main js files-->
<script src="{{ asset('javascript/map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-lPzqKPR1sdZsnAgw22gWivO5CIP8fHs&callback=initMap"></script>
<script src="{{ asset('javascript/jquery.min.js')}}"></script>
<script src="{{ asset('javascript/jquery.easing.js')}}"></script>
<script src="{{ asset('javascript/jquery-waypoints.js')}}"></script>
<script src="{{ asset('javascript/parallax.js')}}"></script>
<script src="{{ asset('javascript/rev-slider.js')}}"></script>
<script src="{{ asset('javascript/owl.carousel.min.js') }}"></script>
<script src="{{ asset('javascript/jquery.validate.js') }}"></script>
<script src="{{ asset('javascript/jquery-fancybox.js') }}"></script>
<script src="{{ asset('javascript/jquery-countTo.js') }}"></script>
<script src="{{ asset('javascript/flexslider.min.js') }}"></script>
<script src="{{ asset('javascript/main.js') }}"></script>

<!-- Slider -->
<script src="{{ asset('rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('javascript/rev-slider.js') }}"></script>

<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- My js files-->
<script src="{{ asset('javascript/lang/lang.en.js') }}"></script>
<script src="{{ asset('javascript/lang/lang.fr.js') }}"></script>
<script src="{{ asset('javascript/traduction.js') }}"></script>
