<?php
/**
 * @file    articleManager.php
 * @brief   File description
 * @author  Create by Nathan.CHAUVEAU
 * @version 03.03.2022
 */
function writeArticleInJSON($articleToWrite,$categorie){
    require "Model/userManager.php";

    $pathToJSONFile = setFullPath("/Data/".$categorie.".json");
    $encodedRegister = json_encode($articleToWrite);
    writeMsgInFile($pathToJSONFile, $encodedRegister, false);
}
function getContentArticleJSON($categorie){
    $pathJSON='./Data/'.$categorie.'.json';
    $json = file_get_contents($pathJSON);
    return $json;
}