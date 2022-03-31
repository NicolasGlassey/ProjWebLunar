<?php
/**
 * @file    userManager.php
 * @brief   prepare and write the message in the JSON file
 * @author  Create by Nathan.CHAUVEAU
 * @version 02.02.2022
 */


//code repris du register Correction

//encode the message to JSON
/**
 * @param $registerToWrite
 * @return void
 */
function writeRegisterInJSON($registerToWrite)
{
    $pathToJSONFile = setFullPath("/Data/login.json");
    $encodedRegister = json_encode($registerToWrite);
    writeMsgInFile($pathToJSONFile, $encodedRegister, false);
}
//prepare the path to the JSON file
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
//Write the message to the JSON file
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
    //!!!ne faite pas attention au rouge dans le fichier json , ceci n'impacte rien sur le code!!!
}

/**
 * @return mixed
 */
function getContentJSON(){
    $json = file_get_contents('./Data/login.json');

    return $json;
}