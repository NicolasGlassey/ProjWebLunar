<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to display the gabarit page
 * @author    Created by Elodie Depierraz and Adam, Nathan, Pierrot
 * @version   13.05.2022
 */
?>
<!--template link: https://nicepage.com/website-templates/preView/shop-special-offers-and-deals-52915?device=desktop-->

<!--footer content-->
<!--template link :https://bootsnipp.com/snippets/rlXdE-->
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <title>
        <?php
        echo $title;
        if (isset ($_SESSION['user'])) {
            $connect = "Se déconnecter";
            $connectLink = "index.php?action=unLogin";
        } else {
            $connect = "Se connecter";
            $connectLink = "index.php?action=viewLogin";
        }

        ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="view/content/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/css/util.css">
    <link rel="stylesheet" type="text/css" href="view/content/css/main.css">

    <link rel="stylesheet" href="view/content/css/Home/nicepage.css" media="screen">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="view/content/css/Login/css.css" rel="stylesheet">
    <link rel="stylesheet" href="view/content/css/Login/font-awesome.css" -->
    <link rel="stylesheet" type="text/css" href="view/content/css/Login/A.css">
    <link href="view/content/css/Home/footer.css" rel="stylesheet" id="bootstrap-css">

    <script class="u-script" type="text/javascript" src="view/content/js/jsHome/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="view/content/js/jsHome/nicepage.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="view/content/js/jsHome/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="view/content/js/jsHome/nicepage.js" defer=""></script>

</head>
<body class="u-body">

<header class="u-clearfix u-header u-header" id="sec-8940">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <!---allow to positioned the logo-->
        <a href="index.php?action=home"" class="u-image u-logo u-image-1">
        <img src="view/content/images/Logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <!--allow to make more link on the top-->
            <div class="u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="index.php?action=viewRegister" style="padding: 10px 20px;"> S'inscrire</a></li>

                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="index.php?action=addArticle" style="padding: 10px 20px;"> Ajouter un produit</a>
                    </li>

                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-active-palette-1-base "
                                href="<?php echo $connectLink; ?>"
                                style="padding: 10px 20px;"><?php echo $connect; ?></a></li>

                    <li class="u-nav-item">

                        <div class="parent">

                            <div class="menu-collapse">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                   href="#"">
                                <svg class="u-svg-link" ViewBox="0 0 24 24">
                                    <use xlink:href="#menu-hamburger"></use>
                                </svg>
                                <svg class="u-svg-content" version="1.1" id="menu-hamburger"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <rect y="1" width="16" height="2"></rect>
                                        <rect y="7" width="16" height="2"></rect>
                                        <rect y="13" width="16" height="2"></rect>
                                    </g>
                                </svg>
                                </a>
                            </div>

                            <div class="enfant">
                                <div>
                                    <div class="div-position">
                                        <div class="u-inner-container-layout ">
                                            <ul class=" div-color u-align-center u-nav u-popupmenu-items2 u-unstyled u-nav-2">
                                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                                          href="index.php?action=home">Sweat</a></li>
                                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                                          href="index.php?action=home">T-shirt</a></li>
                                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                                          href="index.php?action=home">Chausette</a>
                                                </li>
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
            <!--allow to put the bar-->
            <div class="u-nav-container-collapse">
                <div class=" u-black u-inner-container-layout  u-sidenav ">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items2 u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home">Catégorie
                                    1</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home">Catégorie
                                    2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>


<section class="u-align-center u-clearfix u-image u-valign-middle u-section-1" id="sec-5099">
    <?php
    echo $content;
    ?>
</section>

<!--This is the footer-->
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7b73">
    <div class="u-clearfix u-sheet u-sheet-1">
        <section>
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Liens :</h5>
                        <ul class="list-unstyled quick-links">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home"><i
                                            class="fa fa-solid fa-check"></i></i> Home</a></li>
                            <br>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                      href="<?php echo $connectLink; ?>"><i
                                            class="fa fa-solid fa-check"></i></i> Se connecter</a></li>
                            <br>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                      href="index.php?action=create"><i
                                            class="fa fa-solid fa-check"></i></i> S'inscrire</a></li>
                            <br>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?action=home"><i
                                            class="fa fa-solid fa-check"></i></i> Article</a></li>
                        </ul>
                    </div>


                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>A propos de nous :</h5>
                        <ul class="list-unstyled quick-links">
                            <p>Nous somme une super équipe.</p>
                            <p>Mais pour l'insant nous n'avons pas le temps de nous decrire alors :</p>
                            <p>Lorem ipsum dolor sit amet, uatur. Quis aute iure reprehenderit in voluptate velit esse
                                cilcat </p>
                            <p>consectetur adipisci elit, sed eiusmod tempor </p>
                            <p>ncidunt ut labore et dolore magna aliqua. </p>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Contact :</h5>
                        <ul class="list-unstyled quick-links">

                            <p>Et encore ici :) :</p>
                            <p>lum dolore eu fugiat nulla pariatur. Excepteur sint obcae cupiditat non proident, sunt in
                                culpa</p>
                            <p>qui officia deserunt mollit anim id est laborum.</p>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</footer>
</body>


<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="view/content/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/slick/slick.min.js"></script>
<!--Special-->
<script type="text/javascript" src="view/content/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/content/vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    </html>