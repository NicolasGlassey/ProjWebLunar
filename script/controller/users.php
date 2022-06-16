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
    require 'view/home.php';
    session_destroy();
}

/**
 * @param $arrayOfUser
 * @return void
 */
function register($arrayOfUser){
    require "model/userManager.php";
    //prepare to send a request to write the user in the DB
    if($arrayOfUser ==! null){
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
        //decode the file to a string
        $email = $arrayOfUser['email'];
        $pseudo = $arrayOfUser['pseudo'];
        $password = $arrayOfUser['password'];
        $jsonContent=getContentJson();
        //check if the pseudo and the password are inside of the JSON file
        if((strpos($jsonContent,$email) == true) &&(strpos($jsonContent,$password) == true)&&(strpos($jsonContent,$pseudo) == true)){
            //Connection to the user account
            $_SESSION['user']=$pseudo;
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