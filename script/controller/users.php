<?php
/**
 * @file    users.php
 * @brief   user informations management
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 09.06.2022
 */

/**
 * @brief Unlogin the user
 * @return void
 */
function sessionUnlogin(){
    //unlog the user
    require 'view/home.php';
    session_destroy();
}

/**
 * @param $arrayOfUser
 * @return void
 */
function register($arrayOfUser){
    require "model/userManager.php";
    if($arrayOfUser ==! null){
        //get the datas from the form
        $email = $arrayOfUser['email'];
        $pseudo = $arrayOfUser['pseudo'];
        $password = $arrayOfUser['password'];
        //check if the email is already in the DB, if not, it will write in the DB
        if(checkIfEmailExist($email)) {
            require "view/register.php";
        }
        else{
            writeRegisterInDatabase($email,$pseudo,$password);
        }
        $_SESSION['user']=$pseudo;
        require 'view/home.php';
    }else{
        require "view/register.php";
    }
}
/**
 * @param $arrayOfUser
 * @return void
 */
function login($arrayOfUser){
    require "model/userManager.php";
    if($arrayOfUser==!null){
        //get the datas from the form
        $email = $arrayOfUser['email'];
        $pseudo = $arrayOfUser['pseudo'];
        $password = $arrayOfUser['password'];
        $jsonContent=getContentJson();
        //check if the pseudo and the password are inside of the DB
        if(checkAccount($pseudo,$email,$password)){
            //Connection to the user account
            $_SESSION['user']=$pseudo;
            $_SESSION['email']=$email;
            require 'view/home.php';
        }
        else{
            //send back to the login page
            require_once 'view/login.php';
        }
    }else{
        require "view/login.php";
    }
}