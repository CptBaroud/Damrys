@extends('app')

@section('title')
    @yield('title')
@endsection

@section('content')
    @yield('paralax')
    <div class="main-services-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="widget widget-service-post">
                        <ul class="list-post-service clearfix">
                            <li>
                                <h6 class="heading">
                                    <a id='raffinerieMenuPage' class="{{ Request::path() == 'raffinerie' ? 'flat-active' : '' }}" href="{{ route('raffinerie') }}" rel="bookmark">Raffinerie,
                                        Chimie, Pétrochimie</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id='fonderieMenuPage' class="{{ Request::path() == 'fonderie' ? 'flat-active' : '' }}" href="{{ route('fonderie') }}" rel="bookmark">Fonderie</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id='incinerationMenuPage' class="{{ Request::path() == 'incineration' ? 'flat-active' : '' }}" href="{{ route('incineration') }}" rel="bookmark">Incinération</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id='cremationMenuPage' class="{{ Request::path() == 'cremation' ? 'flat-active' : '' }}" href="{{ route('cremation') }}" rel="bookmark">Crémation</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id="chaudiereMenuPage" class="{{ Request::path() == 'chaudiere' ? 'flat-active' : '' }}" href="{{ route('chaudiere') }}"
                                                       rel="bookmark">Chaudière</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id="cimenterieMenuPage" class="{{ Request::path() == 'cimenterie' ? 'flat-active' : '' }}" href="{{ route('cimenterie') }}" rel="bookmark">Cimenterie</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id="nucleaireMenuPage" class="{{ Request::path() == 'nucleaire' ? 'flat-active' : '' }}" href="{{ route('nucleaire') }}"
                                                       rel="bookmark">Nucléaire</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id="chemineeMenuPage" class="{{ Request::path() == 'cheminee' ? 'flat-active' : '' }}" href="{{ route('cheminee') }}" rel="bookmark">Cheminée</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id="demolitionMenuPage" class="{{ Request::path() == 'demolition' ? 'flat-active' : '' }}" href="{{ route('demolition') }}" rel="bookmark">Démolition</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="heading">
                                    <a id="exportMenuPage" class="{{ Request::path() == 'export' ? 'flat-active' : '' }}" href="{{ route('export') }}" rel="bookmark">Export</a>
                                </h6>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-banner">
                        <div class="textwidget">
                            <p><img src="{{ asset('images/services/banner-service.jpg') }}" alt="banner-service">
                                <span class="text" id="bannerServices">INSERER TEXTE ICI</span></p>
                        </div>
                    </div>
                    <div class="sidebar-wrap sidebar">
                        <div class="spacer" data-desktop_height="30" data-mobile_height="30" data-smobile_height="30"></div>
                        <div class="widget-need-help">
                            <h4 class="heading" id="helpTitle">Besoin d'aide</h4>
                            <p id="textHelp">INSERER TEXTE ICI</p>
                            <p><a href="#">02 40 67 18 53</a></p>
                        </div>
                        <div class="spacer" data-desktop_height="30" data-mobile_height="30" data-smobile_height="30"></div>
                        <div class="widget widget-text">
                            <a href="#" class="download hvr-shutter-out-verticall" id="buttonMaseDl">Téléchargez le
                                certificat MASE</a>
                        </div>
                        <div class="spacer" data-desktop_height="8" data-mobile_height="8" data-smobile_height="8"></div>
                        <div class="widget widget-text">
                            <a href="#" class="download bg-green hvr-shutter-out-vertical" id="buttonMoreMase">En savoir +
                                sur la certification
                                MASE</a>
                        </div>
                        <div class="spacer" data-desktop_height="30" data-mobile_height="30" data-smobile_height="30"></div>
                    </div>
                    <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="0"></div>
                </div>
                @yield('body')
            </div>
        </div>
    </div>

    <section class="flat-row style2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap-row">
                        <span id="contactText">INSERER TEXTE ICI</span>
                        <a class="themesflat-btn hvr-shutter-out-verticallll" href="{{ route('contact') }}" id="buttonContact">Nous
                            contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

