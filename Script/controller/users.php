<?php
/**
 * @file    users.php
 * @brief   Write the message in a variable
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 * @version 06.05.2022
 */


function sessionUnlogin(){
    require 'view/home.php';
    session_destroy();
}

/**
 * @param $email,$pseudo,$pwd
 * @return void
 */
function register($email,$pseudo,$pwd){
    require "model/userManager.php";
    //prepare the message which will be write in the json file
    if(isset($email,$pseudo,$pwd)){
        $name=""; // create the message
        $count=0;
        $message="";
        //Prepare the welcome message
        /**
        foreach ($arrayOfUsersInput as $userInput){
            if($count <=0){
                $count=$count+1;
                $Name=$Name .$userInput. " ";
            }else{
                $Name=$Name;
            }
        }
        */

        $message= array($email,$pseudo,$pwd);
        //encode the message into json
        writeRegisterInJson($message);

        $_SESSION['wf']=$name;

        require 'view/home.php';
    }else{
        require "view/login.php";
    }
}

/**
 * @param $email,$pseudo,$pwd
 * @return void
 */
function check($email,$pseudo,$pwd){
    require "model/userManager.php";
    //decode the file to a string
    $jsonContent=getContentJson();

    //check if the pseudo and the password are inside of the JSON file
    if((strpos($jsonContent,$email) !== false) &&(strpos($jsonContent,$pwd) !== false)){
    //Connection to the user account
        $_SESSION['wf']=$pseudo;
        require 'view/home.php';
    }else{
        //send back to the login page
        require_once 'view/login.php';
    }
}