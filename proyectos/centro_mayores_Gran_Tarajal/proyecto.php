<?php
include_once '../../common.php';
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
<link rel="shortcut icon" href="../../favicon.png">
<link rel="apple-touch-icon" href="../../apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../apple-touch-icon-114x114.png">

<title>Node</title>

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">
<link href="../../css/style.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="animsition">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    <div class="menu">
      <span class="close-menu icon-cross2 right-boxed"></span>
      <div class="menu-lang right-boxed">
        <a href="proyecto.php?lang=es">Esp</a>
        <a href="proyecto.php?lang=en">Eng</a>
      </div>
      <ul class="menu-list right-boxed">
        <li class="active">
          <a  href="../../index.php"><?php echo $lang['MENU_INDEX']; ?></a>
        </li>
        <li>
          <a  href="../../works.php"><?php echo $lang['MENU_WORKS']; ?></a>
        </li>
      </ul>
      <div class="menu-footer right-boxed">
        <div class="social-list">
          <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
        </div>
        <div class="copy"><?php echo $lang['MENU_FOOTER']; ?></div>
      </div>
    </div>

    <!-- Navbar -->

    <header class="navbar navbar-2  boxed">
      <div class="navbar-bg"></div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brand" href="../../index.php">
        <img id="logo-white" class="brand-img" alt="" src="../../images/brand.png">
        <img id="logo" class="brand-img-white" alt="" src="../../images/brand.png">
        <div class="brand-info">
          <!--<div class="brand-name">NODE GESTIÓN</div>-->
          <div class="brand-text"><?php echo $lang['MENU_BRAND_TEXT']; ?></div>
        </div>
      </a>
      <address class="navbar-address visible-lg"><?php echo $lang['ADDRESS_CONTACT']; ?><span class="text-dark"><?php echo $lang['ADDRESS_CONTACT_PHONE']; ?></span></address>
      <div class="social-list hidden-xs">
        <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target=""></a>
      </div>
    </header>

    <main class="page-header-3">
      <div class="container">
        <div class="row">
          <div class="col-right col-md-8 col-lg-12"><h2><?php echo $lang['PROJECT_ALBUM_1_MAIN_TITLE']; ?></h2></div>
        </div>
      </div>
    </main>

    <div class="content">
      <div class="container">
        <div class="card js-isotope">
          <div class="card-row">
          <div class="js-isotope-item">
            <div class="card-row-img card-block col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url(../../images/last_projects/gran_tarajal/centro_mayores/saneamiento_fachada.JPG)"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="../../images/last_projects/gran_tarajal/centro_mayores/saneamiento_fachada.JPG">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted text-dark"><p class="text-dark"><?php echo $lang['PROJECT_ALBUM_1_DATE_1']; ?></p></div>
              <h4 class="card-title"><?php echo $lang['PROJECT__ALBUM_1_TITLE_1']; ?></h4>
              <div class="card-text"><?php echo $lang['PROJECT_ALBUM_1_DESCRIPTION_1']; ?></div>
            </div>
          </div>
        </div>
        <div class="card-row">
        <div class="js-isotope-item">
          <div class="card-row-img card-block col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url(../../images/last_projects/gran_tarajal/centro_mayores/saneamiento_fachada.JPG)"></div>
          <img class="visible-sm visible-xs img-responsive" alt="" src="../../images/last_projects/gran_tarajal/centro_mayores/saneamiento_fachada.JPG">
          <div class="card-block col-md-offset-7 col-lg-offset-8">
            <div class="card-posted text-dark"><p class="text-dark"><?php echo $lang['PROJECT_ALBUM_1_DATE_2']; ?></p></div>
            <h4 class="card-title"><?php echo $lang['PROJECT__ALBUM_1_TITLE_2']; ?></h4>
            <div class="card-text"><?php echo $lang['PROJECT_ALBUM_1_DESCRIPTION_2']; ?></div>
          </div>
        </div>
      </div>
      <div class="card-row">
          <div class="card-row js-isotope-item ">
            <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url(images/news/3-770x555.jpg)"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="images/news/3-770x555.jpg">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">Interior Design For Apartment</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus. In lectus ligula, varius quis...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div>
        </div>
          <div class="card-row js-isotope-item">
            <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url(images/news/4-770x555.jpg)"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="images/news/4-770x555.jpg">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">Small & Minimal House On Paterson Hill</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer -->

        <footer id="footer" class="footer section">
          <div class="footer-flex">
            <div class="flex-item">
              <a class="brand pull-left" href="../../index.php">
                <img alt="" src="../../images/brand.png">
              </a>
            </div>
            <div class="flex-item">
              <div class="inline-block"><?php echo $lang['MENU_FOOTER']; ?></div>
            </div>
            <!--
            <div class="flex-item">
              <ul>
                <li><a href="">Site Map</a></li>
                <li><a href="">Term & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Affiliatep</a></li>
              </ul>
            </div>
            <div class="flex-item">
              <ul>
                <li><a href="">Our Location</a></li>
                <li><a href="">Career</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>
          -->
            <div class="flex-item">
              <ul>
                <li><a href="proyecto.php?lang=es">Esp</a></li>
                <li><a href="proyecto.php?lang=en">Eng</a></li>
              </ul>
            </div>
            <div class="flex-item">
              <div class="social-list">
                <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

<!-- jQuery -->
<script src="../../js/jquery.min.js"></script>
<script src="../../js/animsition.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/smoothscroll.js"></script>
<script src="../../js/jquery.validate.min.js"></script>
<script src="../../js/wow.min.js"></script>
<script src="../../js/jquery.stellar.min.js"></script>
<script src="../../js/jquery.magnific-popup.min.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/isotope.pkgd.min.js"></script>
<script src="../../js/imagesloaded.pkgd.min.js"></script>
<script src="../../js/plugins.js"></script>
<script src="../../js/sly.min.js"></script>


<!-- Slider revolution -->
<script src="../../js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="../../js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<!-- Slider revolution 5x Extensions   -->
<script src="../../js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="../../js/rev-slider/revolution.extension.video.min.js"></script>


<!-- Scripts -->
<script src="../../js/scripts.js"></script>
<script src="../../js/rev-slider-init.js"></script>
</body>
</html>
