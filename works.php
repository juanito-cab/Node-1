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
        <a href="works.php?lang=es">Esp</a>
        <a href="works.php?lang=en">Eng</a>
      </div>
      <ul class="menu-list right-boxed">
        <li class="active">
          <a  href="index.php"><?php echo $lang['MENU_INDEX']; ?></a>
        </li>
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
        <a  href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a>

      </div>
    </header>

    <!-- Pageheader -->

    <main class="page-header">
      <div class="container"><h1><?php echo $lang['WORKS_MAIN_TITLE']; ?></h1></div>
    </main>

<section class="section">
    <div class="content">
      <div class="projects">
        <div class="container">
          <div class="filter-content-2">
            <ul class="filter js-filter">
              <li class="active"><a href="#" data-filter="*"><?php echo $lang['WORKS_CATEGORY_0']; ?></a></li>
              <li><a href="#" data-filter=".proyecto"><?php echo $lang['WORKS_CATEGORY_1']; ?></a></li>
              <li><a href="#" data-filter=".construcciones"><?php echo $lang['WORKS_CATEGORY_2']; ?></a></li>
              <li><a href="#" data-filter=".reformas"><?php echo $lang['WORKS_CATEGORY_3']; ?></a></li>
              <li><a href="#" data-filter=".rehabilitaciones"><?php echo $lang['WORKS_CATEGORY_4']; ?></a></li>
              <li><a href="#" data-filter=".instalaciones"><?php echo $lang['WORKS_CATEGORY_5']; ?></a></li>
            </ul>
          </div>
        </div>

        <!-- PROYECTO 1 -->
        <div class="grid-items js-isotope js-grid-items">
          <div class="grid-item reformas rehabilitaciones js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="images/last_projects/gran_tarajal/centro_mayores/brazo_fachada_1_426x574.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_1']; ?><br></h3>
                  <p class="project-description"></p>
                </div>
              </div>
               <a href="proyectos/centro_mayores_Gran_Tarajal/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>

          <!-- PROYECTO 2 -->
          <div class="grid-item rehabilitaciones reformas js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="images/last_projects/antigua/campo_de_golf/nave_industrial_desaladora/desaladora_426x574.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_2']; ?></h3>
                  <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_2']; ?></p>
                </div>
              </div>
              <a href="proyectos/desaladora_campo_golf/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>

          <!-- PROYECTO 3 -->
          <div class="grid-item reformas rehabilitaciones js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="images/last_projects/puerto_del_rosario/centro_de_mayores/andamio_426x574.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_3']; ?></h3>
                  <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_3']; ?></p>
                </div>
              </div>
              <a href="proyectos/centro_mayores_puerto_del_rosario/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>

          <!-- PROYECTO 4 -->
          <div class="grid-item construcciones js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="images/last_projects/antigua/fosa_septica/deposito_426x574.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_4']; ?></h3>
                  <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_4']; ?></p>
                </div>
              </div>
              <a href="proyectos/fosa-septica/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>

          <!-- PROYECTO 6 -->
          <div class="grid-item construcciones rehabilitaciones js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="images/last_projects/puerto_del_rosario/fachada_piedra_tesjuate/vivienda-lateral-piedra-426x574.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_6']; ?></h3>
                  <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_6']; ?></p>
                </div>
              </div>
              <a href="proyectos/fachada-piedra/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>


          <!-- PROYECTO 5 -->
          <div class="grid-item rehabilitaciones instalaciones js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="images/last_projects/puerto_del_rosario/hospederia/cuadro_electrico_hospederia_426x574.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1_5']; ?></h3>
                  <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_5']; ?></p>
                </div>
              </div>
              <a href="proyectos/hospederia/proyecto.php" class="link-arrow"><?php echo $lang['PROJECT_LINK']; ?><i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>

          <!-- PROJECT 7 -->

          <!-- END PROJECTS -->

        </div>
      </div>
    </div>

    </section>

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
            <li><a href="works.php?lang=es">Esp</a></li>
            <li><a href="works.php?lang=en">Eng</a></li>
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
