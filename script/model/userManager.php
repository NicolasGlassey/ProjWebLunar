<?php
/**
 * @file    userManager.php
 * @brief   user management bewteen the server and the DB (mostly to add or check datas)
 * @author  Create by Nathan
 * @version 10.06.2022
 */

//encode the message to Json
/**
 * @param $registerToWrite
 * @return void
 */
function writeRegisterInDatabase($email,$name,$password)
{
    //write in the DB the new account
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php
    $loginQuery = 'INSERT INTO members (name,email,password,types_idTypes) VALUES ("'.$name.'","'.$email.'","'.$password.'","'."1".'")';
    //TODO corriger pasword en password :P
    $queryResult = executeQuerySelect($loginQuery);

    return $queryResult;
}

function checkIfEmailExist($email)
{
    //check if the email entered is already taken
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php
    $result = false;
    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM members WHERE email ='.$strSeparator.$email.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);
    //check if there's ONE thing in the result. If not, send a error instead
    if (count($queryResult) == 1) {
        $result = true;
    }
    return $result;
}

function checkAccount($name,$email,$password)
{
    //check if the account already existed or not
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php

    $result = false;
    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM members WHERE email ='.$strSeparator.$email.$strSeparator.'AND name='.$strSeparator.$name.$strSeparator.'AND password='.$password;
    //TODO corriger pasword en password :P
    $queryResult = executeQuerySelect($loginQuery);
    //check if there's ONE thing in the result. If not, send a error instead
    if (count($queryResult) == 1) {
        $result = true;
    }
    return $result;
}