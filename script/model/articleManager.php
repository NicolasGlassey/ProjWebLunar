<?php
/**
 * @file    articleManager.php
 * @brief   File description
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 10.06.2022
 */

function writeArticleInJson($articleToWrite,$category){
    require "model/userManager.php";

    $pathToJsonFile = setFullPath("/data/".$category.".json");
    $encodedRegister = json_encode($articleToWrite);
    writeMsgInFile($pathToJsonFile, $encodedRegister, false);
}
function getContentArticleJson($categorie){
    $pathJson='./data/'.$categorie.'.json';
    $json = file_get_contents($pathJson);
    return $json;
}