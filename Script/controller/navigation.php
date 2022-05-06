<?php
/**
 * @file    navigation.php
 * @brief   Navigate from every pages
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 * @version 06.05.2022
 */

//all of this function send the user to the appropriate page
/**
 * @return void
 */
function home(){
    require "view/home.php";
}

/**
 * @return void
 */
function lost(){
    require "view/lost.php";
}

/**
 * @return void
 */
function viewLogin(){
    require "view/login.php";
}

function viewRegister(){
    require "view/create.php";
}
function addArticle(){
    require "view/addArticle.php";
}