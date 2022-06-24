<?php
/**
 * @file    users.php
 * @brief   user informations management
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 09.06.2022
 */

/**
 * @brief Logout the user
 * @return void
 */
function logout(){
    session_destroy();
    require 'view/home.php';
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
        //check if it is a email
        if(str_contains($email,'@')){
            if(checkIfEmailExist($email)) {
                require "view/register.php";
            }
            else{
                writeRegisterInDatabase($email,$pseudo,$password);
            }
            $_SESSION['user']=$pseudo;
            require 'view/home.php';
        }
        require "view/register.php";
    }
}

/**
 * @param $inputEmail
 * @param $inputPseudo
 * @param $inputPassword
 * @return void
 */
function login($inputEmail, $inputPseudo, $inputPassword){
    require "model/userManager.php";
    if(checkAccount($inputPseudo,$inputEmail,$inputPassword)){
        //Connection to the user account
        $_SESSION['user']=$inputPseudo;
        $_SESSION['email']=$inputEmail;
        require 'view/home.php';
    }
    else {
        require_once 'view/login.php';
    }
}