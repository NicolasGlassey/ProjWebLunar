<?php
/**
 * @file    users.php
 * @brief   Write the message in a variable
 * @author  Create by Nathan.CHAUVEAU
 * @version 02.02.2022
 */


function SessionUnlogin(){
    require 'View/home.php';
    session_destroy();
}

/**
 * @param $arrayOfUsersInput
 * @return void
 */
function SessionLogin($arrayOfUsersInput){
    require "Model/userManager.php";
    //prepare the message which will be write in the json file
    if(isset($arrayOfUsersInput)){
        $Name=""; // create the message
        $count=0;
        $message="";
        //Prepare the welcome message
        foreach ($arrayOfUsersInput as $userInput){
            if($count <=0){
                $count=$count+1;
                $Name=$Name .$userInput. " ";
            }else{
                $Name=$Name;
            }
        }
        $email = $arrayOfUsersInput['email'];
        $pseudo = $arrayOfUsersInput['username'];
        $mdp = $arrayOfUsersInput['mdp'];
        $message= array($email,$pseudo,$mdp);
        //encode the message into json
        writeRegisterInJSON($message);

        $_SESSION['wf']=$Name;

        require 'View/home.php';
    }else{
        require "View/login.php";
    }
}

/**
 * @param $arrayOfUsersInput
 * @return void
 */
function check($arrayOfUsersInput){
    require "Model/userManager.php";
    //take the pseudo and mdp input
    $pseudo = $arrayOfUsersInput['username'];
    $email = $arrayOfUsersInput['email'];
    $mdp = $arrayOfUsersInput['mdp'];
    //decode the file to a string
    $JSONContent=getContentJSON();

    //check if the pseudo and the password are inside of the JSON file
    if((strpos($JSONContent,$email) !== false) &&(strpos($JSONContent,$mdp) !== false)){
    //Connection to the user account
        $_SESSION['wf']=$pseudo;
        require 'View/home.php';
    }else{
        //send back to the login page
        require_once 'View/login.php';
    }
}