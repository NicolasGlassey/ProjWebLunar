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
    require_once "model/dbConnector.php";
    $strSeparator = '\'';
    $loginQuery = 'INSERT INTO members (name,email,pasword,types_idTypes) VALUES ("'.$name.'","'.$email.'","'.$password.'","'."1".'")';
    //TODO corriger pasword en password :P
    $queryResult = executeQuerySelect($loginQuery);

    return $queryResult;
}

function checkIfEmailExist($email)
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