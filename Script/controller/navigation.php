<?php
/**
 * @file    navigation.php
 * @brief   Navigate from every pages
 * @author  Create by Nathan.CHAUVEAU
 * @version 02.02.2022
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
function login(){
    require "view/login.php";
}

function newaccount(){
    require "view/create.php";
}
function Addarticle(){
    require "view/addArticle.php";
}