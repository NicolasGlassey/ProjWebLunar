<?php
/**
 * @file    userManager.php
 * @brief   prepare and write the message in the JSON file
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
    $strSeparator = '\'';
    $loginQuery = 'INSERT INTO members (name,email,pasword,types_idTypes) VALUES ("'.$name.'","'.$email.'","'.$password.'","'."1".'")';
    //TODO corriger pasword en password :P
    $queryResult = executeQuerySelect($loginQuery);

    return $queryResult;
}

function checkIfEmailExist($email)
{
    //check if the email entered is already taken
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

function checkAccount($name,$email,$password)
{
    //check if the account already existed or not
    require_once "model/dbConnector.php";

    $result = false;
    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM members WHERE email ='.$strSeparator.$email.$strSeparator.'AND name='.$strSeparator.$name.$strSeparator.'AND pasword='.$password;
    //TODO corriger pasword en password :P
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) {
        $result = true;
    }

    return $result;
}

//TODO Delete all JSON files/function (at the end once every is done!!!), also change the title of this file


//prepare the path to the Json file
/**
 * @param $fName
 * @return string
 */
function setFullPath($fName)
{
    $currentPath = getcwd();
    $fullPathToFile = $currentPath . "\\" . $fName;
    return $fullPathToFile;
}
//Write the message to the Json file
/**
 * @param $fileFullPath
 * @param $lineToWrite
 * @param $erase
 * @return void
 */
function writeMsgInFile($fileFullPath, $lineToWrite, $erase)
{
    $strWriter = null;
    if($erase){
        $strWriter = fopen($fileFullPath, "w+");
    }
    else{
        $strWriter = fopen($fileFullPath, "a+");
        $lineToWrite = $lineToWrite;
    }
    fwrite($strWriter, $lineToWrite  . "\r\n");
    fclose($strWriter);
}

/**
 * @return mixed
 */
function getContentJson()
{
    $json = file_get_contents('./data/login.json');
    return $json;
}