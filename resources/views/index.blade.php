@extends('app')

@section('title')
    <title id="pageTitle">Accueil | Damrys</title>
@endsection

@section('content')
    <div class="flat-slider style1">
        <!-- SLIDER -->
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev-slider1" class="rev_slider fullwidthabanner">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="{{ asset('images/home/home1.jpg') }}" alt="image" data-bgposition="center center" data-no-retina>
                        <div class="overlay"></div>

                        <!-- Layers -->
                        <div class="tp-caption tp-resizeme text-ffb922 font-rubik font-weight-500 icon slider2"
                             data-x="['left','left','left','left']" data-hoffset="['-17','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-185','-118','-98','-78']"
                             data-fontsize="['88','20','20','16']"
                             data-lineheight="['88','48','28','14']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-paddingleft="['3','3','3','3']"
                             data-responsive_offset="on">
                        </div>

                        <div class="tp-caption tp-resizeme text-ffb922 font-rubik font-weight-500 all-you slider2"
                             data-x="['left','left','left','left']" data-hoffset="['-17','30','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-96','-96','-118','-148']"
                             data-fontsize="['18','18','18','18']"
                             data-lineheight="['100','48','28','28']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-paddingleft="['3','3','3','3']"
                             data-responsive_offset="on">
                        </div>

                        <div class="tp-caption tp-resizeme font-rubik font-weight-700 best creative slider2"
                             data-x="['left','left','left','left']" data-hoffset="['-17','30','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['26','26','0','-40']"
                             data-fontsize="['100','70','60','60']"
                             data-lineheight="['100','80','70','70']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">Damrys
                        </div>

                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['-17','30','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['190','190','150','110']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             data-paddingtop="['0','0','0','0']"
                             data-paddingbottom="['0','0','0','0']"><a href="{{ route('contact') }}" class="hvr-shutter-out-verticall">Voir plus</a>
                        </div>
                    </li><!-- /End Slide 1 -->

                    <!-- Slide 2 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="{{ asset('images/home/home2.jpg') }}" alt="image" data-bgposition="center center" data-no-retina>
                        <div class="overlay"></div>

                        <!-- Layers -->
                        <div class="tp-caption tp-resizeme text-ffb922 font-rubik font-weight-500 icon slider2"
                             data-x="['left','left','left','left']" data-hoffset="['-17','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-185','-118','-98','-78']"
                             data-fontsize="['88','20','20','16']"
                             data-lineheight="['88','48','28','14']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-paddingleft="['3','3','3','3']"
                             data-responsive_offset="on">
                        </div>

                        <div class="tp-caption tp-resizeme text-ffb922 font-rubik font-weight-500 all-you slider2"
                             data-x="['left','left','left','left']" data-hoffset="['-17','30','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-96','-96','-118','-148']"
                             data-fontsize="['18','18','18','18']"
                             data-lineheight="['100','48','28','14']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-paddingleft="['3','3','3','3']"
                             data-responsive_offset="on">
                        </div>

                        <div class="tp-caption tp-resizeme font-rubik font-weight-700 best creative slider2"
                             data-x="['left','left','left','left']" data-hoffset="['-17','30','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['26','26','0','-40']"
                             data-fontsize="['100','70','60','60']"
                             data-lineheight="['100','80','70','70']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">Damrys
                        </div>


                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['-17','30','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['190','190','150','110']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             data-paddingtop="['0','0','0','0']"
                             data-paddingbottom="['0','0','0','0']"><a href="{{ route('contact') }}" class="hvr-shutter-out-verticall">Voir plus</a>
                        </div>
                    </li><!-- /End Slide 2 -->
                </ul>
            </div>
        </div>
    </div> <!-- /.flat-slider -->

    <div class="main-home1">
        <!-- Welcomme -->
        <section class="flat-welcome clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="image-welcome">
                            <div class="image-wrap">
                                <img src="{{ asset('images/home/home2.png') }}" alt="image">
                            </div>
                            <div class="image-inner">
                                <img src="{{ asset('images/home/home3.png') }}" alt="image">
                            </div>
                            <div class="icon-welcome">
                                <i class="icon-factory-3"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="50"></div>
                        <div class="info-welcome">
                            <img src="{{ asset('images/home/home7.jpg') }}" alt="image">
                            <h4 id="secondTitle">
                                La fumisterie industrielle au service des principaux secteurs industriels
                            </h4>
                            <h1 id="mainTitle">Entreprise en génie thermique,spécialiste des travaux de fumisterie</h1>
                            <p class="text" id="mainText">DAMRYS est une entreprise spécialisée en génie thermique au
                                service des
                                principaux secteurs
                                industriels :

                                Raffinerie, Pétrochimie, Chimie,
                                Incinération : déchets ménagers, hospitaliers, industriels, carcasse animale
                                Crémation,
                                Cimenterie,
                                Fonderie,
                                Energie,
                                Nucléaire,
                                Cheminée ... dont Le cœur de
                                métier est le garnissage réfractaire.<br><br>

                                Au fil du temps, les demandes de nos clients nous ont permis de développer des activités
                                connexes
                                pour leur offrir des prestations clés en main allant au-delà de la maintenance
                                industrielle. <br><br>

                                Entreprise en Génie Thermique nous possédons la certification <a href="#secondTitle">MASE</a>;
                                gage de notre
                                implication dans le management de la qualité et de la sécurité.
                            </p>
                            <div class="info-inner">
                                <h3 class="mb-3" id="operationTitle">Nous intervenons pour les opérations de : </h3>
                                <ul class="infomation">
                                    <li id="operationItem1"><i class="fa fa-check"></i>Maintenance préventive et curative
                                    </li>
                                    <li id="operationItem2"><i class="fa fa-check"></i>Réparation et rénovation</li>
                                    <li id="operationItem3"><i class="fa fa-check"></i>Travaux neufs</li>
                                    <li id="operationItem4"><i class="fa fa-check"></i>Supervision</li>
                                    <li id="operationItem5"><i class="fa fa-check"></i>Expertise</li>
                                </ul>
                            </div>
                            <div class="info-button">
                                <a href="{{ route('savoirFaire') }}" class=" hvr-shutter-out-verticall" id="operationMore">En savoir
                                    plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nos services-->
        <section class="flat-our-services style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-section style1">
                            <h1 id="serviceTitle">NOS SERVICES</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/services/service1.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory-2"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('raffinerie') }}" id="serviceItem1">Raffinerie ...</a></h3>
                                <!--<p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/services/service2.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-tower"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('nucleaire') }}" id="serviceItem2">Nucléaire</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/services/service3.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('fonderie') }}" id="serviceItem3">Fonderie</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/cremation-370x281.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory-3"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('cremation') }}" id="serviceItem4">Crémation</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/chaudiere-370x281.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory-4"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('chaudiere') }}" id="serviceItem5">Chaudière</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/cimenterie-370x281.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory-3"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('cimenterie') }}" id="serviceItem6">Cimenterie</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/incineration-370x281.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory-2"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('incineration') }}" id="serviceItem7">Incinération</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/cheminee-370x281.jpg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('cheminee') }}" id="serviceItem8">Cheminée</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/export/export.jpeg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory-3"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('export') }}" id="serviceItem8">Export</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/demolition/real/file-21.jpeg') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-industry"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('demolition') }}" id="serviceItem8">Démolitions</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="post post-wrap">
                            <div class="featured-post">
                                <div class="post-img">
                                    <img src="{{ asset('images/combustion/combustion.png') }}" alt="image">
                                    <div class="overlay"></div>
                                </div>
                                <div class="icon-wrap">
                                    <i class="icon-factory-4"> </i>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><a href="{{ route('combustion') }}" id="serviceItem8">Combustion</a></h3>
                                <!--                                    <p>Ut confessisque appellant discrimen fateri regale textrini textam Tyrii et est autem inductus scriptae ministris.</p>
                                                                    <h4 class="box-line"><a href="#">En savoir plus</a><span class="line"></span></h4>-->
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!--<section class="flat-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="section-text">
                            <span id="placeHolder1">INSERER TEXTE ICI</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!--<section class="flat-sections clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="wrap-sections">
                            <div class="icon-sections">
                                <i class="icon-factory-4"></i>
                            </div>
                            <span id="placeHolder2">INSERER TEXTE ICI</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="section-image">
                            <div class="divider height300px"></div>
                            <div class="image-box">
                                <img src="{{ asset('images/home/home9.jpg') }}" alt="image">
                                <div class="meta-avatar">
                                    <p>02 40 67 18 53</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>-->

        <section class="flat-number-speak">
            <div class="spacer" data-desktop_height="115" data-mobile_height="100" data-smobile_height="100"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-section style1">
                            <div class="image-title">
                                <img src="{{ asset('images/home/home7.jpg') }}" alt="image">
                            </div>
                            <h4 id="numberTitle">Quelques chiffres</h4>
                            <h1 id="numberText">Chiffres clés</h1>
                        </div>
                        <div class="flat-counter count-time" data-day="20" data-month="3" data-year="2019" data-hour="12"
                             data-minute="12" data-second="12" style="float: right">
                            <div class="counter">
                                <ul>
                                    <li class="content-counter projects">
                                        <div class="wrap-bg numb">
                                            <div class="inner-bg seconds">
                                                <div class="numb-count numb" data-from="0" data-to="02" data-speed="2000"
                                                     data-inviewport="yes">2
                                                </div>
                                                <div class="name-count" id="numberClient">Agences en France</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="content-counter professional">
                                        <div class="wrap-bg numb">
                                            <div class="inner-bg seconds">
                                                <div class="numb-count numb" data-from="0" data-to="14" data-speed="2000"
                                                     data-inviewport="yes">14
                                                </div>
                                                <div class="name-count" id="numberPartner">Années d'existance</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="content-counter industries">
                                        <div class="wrap-bg numb">
                                            <div class="inner-bg seconds">
                                                <div class="numb-count numb" data-from="0" data-to="20" data-speed="2000"
                                                     data-inviewport="yes">20
                                                </div>
                                                <div class="name-count" id="numberYear">K€ de chiffre d'Affaire</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer" data-desktop_height="107" data-mobile_height="100" data-smobile_height="100"></div>
        </section>

        <!--<section class="flat-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-section style2">
                            <div class="image-title">
                                <img src="{{ asset('images/home/logo.png') }}" alt="image">
                            </div>
                            <h4 class="color-white" id="testimonialTitle">TÉMOIGNAGES</h4>
                            <h1 class="color-white" id="testimonialSubTtile">Notre clientèle</h1>
                        </div>
                        <div class="spacer" data-desktop_height="46" data-mobile_height="46" data-smobile_height="46"></div>
                        <div class="themesflat-testimonials-slider arrow-center bullet-square offset-hcenter offset-v0 dost-top-right has-bullets has-arrows">
                            <div class="wrap-testimonials-slider clearfix">
                                <div id="nav-testimonial" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <div class="testimonial-item image-circle">
                                                <div class="testimonial-img">
                                                    <img src="{{ asset('images/home/home1.png') }}" alt="image">
                                                </div>
                                                <h6 class="name color-white">Shirley Smith</h6>
                                                <span class="position" id="testimonialsRole1">DIRECTRICE</span>
                                                <div class="testimonial-content">
                                                    <div class="text color-white" id="testimonialsText1">“Aeternitate
                                                        terrena opinione alii etiam
                                                        praesidens quoddam despectare circulo efficacis substantialis
                                                        terrena modi circulo theologi innumerabilia tradunt veteres filiam
                                                        bonorumque numinis generali facinorum ius filiam modi quaedam etiam
                                                        despectare filiam.”
                                                    </div>
                                                    <span class="date color-orange">25 NOV, 2019</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="testimonial-item image-circle">
                                                <div class="testimonial-img">
                                                    <img src="{{ asset('images/home/home8.png') }}" alt="image">
                                                </div>
                                                <h6 class="name color-white">Mike Hardson</h6>
                                                <span class="position" id="testimonialsRole2">DIRECTEUR</span>
                                                <div class="testimonial-content">
                                                    <div class="text color-white" id="testimonialsText2">“Patriam ubi nati
                                                        enim lasciviam non sed
                                                        convenit coetuum incondita patriam errores ubi ratione lasciviam
                                                        esse ac Simonides ante sed lasciviam lyricus sed vieturo laeditur
                                                        ratione sed errores laeditur patriam.”
                                                    </div>
                                                    <span class="date color-orange">25 NOV, 2019</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="testimonial-item image-circle">
                                                <div class="testimonial-img">
                                                    <img src="{{ asset('images/home/home9.png') }}" alt="image">
                                                </div>
                                                <h6 class="name color-white">Sarah Albert</h6>
                                                <span class="position" id="testimonialsRole3">DIRECTRICE</span>
                                                <div class="testimonial-content">
                                                    <div class="text color-white" id="testimonialsText3">“Accepto in
                                                        concessisti suspicionibus ipso
                                                        tanta in tuo gloria M omnibus senatui te intellegis mihi Ex
                                                        Marcellum gloria beneficio paulo et suspicionibus vel in cepit Ille
                                                        omnis summo ante beneficio.”
                                                    </div>
                                                    <span class="date color-orange">25 NOV, 2019</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div id="slider-testimonial" class="flexslider" data-dots="true" data-nav="false">
                                    <ul class="slides"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <div class="spacer" data-desktop_height="50" data-mobile_height="0" data-smobile_height="0"></div>

        <!---<section class="flat-why-choose bg_f2f3f5 clearfix">
            <div class="text-why-choose">
                <div class="title-section style2">
                    <div class="image-title">
                        <img src="{{ asset('images/home/home7.jpg') }}" alt="image">
                    </div>
                    <h4 id="choseTitle">POURQUOI NOUS CHOISIR</h4>
                    <h1 id="choseSubTitle">INSERER TEXTE ICI</h1>
                </div>
                <div class="info-inner">
                    <ul class="infomation">
                        <li class="clearfix">
                            <span id="choseItem1">01</span>
                            <p id="choseItemSpan1">INSERER TEXTE ICI</p>
                        </li>
                        <li class="clearfix">
                            <span id="choseItem2">02</span>
                            <p id="choseItemSpan2">INSERER TEXTE ICI</p>
                        </li>
                        <li class="clearfix">
                            <span id="choseItem3">03</span>
                            <p id="choseItemSpan3">INSERER TEXTE ICI</p>
                        </li>
                    </ul>
                </div>
                <a class="themesflat-btn hvr-shutter-out-verticallll" href="{{ route('savoirFaire') }}" id="buttonSavoirFaire">En
                    savoir plus</a>
            </div>
            <div class="image-why-choose">
                <div class="image-heading">
                    <img src="{{ asset('images/accueil/abu-dhabi-1175x744.jpg') }}" alt="image">
                </div>
                <div class="image-box clearfix">
                    <div class="image-wrap">
                        <img src="{{ asset('images/home/home7.png') }}" alt="image">
                        <a class="fancybox" data-type="iframe"
                           href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1"><i class="fa fa-play"
                                                                                          aria-hidden="true"></i></a>
                    </div>
                    <div class="text-info">
                        <span id="textInfo">INSERER<br>TEXTE ICI</span>
                    </div>
                    <div class="info">
                        <p>DAMRYS</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="flat-row style2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrap-row">
                            <p id="wrapperTitle">INSERER TEXTE ICI</p>
                            <span id="wrapperText">INSERER TEXTE ICI</span>
                            <a class="themesflat-btn hvr-shutter-out-verticallll" href="{{ route('contact') }}" id="buttonContact">Nous
                                contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>-->
@endsection
