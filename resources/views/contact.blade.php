@extends('app')

@section('title')
    <title id="pageTitle">Contact | Damrys</title>
@endsection

@section('content')
    <div class="page-title parallax parallax1 style1">
        <div class="overlay overlay1"></div>
        <div class="container wrap-page-title">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.php" id="title">ACCUEIL</a></li>
                    <li><a href="#" id="title2">CONTACT</a></li>
                </ul>
            </div>
            <div class="page-title-heading">
                <h1 id="title3">CONTACT</h1>
            </div>
        </div>
    </div>
    <div class="main-contact">
        <section class="flat-contact bg-one-third" style="margin-bottom: 35px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="spacer" data-desktop_height="81" data-mobile_height="100"
                             data-smobile_height="100"></div>
                        <div class="title-section style2">
                            <div class="image-title">
                                <img src="{{ asset('images/logo-damrys.png') }}" alt="image">
                            </div>
                            <h1 id="contactTitle">Contactez nous</h1>
                        </div>
                        <div class="spacer" data-desktop_height="47" data-mobile_height="40" data-smobile_height="40"></div>
                        <div class="form-submit">
                            <form class="comment-form" id="contact_form">
                                <p class="comment-form-author">
                                    <!-- <label>Name *</label> -->
                                    <input id="contact_name" name="author" type="text" placeholder="Votre nom"
                                           required="required">
                                </p>
                                <p class="comment-form-email">
                                    <!-- <label>Email *</label> -->
                                    <input id="contact_mail" name="email" type="email" placeholder="Votre adresse mail"
                                           required="required">
                                </p>
                                <p class="comment-form-author">
                                    <!-- <label>Name *</label> -->
                                    <input id="contact_phone" name="phone" type="text"
                                           placeholder="Votre numéro de téléphone" required="required">
                                </p>
                                <p class="comment-form-email">
                                    <!-- <label>Email *</label> -->
                                    <input id="contact_type" name="title" type="text" placeholder="Objet du message"
                                           required="required">
                                </p>
                                <div class="clearfix"></div>
                                <p class="comment-form-comment">
                                    <!-- <label>Comment</label>  -->
                                    <textarea id="contact_message" name="content" placeholder="Votre message"  required="required"></textarea>
                                </p>
                                <p class="submit-form">
                                    <button name="submit" class="submit hvr-shutter-out-verticall" id="buttonContactSend">
                                        Envoyer
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="sidebar-info">
                            <div class="content-box" data-desktop_padding="117px 0px 111px 71px"
                                 data-mobile_padding="70px 0px 70px 0px" data-smobile_padding="70px 0px 70px 0px">
                                <div class="widget_text widget widget_custom_html">
                                    <div class="textwidget custom-html-widget">
                                        <div class="flat-widget_text">
                                            <ul>
                                                <div class="info-content">
                                                    <h5 class="title" id="contactAdress" style="font-size: 20px"><i class="icon-destination"></i> Adresses</h5>
                                                    <ul>
                                                        <li>
                                                            <p id="contactAdressContent">
                                                                Siège social : <br>
                                                                1 Rue René Panhard <br>
                                                                44360 Vigneux-de-Bretagne</p>
                                                        </li>
                                                        <li>
                                                            <p id="contactAdressContent2">
                                                                Agence : <br>
                                                                7 rue Léon Blum <br>
                                                                76530 Grand-Couronne</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <li><i class="icon-message"></i>
                                                    <div class="info-content">
                                                        <h5 class="title" id="contactMail">Email</h5>
                                                        <p>damrys@damrys.fr</p>
                                                    </div>
                                                </li>
                                                <div class="info-content">
                                                    <h5 class="title" id="contactAdress" style="font-size: 20px"><i class="icon-phone-call-2"></i> Téléphone</h5>
                                                    <ul>
                                                        <li>
                                                            <p id="contactPhoneContent">Vigneux : 02 40 67 18 53</p>
                                                        </li>
                                                        <li>
                                                            <p id="contactPhoneContent">Grand couronne : 02 35 68 33 33</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget widget_themesflat_socials">
                                    <ul class="themesflat-shortcode-socials">
                                        <li class="facebook">
                                            <a href="https://www.linkedin.com/company/damrys/?originalSubdomain=fr" target="_blank" rel="Linkedin" title="facebook">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://www.dadammloc.fr/" target="_blank" rel="alternate" title="Damloc">
                                                Damloc
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://www.damkaloc.fr/" target="_blank" rel="alternate" title="Damkaloc">
                                                Damkaloc
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /.social -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="map">
        </section>
    </div>
    <script src="{{ asset('javascript/mail.js') }}"></script>
@endsection
