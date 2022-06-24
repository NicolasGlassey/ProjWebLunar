<?php
/**
 * @file    userManager.php
 * @brief   user management between the server and the DB (mostly to add or check data)
 * @author  Create by Nathan
 * @version 10.06.2022
 */

/**
 * @param $email
 * @param $name
 * @param $password
 * @return array|false|null
 */
function writeRegisterInDatabase($email,$name,$password): bool|array|null
{
    //write in the DB the new account
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php
    $loginQuery = 'INSERT INTO members (name,email,password,types_idTypes) VALUES ("'.$name.'","'.$email.'","'.$password.'","'."1".'")';
    //TODO corriger pasword en password :P
    return executeQuerySelect($loginQuery);
}

function checkIfEmailExist($email): bool
{
    require_once "model/dbConnector.php";
    $result = false;
    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM members WHERE email ='.$strSeparator.$email.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) {
        $result = true;
    }
    return $result;
}

function checkAccount($name,$email,$password): bool
{
    require_once "model/dbConnector.php";

    $result = false;
    $strSeparator = '\'';
    $loginQuery = 'SELECT email, name, password FROM members WHERE email ='.$strSeparator.$email.$strSeparator.'AND name='.$strSeparator.$name.$strSeparator.'AND password='.$strSeparator.$password.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);
    if (count($queryResult) == 1) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}