<?php
/**
 * @file    users.php
 * @brief   Write the message in a variable
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 * @version 13.05.2022
 */


function sessionUnlogin(){
    require 'view/home.php';
    session_destroy();
}

/**
 * @param $email,$pseudo,$pwd
 * @return void
 */
function register($email,$pseudo,$password){
    require "model/userManager.php";
    //prepare the message which will be write in the json file
    if(isset($email,$pseudo,$password)){
        $count=0;
        $message="";
        $message= array($email,$pseudo,$password);
        //encode the message into json
        writeRegisterInJson($message);

        require 'view/home.php';
    }else{
        require "view/login.php";
    }
}

/**
 * @param $email,$pseudo,$password
 * @return void
 */
function check($email,$pseudo,$password){
    require "model/userManager.php";
    //decode the file to a string
    $jsonContent=getContentJson();

    //check if the pseudo and the password are inside of the JSON file
    if((strpos($jsonContent,$email) !== false) &&(strpos($jsonContent,$password) !== false)){
    //Connection to the user account
        require 'view/home.php';
    }else{
        //send back to the login page
        require_once 'view/login.php';
    }
}