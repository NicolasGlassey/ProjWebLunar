<?php
/**
 * @file    index.php
 * @brief   Sent the user where he should be when clicking a button/link
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 09.06.2022
 */

require 'controller/users.php';
require "controller/navigation.php";
require "controller/product.php";

session_start();

if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action) {

        case 'addArticle':
            addArticle($_POST);
            break;
        case 'logout':
            logout();
            break;
        case 'register':
            register($_POST);
            break;
        //sent the user to the login page
        case 'login':
            login($_POST['email'], $_POST['pseudo'], $_POST['password']);
            break;
        case 'home':
            home(false);
            break;
        //sent the user to the lost page
        default:
            home(true);
    }
}
else{
    //sent the user to the home page
    home(false);
}