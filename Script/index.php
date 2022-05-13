<?php
/**
 * @file    index.php
 * @brief   Sent the user where he should be when clicking a button/link
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 * @version 13.05.2022
 */

require 'controller/users.php';
require "controller/navigation.php";
require "controller/product.php";
//start a new session
session_start();
//depending where the user was , it will guide him in a new page
if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action) {
        case 'addarticle':
            viewAddArticle();
            break;

        case 'addArticle':
            $title= $_POST['titre'];
            $category= $_POST['categorie'];
            $description = $_POST['description'];
            $image=$_POST['image'];
            $price=$_POST['price'];
            addArticle($title,$category,$description,$image,$price);
            break;

        case 'check':
            $password= $_POST['password'];
            $email= $_POST['email'];
            $pseudo = $_POST['pseudo'];
            check($password, $pseudo, $email);
            break;

        case 'viewRegister':
            viewRegister();
            break;

        //stop the session and sent back the user to home
        case 'unlogin':
            sessionUnlogin();
            break;

        //collect the data from the formulaire, write the datas in the json file and sent back the user in the home page with a new message
        case 'register':
            $email = $_POST['email'];
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];
            register($email,$pseudo,$password);
            break;

        //sent the user to the login page
        case 'viewLogin':
            viewLogin();
            break;

        //sent the user to the home page
        case 'home':
            home();
            //send to home
            break;

        //sent the user to the lost page
        default:
            lost();
    }
}
else{
    //sent the user to the home page
    home();

}

