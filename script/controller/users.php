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
    //prepare the message which will be write in the json file
    if($arrayOfUser ==! null){
        $email = $arrayOfUser['email'];
        $pseudo = $arrayOfUser['pseudo'];
        $password = $arrayOfUser['password'];
        $jsonContent=getContentJson();
        if((strpos($jsonContent,$email) == false) &&(strpos($jsonContent,$password) == false)) {
            require "view/register.php";
        }
        else{
            $message = array($email, $pseudo, $password);
            writeRegisterInjson($message);
        }
        //encode the message into json
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