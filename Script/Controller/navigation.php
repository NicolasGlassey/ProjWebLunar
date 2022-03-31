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
    require "View/home.php";
}

/**
 * @return void
 */
function lost(){
    require "View/lost.php";
}

/**
 * @return void
 */
function login(){
    require "View/login.php";
}

function newaccount(){
    require "View/create.php";
}
function Addarticle(){
    require "View/AddArticle.php";
}