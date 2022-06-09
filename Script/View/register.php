<?php
/**
 * @file      register.php
 * @brief     This view is designed to display the create page
 * @author    Created by Elodie Depierraz and Adam, Nathan, Pierrot
 * @version   13.05.2022
 */
?>
<!--Link to original template: https://colorlib.com/wp/template/login-form-19/-->
<!DOCTYPE html>
<html style="font-size: 16px;">

<body class="u-body">
<?php
$title = "register";
ob_start();
?>
<section class="u-align-center u-clearfix u-image u-valign-middle u-section-1" id="sec-5099">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                        <!--url(Path to logo image)-->
                        <div class="img d-flex align-items-center justify-content-center"
                             style="background-image:url(View/content/images/Logo.jpg)">
                        </div>
                        <!--Title "bienvenue sur lunarclothe"-->
                        <h3 class="text-center mb-0">Bienvenue sur LunarClothes</h3>
                        <!--Subtitle-->
                        <p class="text-center">Connecter vous</p>
                        <!--inscription formulaire-->
                        <form action="index.php?action=register" method="post" name="action" class="login-form">
                            <!--Place for userInfo-->
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-user"></span></div>
                                <input type="text" name="pseudo" class="form-control" placeholder="Nom d'utilisateur"
                                       required="">
                            </div>

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-user"></span></div>
                                <input type="text" name="email" class="form-control" placeholder="Email" required="">
                            </div>

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-lock"></span></div>
                                <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                                       required="">
                            </div>

                            <!--Submit button-->
                            <div class="form-group">
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3">Se
                                    connecter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--unknown scrips (maybe animation)-->
    <script src="view/content/js/jsHome/jquery.js"></script>
    <script src="view/content/js/jsHome/popper.js"></script>
    <script>eval(mod_pagespeed_TzTWHL50VR);</script>
    <script>eval(mod_pagespeed_hIoZOxWKES);</script>
    <script>eval(mod_pagespeed_ci75Ifz6eT);</script>
    <script defer="defer" src="Login/v652eace1692a40cfa3763df669d7439c1639079717194"
            integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
            data-cf-beacon="{&quot;rayId&quot;:&quot;6d8c72a66e28233d&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}"
            crossorigin="anonymous"></script>

</section>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
</body>
</html>
