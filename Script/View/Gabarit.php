<!--liens template :https://nicepage.com/website-templates/preView/shop-special-offers-and-deals-52915?device=desktop-->
<!--Le site : Website Templates-->

<!--contenu du footer -->
<!--liens template :https://bootsnipp.com/snippets/rlXdE-->
<!--Le site : Bootsnipp-->
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
 <!--   <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    [Permet de mettre certain mot clé, pour une recherche par exemple j'imagine]
    <meta name="keywords" content="Black, FRiday">
    [Permet de mettre une description]
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
     [Permet de mettre un nom, en bas y a les deux pages css une pour le gabarit (nicepage), et la spécifique à la page, et en dessous du javas qui permet de mettre le menu déroulant] -->
    <title>  <?php
        echo $title;
        if(isset ($_SESSION['wf']) ){
          $connecte="Se déconnecter";
          $lienconnection="index.php?action=unlogin";
      }
      else {
          $connecte="Se connecter";
          $lienconnection="index.php?action=login";}

        ?></title>
      <meta charset="UTF-8">
      <meta name="Viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="View/content/images/icons/favicon.png"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/fonts/themify/themify-icons.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/fonts/elegant-font/html-css/style.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/animate/animate.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/animsition/css/animsition.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/select2/select2.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/daterangepicker/daterangepicker.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/slick/slick.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/vendor/lightbox2/css/lightbox.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="View/content/css/util.css">
      <link rel="stylesheet" type="text/css" href="View/content/css/main.css">

          <link rel="stylesheet" href="View/content/css/Home/nicepage.css" media="screen">
<!--<link rel="stylesheet" href="CSS/Page-12.css" media="screen">-->
      <link rel="script" type"tex

      <meta name="Viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <link href="View/content/css/Login/css.css" rel="stylesheet">
      <link rel="stylesheet" href="View/content/css/Login/font-awesome.css"-->
      <link rel="stylesheet" type="text/css" href="View/content/css/Login/A.css">
      <link href="View/content/css/Home/footer.css" rel="stylesheet" id="bootstrap-css">
      <!--Lien perso
      <link rel="stylesheet" href="CSS/Page-11.css" media="screen">-->
      <script class="u-script" type="text/javascript" src="View/content/js/jsHome/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="View/content/js/jsHome/nicepage.js" defer=""></script>
      <!--<meta name="generator" content="Nicepage 4.4.1, nicepage.com">
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  -->
           <script class="u-script" type="text/javascript" src="content/js/jsHome/jquery-1.9.1.min.js" defer=""></script>
         <script class="u-script" type="text/javascript" src="content/js/jsHome/nicepage.js" defer=""></script>

  </head>
  <body class="u-body">

  <header class="u-clearfix u-header u-header" id="sec-8940"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <!---Permet de positioné le logo-->
      <a href="index.php?action=home"" class="u-image u-logo u-image-1">
          <img src="View/content/images/Logo.jpg" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <!-- Permet de mettre le liens en haut-->
          <div class="u-nav-container">
              <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?action=create" style="padding: 10px 20px;"> S'inscrire</a></li>

                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?action=addarticle" style="padding: 10px 20px;"> Ajouter un produit</a></li>

                  <li  class="u-nav-item" ><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-active-palette-1-base "  href="<?php echo $lienconnection; ?>" style="padding: 10px 20px;"><?php echo $connecte; ?></a></li>

                  <li class="u-nav-item">

                     <div class="parent">

                         <div class="menu-collapse"   >
                             <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#""> <svg class="u-svg-link" ViewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
                                 <svg  class="u-svg-content" version="1.1" id="menu-hamburger" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                                     </g>
                                 </svg>
                             </a>
                         </div>
                         <!--mettre le ul-->

                         <div class="enfant">
                                <div  >
                                    <div  class= "div-position">
                                        <div class="u-inner-container-layout " >
                                            <ul class=" div-color u-align-center u-nav u-popupmenu-items2 u-unstyled u-nav-2">
                                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home">Sweat</a></li>
                                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home">T-shirt</a></li>
                                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home">Chausette</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="u-menu-overlay"></div>
                                </div>

                         </div>
                     </div>
                 </li>
              </ul>
              </div>
          <!--Permet de mettre le barre-->
       <div  class="u-nav-container-collapse">
                <div class=" u-black u-inner-container-layout  u-sidenav ">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                  <div class="u-menu-close"></div>
                      <ul class="u-align-center u-nav u-popupmenu-items2 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home">Catégorie 1</a>
      </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home">Catégorie 2</a>
      </li></ul>
                    </div>
            </div>
          </div>
      </nav>
  </div></header>


    <section class="u-align-center u-clearfix u-image u-valign-middle u-section-1" id="sec-5099">
        <?php
       echo $content;
        ?>

    </section>
  <!-- Le footer en bas qui contient la partie en noir-->
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7b73"><div class="u-clearfix u-sheet u-sheet-1">
            <section >
                <div class="container">
                      <div class="row text-center text-xs-center text-sm-left text-md-left">
                           <div class="col-xs-12 col-sm-4 col-md-4">
                                <h5>Liens :</h5>
                                    <ul class="list-unstyled quick-links">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link"  href="index.php?action=home"><i class= "fa fa-solid fa-check"></i></i> Home</a></li>
                                        <br>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo $lienconnection; ?>"><i class="fa fa-solid fa-check"></i></i> Se connecter</a></li>
                                        <br>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=create"><i class="fa fa-solid fa-check"></i></i> S'inscrire</a></li>
                                        <br>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home"><i class="fa fa-solid fa-check"></i></i> Article</a></li>
                                </ul>
                            </div>


                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>A propos de nous :</h5>
                            <ul class="list-unstyled quick-links">
                                <p>Nous somme une supper équipe</p>
                                <p>Sample text</p>
                                <p>Lorem ipsum dolor sit amet, uatur. Quis aute iure reprehenderit in voluptate velit esse cilcat </p>
                                <p>consectetur adipisci elit, sed eiusmod tempor </p>
                                <p>ncidunt ut labore et dolore magna aliqua. </p>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Contact :</h5>
                            <ul class="list-unstyled quick-links">

                                <p>Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi conseq</p>
                                <p>lum dolore eu fugiat nulla pariatur. Excepteur sint obcae cupiditat non proident, sunt in culpa</p>
                                <p>qui officia deserunt mollit anim id est laborum.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
      </div></footer>
    <!--<section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>.
    </section>-->
  </body>


  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="View/content/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/select2/select2.min.js"></script>
  <script type="text/javascript">
      $(".selection-1").select2({
          minimumResultsForSearch: 20,
          dropdownParent: $('#dropDownSelect1')
      });
  </script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/slick/slick.min.js"></script>
  <!--Special-->
  <script type="text/javascript" src="View/content/js/slick-custom.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/lightbox2/js/lightbox.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="View/content/vendor/sweetalert/sweetalert.min.js"></script>
  <script type="text/javascript">
</html>