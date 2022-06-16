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
function writeRegisterInJson($registerToWrite)
{
    $pathToJsonFile = setFullPath("/data/login.json");
    $encodedRegister = json_encode($registerToWrite);
    writeMsgInFile($pathToJsonFile, $encodedRegister, false);
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