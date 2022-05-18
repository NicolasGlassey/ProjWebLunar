<?php
/**
 * @file    index.php
 * @brief   Sent the user where he should be when clicking a button/link
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 //TODO either your mention all dev with firstname + surname, or only firstname (email address instead?
 * @version 13.05.2022
 */

require 'controller/users.php';
require "controller/navigation.php";
require "controller/product.php";

session_start();

if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action) {
        //TODO NGY - viewAddArticle and addArticle make a confusion.
        case 'addArticle':
            addArticle($_POST);
            break;

        //TODO NGY - check is not clear enough
        case 'check':
            check($_POST['password'], $_POST['email'], $_POST['pseudo']);
            break;

        //TODO NGY - unlogin is not clear enough
        case 'unlogin':
            sessionUnlogin();
            break;

        case 'register':
            register($_POST);
            break;

        //sent the user to the login page
        case 'login':
            login($_POST);
            break;

        //sent the user to the lost page
        default:
            home(true);
    }
}
else{
    //sent the user to the home page
    home();
}

