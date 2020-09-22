@extends('app')

@section('title')
    <title id="pageTitle">Entreprise | Damrys</title>
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
                        <img src="{{ asset('images/home/home1.jpg') }}" alt="image" data-bgposition="center center"
                             data-no-retina>
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
                            <ul>
                                <li><img src="{{ asset('images/home/icon-slider-1.png') }}" alt="icon"></li>
                                <li><img src="{{ asset('images/home/icon-slider-2.png') }}" alt="icon"></li>
                            </ul>
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
                             data-responsive_offset="on">Inserer texte ici
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
                             data-paddingbottom="['0','0','0','0']"><a href="{{ route('contact') }}"
                                                                       class="hvr-shutter-out-verticall">Voir plus</a>
                        </div>
                    </li><!-- /End Slide 1 -->

                    <!-- Slide 2 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="{{ asset('images/home/home2.jpg') }}" alt="image" data-bgposition="center center"
                             data-no-retina>
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
                            <ul>
                                <li><img src="{{ asset('images/home/icon-slider-1.png') }}" alt="icon"></li>
                                <li><img src="{{ asset('images/home/icon-slider-2.png') }}" alt="icon"></li>
                            </ul>
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
                             data-responsive_offset="on">Inserer texte ici
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
                             data-paddingbottom="['0','0','0','0']"><a href="{{ route('contact') }}"
                                                                       class="hvr-shutter-out-verticall">Voir plus</a>
                        </div>
                    </li><!-- /End Slide 2 -->
                </ul>
            </div>
        </div>
    </div> <!-- /.flat-slider -->

    <div class="main-home1">
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
                        <div class="spacer" data-desktop_height="0" data-mobile_height="50"
                             data-smobile_height="50"></div>
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
                                    <li id="operationItem1"><i class="fa fa-check"></i>Maintenance préventive et
                                        curative
                                    </li>
                                    <li id="operationItem2"><i class="fa fa-check"></i>Réparation et <rénovation></rénovation></li>
                                    <li id="operationItem3"><i class="fa fa-check"></i>Travaux neufs</li>
                                    <li id="operationItem4"><i class="fa fa-check"></i>Supervision</li>
                                    <li id="operationItem5"><i class="fa fa-check"></i>Expertise</li>
                                </ul>
                            </div>
                            <div class="info-button">
                                <a href="{{ route('savoirFaire') }}" class=" hvr-shutter-out-verticall"
                                   id="operationMore">En savoir
                                    plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flat-our-services style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-section style1">
                            <h4 id="serviceSecondTitle">Une experience de plus de 30 ans</h4>
                            <h1 id="serviceMainTitle">Nos compétences</h1>
                        </div>
                    </div>

                    <!-- Ingénieurs -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"
                             style="height: 50px;"></div>
                        <div class="imagebox-item">
                            <div class="imagebox style1">
                                <div class="imagebox-image">
                                    <img src="{{ asset('images/blog/blog19.jpg') }}" alt="image">
                                </div><!-- /.imagebox-image -->

                                <div class="imagebox-title">
                                    <h2><a href="#" title="" id="serviceTitle1">Des Ingénieurs</a></h2>
                                </div><!-- /.iamgebox-title -->
                                <div class="imagebox-content">
                                    <div class="imagebox-heading">
                                        <h3 id="serviceContentTitle1"><a href="">INSERER TITRE ICI !</a></h3>
                                    </div>
                                    <div class="imagebox-desc">
                                        <p id="serviceContentText1">INSERER TEXTE ICI</p>
                                    </div>
                                    <div class="imagebox-button">
                                        <h2 class="box-line" id="readMore"><a href="#">READ MORE</a><span
                                                class="line"></span></h2>
                                    </div>
                                </div><!-- /.imagebox-content -->
                            </div><!-- /.imagebox -->
                        </div>
                    </div>

                    <!-- Techniciens de chantier -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"
                             style="height: 50px;"></div>
                        <div class="imagebox-item">
                            <div class="imagebox style1">
                                <div class="imagebox-image">
                                    <img src="{{ asset('images/blog/blog18.jpg') }}" alt="image">
                                </div><!-- /.imagebox-image -->
                                <div class="imagebox-title">
                                    <h2><a href="#" title="" id="serviceTitle2">Des techniciens de chantiers</a></h2>
                                </div><!-- /.iamgebox-title -->
                                <div class="imagebox-content">
                                    <div class="imagebox-heading">
                                        <h3 id="serviceContentTitle2"><a href="">INSERER TITRE ICI !</a></h3>
                                    </div>
                                    <div class="imagebox-desc">
                                        <p id="serviceContentText2">INSERER TEXTE ICI</p>
                                    </div>
                                    <div class="imagebox-button">
                                        <h2 class="box-line" id="readMore"><a href="#">READ MORE</a><span
                                                class="line"></span></h2>
                                    </div>
                                </div><!-- /.imagebox-content -->
                            </div><!-- /.imagebox -->
                        </div>
                    </div>
                    <!-- Techniciens de sécrurité -->

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"
                             style="height: 50px;"></div>
                        <div class="imagebox-item">
                            <div class="imagebox style1">
                                <div class="imagebox-image">
                                    <img src="{{ asset('images/blog/blog17.jpg') }}" alt="image">
                                </div><!-- /.imagebox-image -->

                                <div class="imagebox-title">
                                    <h2><a href="#" title="" id="serviceTitle3">Des techniciens de sécurité</a></h2>
                                </div><!-- /.iamgebox-title -->
                                <div class="imagebox-content">
                                    <div class="imagebox-heading">
                                        <h3 id="serviceContentTitle3"><a href="">INSERER TITRE ICI !</a></h3>
                                    </div>
                                    <div class="imagebox-desc">
                                        <p id="serviceContentText3">INSERER TEXTE ICI</p>
                                    </div>
                                    <div class="imagebox-button">
                                        <h2 class="box-line" id="readMore"><a href="#">READ MORE</a><span
                                                class="line"></span></h2>
                                    </div>
                                </div><!-- /.imagebox-content -->
                            </div><!-- /.imagebox -->
                        </div>
                    </div>
                    <!-- Chef de chantier -->

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"
                             style="height: 50px;"></div>
                        <div class="imagebox-item">
                            <div class="imagebox style1">
                                <div class="imagebox-image">
                                    <img src="{{ asset('images/blog/blog16.jpg') }}" alt="image">
                                </div><!-- /.imagebox-image -->

                                <div class="imagebox-title">
                                    <h2><a href="#" title="" id="serviceTitle4">Des chefs de chantier</a></h2>
                                </div><!-- /.iamgebox-title -->
                                <div class="imagebox-content">
                                    <div class="imagebox-heading">
                                        <h3 id="serviceContentTitle4"><a href="">INSERER TITRE ICI !</a></h3>
                                    </div>
                                    <div class="imagebox-desc">
                                        <p id="serviceContentText4">INSERER TEXTE ICI</p>
                                    </div>
                                    <div class="imagebox-button">
                                        <h2 class="box-line" id="readMore"><a href="#">READ MORE</a><span
                                                class="line"></span></h2>
                                    </div>
                                </div><!-- /.imagebox-content -->
                            </div><!-- /.imagebox -->
                        </div>
                    </div>
                    <!-- Ouvriers qualifés -->

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"
                             style="height: 50px;"></div>
                        <div class="imagebox-item">
                            <div class="imagebox style1">
                                <div class="imagebox-image">
                                    <img src="{{ asset('images/blog/blog15.jpg') }}" alt="image">
                                </div><!-- /.imagebox-image -->

                                <div class="imagebox-title">
                                    <h2><a href="#" title="" id="serviceTitle5">Des ouvriers qualifés</a></h2>
                                </div><!-- /.iamgebox-title -->
                                <div class="imagebox-content">
                                    <div class="imagebox-heading">
                                        <h3 id="serviceContentTitle5"><a href="">INSERER TITRE ICI !</a></h3>
                                    </div>
                                    <div class="imagebox-desc">
                                        <p id="serviceContentText5">INSERER TEXTE ICI</p>
                                    </div>
                                    <div class="imagebox-button">
                                        <h2 class="box-line" id="readMore"><a href="#">READ MORE</a><span
                                                class="line"></span></h2>
                                    </div>
                                </div><!-- /.imagebox-content -->
                            </div><!-- /.imagebox -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flat-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="section-text">
                            <span id="placeHolder1">Une entreprise mobile</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flat-sections clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="wrap-sections">
                            <div class="icon-sections">
                                <i class="icon-car"></i>
                            </div>
                            <span id="placeHolder2">Possibilté d'intervention partout en france et à l'etranger</span>
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

            <div class="spacer" data-desktop_height="50" data-mobile_height="0" data-smobile_height="0"></div>
            <section class="flat-why-choose bg_f2f3f5 clearfix">
                <div class="text-why-choose">
                    <div class="title-section style2">
                        <div class="image-title">
                            <img src="{{ asset('images/home/home7.jpg') }}" alt="image">
                        </div>
                        <h1 id="whyChooseTitle">POURQUOI NOUS CHOISIR</h1>
                    </div>
                    <div class="info-inner">
                        <ul>
                            <li id="whyChooseItem1"><i class="fa fa-check-circle"></i> La réactivité</li>
                            <li id="whyChooseItem2"><i class="fa fa-check-circle"></i> Le matériel</li>
                            <li id="whyChooseItem3"><i class="fa fa-check-circle"></i> La logistique</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <a class="themesflat-btn hvr-shutter-out-verticallll" href="{{ route('savoirFaire') }}"
                       id="readMore">En savoir plus</a>
                </div>
                <div class="image-why-choose">
                    <div class="image-heading">
                        <img src="{{ asset('images/accueil/abu-dhabi-1175x744.jpg') }}" alt="image">
                    </div>
                    <div class="image-box clearfix">
                        <div class="text-info">
                            <span id="whyChooseText">Cet encadrement vous permettra d’être conseillé au plus près de vos attentes tant d’un point de vue technique qu’organisationnel</span>
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
                                <p id="contactSubTitle">INSERER TEXTE ICI</p>
                                <span id="contactTitle">INSERER TEXTE ICI</span>
                                <a class="themesflat-btn hvr-shutter-out-verticallll" href="{{ route('contact') }}"
                                   id="buttonContact">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
