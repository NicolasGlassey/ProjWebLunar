<?php
/**
 * @file    users.php
 * @brief   Sent the user where he should be when clicking a button/link
 * @author  Create by Nathan.CHAUVEAU
 * @version 02.02.2022
 */

require 'Controller/users.php';
require "Controller/navigation.php";
require "Controller/product.php";
//start a new session
session_start();
//depending where the user was , it will guide him in a new page
if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action) {
        case 'addarticle':
            Addarticle($_POST);
            break;
        case 'controlarticle':
            ControlArticle($_POST);
            break;
        case 'check':
            check($_POST);
            break;
        case 'create':
            Newaccount();
            break;
        //stop the session and sent back the user to home
        case 'unlogin':
            SessionUnlogin();
            break;
        //collect the data from the formulaire, write the datas in the json file and sent back the user in the home page with a new message
        case 'session':
            SessionLogin($_POST);
            break;
        //sent the user to the login page
        case 'login':
            Login();
            break;
        //sent the user to the home page
        case 'home':
            Home();
            //send to home
            break;
        //sent the user to the lost page
        default:
            Lost();
    }
}
else{
    //sent the user to the home page
   Home();

}

