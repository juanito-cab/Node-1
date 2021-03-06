<?php
include_once 'common.php';
?>

<!DOCTYPE HTML>

<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $lang['META_DESCRIPTION']; ?>" />
<meta  charset="utf-8">
<meta http-equiv="Expires" content="30">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="instalaciones fuerteventura, domotica canarias, knx canarias, reforma fuerteventura, reformas fuerteventura, proyectos fuerteventura, ingeniero fuernteventura, construcciones fuerteventura,
 constructora fuerteventura, arquitecto fuerteventura, obras fuerteventura, proyectos las palmas"/>
<meta name="author" content="Juan Manuel Cabrera Rodriguez">
<meta name="contact" content="info@nodegestion.es" />
<meta name="language" content="ES">
<meta name="revisit-after" content="1">
<meta name="location">
<meta name="geo.region" content="ES-GC" />
<meta name="geo.placename" content="Puerto del Rosario" />
<meta name="geo.position" content="28.501276;-13.867047" />
<meta name="ICBM" content="28.501276, -13.867047" />
<meta name="geo.region" content="ES-GC" />
<meta name="geo.placename" content="Puerto del Rosario" />
<meta name="geo.position" content="28.501276;-13.867047" />
<meta name="ICBM" content="28.501276, -13.867047" />

<!-- Favicons -->

<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<title>Node</title>

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="animsition">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    <div class="menu">
      <span class="close-menu icon-cross2 right-boxed"></span>
      <div class="menu-lang right-boxed">
        <a href="index.php?lang=es">Esp</a>
        <a href="index.php?lang=en">Eng</a>
      </div>
      <ul class="menu-list right-boxed">
        <li>
          <a  href="about.php"><?php echo $lang['MENU_ABOUT']; ?></a>
        </li>
        <li>
          <a  href="arquitecto_fuerteventura.php"><?php echo $lang['MENU_STUDIO']; ?></a>
        </li>
        <li>
          <a  href="constructora_fuerteventura.php"><?php echo $lang['MENU_BULINDER']; ?></a>
        </li>
        <li>
          <a  href="domotica_fuerteventura.php"><?php echo $lang['MENU_DOMOTICA']; ?></a>
        </li>
        <li>
          <a  href="works.php"><?php echo $lang['MENU_WORKS']; ?></a>
        </li>
        <li>
          <a  href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a>
        </li>
      </ul>
      <div class="menu-footer right-boxed">
        <div class="social-list">
          <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
          <a href="https://www.linkedin.com/company/11175329/" class="icon ion-social-linkedin" target="_blank"></a>
        </div>
        <div class="copy"><?php echo $lang['MENU_FOOTER']; ?></div>
      </div>
    </div>

    <!-- Navbar -->

    <header class="navbar navbar-2 navbar-white boxed">
      <div class="navbar-bg"></div>
      <button type="button" class="navbar-toggle hidden-lg" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brand">
        <img id="logo-white" class="brand-img" alt="" src="images/brand.png">
        <img id="logo" class="brand-img-white" alt="" src="images/brand-white-2.png">
        <div class="brand-info">
          <!--<div class="brand-name">NODE GESTIÓN</div>-->
          <div class="brand-text"><?php echo $lang['MENU_BRAND_TEXT']; ?></div>
        </div>
      </a>
      <address class="navbar-address visible-lg"><?php echo $lang['ADDRESS_CONTACT']; ?><span class="text-dark">828 908 650</span></address>
      <div class="social-list hidden-xs hidden-sm hidden-md">
        <a  href="about.php"><?php echo $lang['MENU_ABOUT']; ?></a>
        <a  href="arquitecto_fuerteventura.php"><?php echo $lang['MENU_STUDIO']; ?></a>
        <a  href="constructora_fuerteventura.php"><?php echo $lang['MENU_BULINDER']; ?></a>
        <a  href="domotica_fuerteventura.php"><?php echo $lang['MENU_DOMOTICA']; ?></a>
        <a  href="works.php"><?php echo $lang['MENU_WORKS']; ?></a>
        <a  href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a>

      </div>
    </header>
    <div class="copy-bottom white boxed">© COGESA S.L. 2018.</div>
    <div class="lang-bottom white boxed">
      <div class="menu-lang">
        <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
        <a href="https://www.linkedin.com/company/11175329/" class="icon ion-social-linkedin" target="_blank"></a>
        <a href="index.php?lang=es">Esp</a>
        <a href="index.php?lang=en">Eng</a>
      </div>
    </div>
    <div class="pagepiling">
      <div class="pp-scrollable text-white section section-1">
        <div class="scroll-wrap">
          <div id="Carousel" class="section-bg carousel slide" data-ride="carousel" data-interval="3000">
              <div class="carousel-bg" role="listbox">
                <div class="item active">
                  <img src="images/bg/bg-1.png" alt="fachada de pierdras">
                </div>
              </div>
          </div>

<!--    MAIN    -->
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_1']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-8 col-lg-10">
                          <h1 class="display-1 text-white"><?php echo $lang['LEMA_1']; ?><span class="text-primary"><?php echo $lang['LEMA_2']; ?></span></h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--    SERVICES   -->
      <div class="pp-scrollable section section-1">
        <div class="scroll-wrap ">
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title text-dark hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_2']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-5 col-lg-5">
                          <h2 class="title-uppercase text-primary"><?php echo $lang['TITLE_SECTION_2_1']; ?></h2>
                          <ul class="service-list">
                            <li><a href="arquitecto_fuerteventura.php"><?php echo $lang['SERVICE_SECTION_2_1']; ?></a></li>
                            <li><a href="arquitecto_fuerteventura.php"><?php echo $lang['SERVICE_SECTION_2_2']; ?></a></li>
                            <li><a href="constructora_fuerteventura.php"><?php echo $lang['SERVICE_SECTION_2_3']; ?></a></li>
                            <li><a href="constructora_fuerteventura.php"><?php echo $lang['SERVICE_SECTION_2_4']; ?></a></li>
                            <li><a href="domotica_fuerteventura.php"><?php echo $lang['SERVICE_SECTION_2_5']; ?></a></li>
                            <li><a href="arquitecto_fuerteventura.php"><?php echo $lang['SERVICE_SECTION_2_6']; ?></a></li>
                            <li><a href="arquitecto_fuerteventura.php"><?php echo $lang['SERVICE_SECTION_2_7']; ?></a></li>
                          </ul>
                        </div>
                        <div class="col-md-4 col-lg-6 col-md-offset-1 col-lg-offset-1">
                          <h2 class="title-uppercase text-primary"><?php echo $lang['TITLE_SECTION_2_2']; ?></h2>
                          <ul class="service-list">
                            <li><a href="particulares.php"><?php echo $lang['SERVICE_CLIENTE_1']; ?></a></li>
                            <li><a href="empresa.php"><?php echo $lang['SERVICE_CLIENTE_2']; ?></a></li>
                            <li><a href="comunidades_fuerteventura.php"><?php echo $lang['SERVICE_CLIENTE_3']; ?></a></li>
                            <li><a href="profesionales.php"><?php echo $lang['SERVICE_CLIENTE_4']; ?></a></li>
                            <li><a href="administracion.php"><?php echo $lang['SERVICE_CLIENTE_5']; ?></a></li>
                            <li><a href="inmobiliaria_fuerteventura.php"><?php echo $lang['SERVICE_CLIENTE_6']; ?></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--    BUILDER   -->
      <div class="pp-scrollable section section-1">
        <div class="scroll-wrap ">
          <div class="section-bg" style="background-image:url(images/bg/placa_alveolar_original.jpg);"></div>
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title  text-white hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_7']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-10 col-lg-12">
                          <h2 class="title-uppercase text-white"><?php echo $lang['TITLE_SECTION_7_1']; ?></h2>
                              <h6 class="text-display text-white"><?php echo $lang['SERVICE_SECTION_7_1']; ?></h6>
                              <h6 class="text-display text-white"><?php echo $lang['SERVICE_SECTION_7_2']; ?></h6>
                              <h6 class="text-display text-white"><?php echo $lang['SERVICE_SECTION_7_3']; ?></h6>
                              <a class="text-white" href="constructora_fuerteventura.php"><?php echo $lang['TITLE_SECTION_3_MORE']; ?></a>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!--    INSTALATIONS    -->

<div class="pp-scrollable section section-1">
  <div class="scroll-wrap ">
    <div class="section-bg" style="background-image:url(images/bg/loxone.jpg);"></div>
    <div class="scrollable-content">
      <div class="vertical-centred">
        <div class="boxed boxed-inner">
          <div class="vertical-title  text-dark hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_3']; ?></span></div>
          <div class="boxed">
            <div class="container">
              <div class="intro">
                <div class="row">
                  <div class="col-md-10 col-lg-12 bg-text">
                    <h2 class="title-uppercase "><?php echo $lang['TITLE_SECTION_3_1']; ?></h2>
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row-services row">
                                  <div class="col-service col-sm-6 col-lg-4">
                                    <div class="text-center">
                                    <span class="text-dark text-center icon-medium ion-ios-lightbulb-outline"></span>
                                  </div>
                                    <h4 class="text-center"><?php echo $lang['INSTALATION_SERVICE_TITLE_1']; ?></h4>
                                    <p class="text-dark"><?php echo $lang['INSTALATION_SERVICE_DESCRIPTION_1']; ?></p>
                                  </div>
                                  <div class="col-service col-sm-6 col-lg-4">
                                    <div class="text-center">
                                    <span class="text-dark text-center icon-medium icon-home"></span>
                                  </div>
                                    <h4 class="text-center"><?php echo $lang['INSTALATION_SERVICE_TITLE_2']; ?></h4>
                                    <p class="text-dark"><?php echo $lang['INSTALATION_SERVICE_DESCRIPTION_2']; ?></p>
                                  </div>
                                  <div class="clearfix visible-sm visible-md"></div>
                                  <div class="col-service col-sm-6 col-lg-4">
                                    <div class="text-center">
                                    <span class="text-dark text-center icon-medium ion-ios-videocam-outline"></span>
                                  </div>
                                    <h4 class="text-center"><?php echo $lang['INSTALATION_SERVICE_TITLE_3']; ?></h4>
                                    <p class="text-dark"><?php echo $lang['INSTALATION_SERVICE_DESCRIPTION_3']; ?></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    <a class="text-dark" href="domotica_fuerteventura.php"><?php echo $lang['TITLE_SECTION_3_MORE']; ?></a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!--    TESTIMONIOS    -->
      <div class="pp-scrollable text-white section section-4">
        <div class="scroll-wrap">
          <div class="section-bg" style="background-image:url(images/bg/bg3.png);"></div>
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_5']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-6 col-lg-5">
                          <h2 class="title-uppercase-2"><?php echo $lang['LEMA_SECTION_5']; ?></h2>
                        </div>
                        <div class="col-md-5 col-lg-5  col-md-offset-1 col-lg-offset-2">
                          <div class="review-carousel owl-carousel">
                            <div class="review-carousel-item">
                              <div class="text">
                              <p><?php echo $lang['TESTIMONIO_1_TEXT_1']; ?></p>
                              <p><?php echo $lang['TESTIMONIO_1_TEXT_2']; ?></p>
                              </div>
                            <div class="review-author">
                                <div class="author-name"><?php echo $lang['TESTIMONIO_1_NAME']; ?></div>
                                <i><?php echo $lang['TESTIMONIO_1_DESCRIPTION_WORK']; ?><br><?php echo $lang['TESTIMONIO_1_FUENTE']; ?></i>
                              </div>
                            </div>
                          <!--<div class="review-carousel-item">
                              <div class="text">
                              <p><?php// echo $lang['TESTIMONIO_2_TEXT_1']; ?></p>
                              <p><?php //echo $lang['TESTIMONIO_2_TEXT_2']; ?></p>
                            </div>
                              <div class="review-author">
                                <div class="author-name"><?php //echo $lang['TESTIMONIO_2_NAME']; ?></div>
                                <i><?php //echo $lang['TESTIMONIO_2_DESCRIPTION_WORK']; ?><br><?php //echo $lang['TESTIMONIO_2_FUENTE']; ?></i>
                              </div>
                            </div>-->
                            <!--<div class="review-carousel-item">
                              <div class="text">
                                <p><?php //echo $lang['TESTIMONIO_3_TEXT_1']; ?></p>
                                <p><?php// echo $lang['TESTIMONIO_3_TEXT_2']; ?></p>                              </div>
                              <div class="review-author">
                                <div class="author-name"><?php //echo $lang['TESTIMONIO_3_NAME']; ?></div>
                                <i><?php //echo $lang['TESTIMONIO_3_DESCRIPTION_WORK']; ?><br><?php //echo $lang['TESTIMONIO_3_FUENTE']; ?></i>
                              </div>
                            </div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--    LAST PROJECTS    -->
      <div class="pp-scrollable section section-1">
        <div class="scroll-wrap">
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title text-dark hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_4']; ?></span></div>
                <div class="boxed">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-14">
                          <h2 class="title-uppercase"><?php echo $lang['TITLE_SECTION_4_1']; ?></h2>
                          <div class="sly">
                            <ul class="slidee">
                              <li>
                                <div class="project-item item-shadow">
                                  <img alt="" class="img-responsive" src="images/last_projects/gran_tarajal/centro_mayores/brazo_fachada_680x680.jpg">
                                  <div class="project-hover">
                                    <div class="project-hover-content">
                                      <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_1']; ?></h3>
                                      <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_2']; ?></p>
                                    </div>
                                  </div>
                                  <a href="proyectos/centro_mayores_Gran_Tarajal/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?> <i class="icon ion-ios-arrow-right"></i></a>
                                </div>
                              </li>
                              <li>
                                <div class="project-item item-shadow">
                                  <img alt="" class="img-responsive" src="images/last_projects/antigua/campo_de_golf/nave_industrial_desaladora/desaladora_680x680-min.jpg">
                                  <div class="project-hover">
                                    <div class="project-hover-content">
                                      <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_2']; ?></h3>
                                      <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_2']; ?></p>
                                    </div>
                                  </div>
                                  <a href="proyectos/desaladora_campo_golf/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
                                </div>
                              </li>
                              <li>
                                <div class="project-item item-shadow">
                                  <img alt="" class="img-responsive" src="images/last_projects/puerto_del_rosario/centro_de_mayores/andamio_680x680.jpg">
                                  <div class="project-hover">
                                    <div class="project-hover-content">
                                      <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_3']; ?></h3>
                                      <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_3']; ?></p>
                                    </div>
                                  </div>
                                  <a href="proyectos/centro_mayores_puerto_del_rosario/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
                                </div>
                              </li>
                              <li>
                                <div class="project-item item-shadow">
                                  <img alt="" class="img-responsive" src="images/last_projects/antigua/fosa_septica/deposito_680x680.jpg">
                                  <div class="project-hover">
                                    <div class="project-hover-content">
                                      <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_4']; ?></h3>
                                      <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_4']; ?></p>
                                    </div>
                                  </div>
                                  <a href="proyectos/fosa-septica/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
                                </div>
                              </li>
                            </ul>
                            <span class="prev icon-chevron-left"></span>
                            <span class="next icon-chevron-right"></span>
                            <div class="dots-image-2">
                              <div class="dots"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--    CONTACT    -->
      <div class="pp-scrollable section section-1">
        <div class="scroll-wrap">
          <div class="section-bg" style="background-image:url(images/bg/wood.jpg);"></div>
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title text-dark hidden-xs hidden-sm contact-span text-white"><span><?php echo $lang['VERTICAL_MENU_6']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro overflow-hidden">
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="title-uppercase text-white"><?php echo $lang['WE_ARE']; ?></h2>
                          <div id="map" class="map-2"></div>
                          <div class="contact-info">
                            <div class="row-contact-info row">
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <div class="col-right col-sm-8 col-md-9 col-sm-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      <strong class="text-dark"><?php echo $lang['ADMINISTRATION_NAME']; ?></strong><br>
                                      <span class="text-dark">info@nodegestion.es</span>
                                    </div>
                                    <div class="contact-info-row col-sm-6 col-md-12 ">
                                      <strong class="text-dark"><?php echo $lang['OBRAS_NAME']; ?></strong><br>
                                      <span class="text-dark">obras@nodegestion.es</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <div class="col-right col-sm-8 col-md-7 col-lg-10 col-sm-offset-1 col-md-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      <strong class="text-dark"><?php echo $lang['OFFICE']; ?></strong><br>
                                      <span class="text-dark">828 908 650</span>
                                    </div>
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      <strong class="text-dark"><?php echo $lang['ADDRESS_FOOTER']; ?></strong><br>
                                      <span class="text-dark">C./Isla la Graciosa, nº2, local izq.</span>
                                      <span class="text-dark">Puerto del Rosario</span>
                                      <span class="text-dark">Fuerteventura</span>
                                      <span class="text-dark">Las Palmas</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                    <ul class="contact-info-row">
                                        <li><a href="terms.php"><?php echo $lang['FOOTER_TERMS_AND_CONDITIONS']; ?></a></li>
                                        <li><a href="privacy_policy.php"><?php echo $lang['FOOTER_PRIVACITY_POLICY']; ?></a></li>
                                        <li>
                                          <a  href="about.php"><?php echo $lang['MENU_ABOUT']; ?></a>
                                        </li>
                                        <li>
                                          <a  href="arquitecto_fuerteventura.php"><?php echo $lang['MENU_STUDIO']; ?></a>
                                        </li>
                                        <li>
                                          <a  href="constructora_fuerteventura.php"><?php echo $lang['MENU_BULINDER']; ?></a>
                                        </li>
                                        <li>
                                          <a  href="domotica_fuerteventura.php"><?php echo $lang['MENU_DOMOTICA']; ?></a>
                                        </li>
                                        <li>
                                          <a  href="works.php"><?php echo $lang['MENU_WORKS']; ?></a>
                                        </li>
                                        <li>
                                          <a  href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a>
                                        </li>
                                      </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.min.js"></script>
<script src="js/scrolloverflow.min.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.pagepiling.min.js"></script>
<script src="js/sly.min.js"></script>

<!-- Google Analytics -->
<script>(function(b,l,e,g,h,f){1!==parseInt(e.msDoNotTrack||b.doNotTrack||e.doNotTrack,10)&&b.addEventListener("load",function(){var r=(new Date).getTime();b.galite=b.galite||{};var m=new XMLHttpRequest,n="https://www.google-analytics.com/collect?cid="+(l.uid=l.uid||Math.random()+"."+Math.random())+"&v=1&tid="+galite.UA+"&dl="+f(h.location.href)+"&ul=en-us&de=UTF-8",a=function(b){var d="",c;for(c in b){if(void 0===b[c])return!1;d+=f(b[c])}return d},p={dt:[h.title],sd:[g.colorDepth,"-bit"],sr:[g.availHeight,"x",g.availWidth],vp:[innerWidth,"x",innerHeight],dr:[h.referrer]},k;for(k in p){var q=k+"="+a(p[k]);q&&(n+="&"+q)}a=function(b,d){var c="",a;for(a in d)c="&"+a+"="+f(d[a]);return function(){var a=n+c+(galite.anonymizeIp?"&aip=1":"")+"&t="+f(b)+"&z="+(new Date).getTime();if(e.sendBeacon)e.sendBeacon(a);else try{m.open("GET",a,!1),m.send()}catch(t){(new Image).src=a}}};setTimeout(a("pageview",null),100);b.addEventListener("unload",a("timing",{utc:"JS Dependencies",utv:"unload",utt:(new Date).getTime()- r}))})})(window,localStorage,navigator,screen,document,encodeURIComponent);</script>
<!-- End Google Analytics -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCEprRgdAfS753As69Wak04p2fvCzKbXQU"></script>
<script src="js/gmap.min.js"></script>

<!-- Scripts -->
<script src="js/scripts.min.js"></script>

<!--Schema.org-->
<script type="application/ld+json"> {
"@context" : "http://schema.org",
"@type" : "GeneralContractor",
"address" : {
"@type": "PostalAddress",
"addressLocality": "Puerto del Rosario",
"addressRegion": "Las Palmas",
"postalCode": "35600",
"streetAddress": "C/ Isla de la Graciosa, 2" },
"name":"Node Gestión",
"url":"https://www.nodegestion.es",
"email":"info@nodegestion.es",
"telephone":"828908650",
"image": "https://nodegestion.es/images/brand.png",
"openingHours": [
"Mo-Sa 8:00-18:00"],
"aggregateRating":{
"@type":"AggregateRating",
"ratingValue":"5",
"reviewCount":"4"},
"priceRange":"1"
}

</script>

</body>
</html>
