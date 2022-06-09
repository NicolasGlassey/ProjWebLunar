<?php
/**
 * @file    articleManager.php
 * @brief   File description
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 * @version 12.05.2022
 */

function writeArticleInJson($articleToWrite,$category){
    require "model/userManager.php";

    $pathToJsonFile = setFullPath("/data/".$category.".json");
    $encodedRegister = json_encode($articleToWrite);
    writeMsgInFile($pathToJsonFile, $encodedRegister, false);
}
function getContentArticleJSON($categorie){
    $pathJson='./data/'.$categorie.'.json';
    $json = file_get_contents($pathJson);
    return $json;
}