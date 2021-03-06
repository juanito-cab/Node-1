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
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<title>Contacto</title>

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
        <a href="contact.php?lang=es">Esp</a>
        <a href="contact.php?lang=en">Eng</a>
      </div>
      <ul class="menu-list right-boxed">
        <li class="active">
          <a  href="index.php"><?php echo $lang['MENU_INDEX']; ?></a>
        </li>
        <li>
          <a  href="works.php"><?php echo $lang['MENU_WORKS']; ?></a>
        </li>
        <li>
          <a  href="proyectos.php"><?php echo $lang['MENU_STUDIO']; ?></a>
        </li>
        <li>
          <a  href="construction.php"><?php echo $lang['MENU_BULINDER']; ?></a>
        </li>
        <li>
          <a  href="domotica.php"><?php echo $lang['MENU_DOMOTICA']; ?></a>
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

    <header class="navbar navbar-2  boxed">
      <div class="navbar-bg"></div>
      <button type="button" class="navbar-toggle hidden-lg" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brand" href="./index.php">
        <img id="logo-white" class="brand-img" alt="" src="images/brand.png">
        <img id="logo" class="brand-img-white" alt="" src="images/brand.png">
        <div class="brand-info">
          <!--<div class="brand-name">NODE GESTIÓN</div>-->
          <div class="brand-text"><?php echo $lang['MENU_BRAND_TEXT']; ?></div>
        </div>
      </a>
      <address class="navbar-address visible-lg"><?php echo $lang['ADDRESS_CONTACT']; ?><span class="text-dark">828 908 650</span></address>
      <div class="social-list hidden-xs hidden-sm hidden-md">
        <a  href="index.php"><?php echo $lang['MENU_INDEX']; ?></a>
        <a  href="about.php"><?php echo $lang['MENU_ABOUT']; ?></a>
        <a  href="arquitecto_fuerteventura.php"><?php echo $lang['MENU_STUDIO']; ?></a>
        <a  href="constructora_fuerteventura.php"><?php echo $lang['MENU_BULINDER']; ?></a>
        <a  href="domotica_fuerteventura.php"><?php echo $lang['MENU_DOMOTICA']; ?></a>
        <a  href="works.php"><?php echo $lang['MENU_WORKS']; ?></a>

      </div>
    </header>
    <!-- Pageheader -->

    <main class="page-header-3">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="title-hr"></div>
          </div>
          <div class="col-md-8 col-lg-6"><h1><?php echo $lang['CONTACT_TITLE']; ?></h1></div>
        </div>
      </div>
    </main>

    <div class="content">
      <div id="map" class="map"></div>
      <div class="page-inner">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title"><?php echo $lang['CONTACT_SUBTITLE']; ?></div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="row-contact row">
                  <div class="col-contact col-lg-6">
                    <h3 class="contact-title contact-top">Puerto del Rosario, <span><?php echo $lang['CONTACT_COUNTRY']; ?></span></h3>
                    <p class="contact-address text-muted"><strong>C./ Isla la Graciosa, nº2, local izq. 35600.</strong></p>
                    <p class="contact-row text-dark"><strong class="text-dark"><?php echo $lang['OFFICE']; ?>:</strong> info@nodegestion.es</p>
                    <p class="contact-row text-dark"><strong class="text-dark"><?php echo $lang['OBRAS_NAME']; ?>:</strong> obras@nodegestion.es</p>
                  </div>
                  <div class="col-contact col-lg-6">
                    <p class="contact-top"><strong class="text-muted"><?php echo $lang['CONTACT_CALL']; ?></strong></p>
                    <p class="phone-lg text-dark">+34  828 908 650</p>
                    <p class="text-muted"><strong class="text-dark"><?php echo $lang['CONTACT_HOURS']; ?></strong><br>
                     <?php echo $lang['CONTACT_HOURS']; ?><br><?php echo $lang['CONTACT_DAYS']; ?>  8:00h - 18:00h </p>
                    <div class="text-muted"><strong class="text-dark"><?php echo $lang['CONTACT_FOLLOW']; ?></strong><br>
                      <div class="contact-social social-list">
                        <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
                        <a href="https://www.linkedin.com/company/11175329/" class="icon ion-social-linkedin" target="_blank"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-message section">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title"><?php echo $lang['CONTACT_HELP']; ?></div>
                </div>
              </div>
              <div class="col-md-9">
                <form class="js-form">
                  <div class="row">
                    <div class="form-group col-sm-6 col-lg-4">
                      <input class="input-gray" type="text" name="name" required placeholder=<?php echo $lang['CONTACT_EMAIL_NAME']; ?>>
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                      <input class="input-gray" type="email" name="email" required placeholder=<?php echo $lang['CONTACT_EMAIL_EMAIL']; ?>>
                    </div>
                    <div class="form-group col-sm-12 col-lg-4">
                      <input class="input-gray" type="text" name="subject" placeholder=<?php echo $lang['CONTACT_EMAIL_SUBJECT']; ?>>
                    </div>
                    <div class="form-group col-sm-12">
                      <textarea class="input-gray" name="message"  required  placeholder=<?php echo $lang['CONTACT_EMAIL_MESSAGE']; ?>></textarea>
                    </div>
                    <div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn"><?php echo $lang['CONTACT_EMAIL_SEND']; ?></button></div>
                  </div>
                  <div class="success-message"><i class="fa fa-check text-primary"></i> <?php echo $lang['CONTACT_EMAIL_OK']; ?></div>
                  <div class="error-message"><?php echo $lang['CONTACT_EMAIL_FAIL']; ?></div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- Footer -->

    <footer id="footer" class="footer section">
      <div class="footer-flex">
        <div class="flex-item">
          <a class="brand pull-left" href="index.php">
            <img alt="" src="images/brand.png">
          </a>
        </div>
        <div class="flex-item">
          <div class="inline-block"><?php echo $lang['MENU_FOOTER']; ?></div>
        </div>
        <div class="flex-item">
          <ul>
            <li>
            <a  href="about.php"><?php echo $lang['MENU_ABOUT']; ?></a>
          </li>
            <li>
              <a  href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a>
            </li>
            <li><a href="terms.php"><?php echo $lang['FOOTER_TERMS_AND_CONDITIONS']; ?></a></li>
            <li><a href="privacy_policy.php"><?php echo $lang['FOOTER_PRIVACITY_POLICY']; ?></a></li>
          </ul>
        </div>
        <div class="flex-item">
          <ul>
            <li><a href="contact.php?lang=es">Esp</a></li>
            <li><a href="contact.php?lang=en">Eng</a></li>
          </ul>
        </div>
        <div class="flex-item">
          <div class="social-list">
            <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
            <a href="https://www.linkedin.com/company/11175329/" class="icon ion-social-linkedin" target="_blank"></a>
          </div>
        </div>
      </div>
    </footer>
      </div>
    </div>

<!-- jQuery -->

<script src="js/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/scrolloverflow.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/sly.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCEprRgdAfS753As69Wak04p2fvCzKbXQU"></script>
<script src="js/gmap.js"></script>

<!-- Slider revolution -->
<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<!-- Slider revolution 5x Extensions   -->
<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>


<!-- Scripts -->
<script src="js/scripts.js"></script>
<script src="js/rev-slider-init.js"></script>
</body>
</html>
