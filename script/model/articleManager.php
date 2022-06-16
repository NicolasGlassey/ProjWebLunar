<?php
/**
 * @file    articleManager.php
 * @brief   File description
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 10.06.2022
 */

function writeArticleInDB($title,$description,$image,$price,$pseudo,$category)
{
    require_once "model/dbConnector.php";


    $strSeparator = '\'';
    $loginQuery = 'INSERT INTO articles (title,description,price,image,categories_ID,clients_ID) VALUES ("'.$title.'","'.$description.'","'.$price.'","'.$image.'","'.$category.'","'.$pseudo.'")';
    $queryResult = executeQuerySelect($loginQuery);
    //TODO check if work
    return $queryResult;
}

function checkIfProductExist($title,$description)
{
    require_once "model/dbConnector.php";

    $result = false;
    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM article WHERE title ='.$strSeparator.$title.$strSeparator.'AND description='.$strSeparator.$description.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);
    //TODO check if work
    if (count($queryResult) == 1) {
        $result = true;
    }

    return $result;
}

function getCategoryId($category)
{
    require_once "model/dbConnector.php";

    $strSeparator = '\'';
    $loginQuery = 'SELECT id FROM category WHERE name ='.$strSeparator.$category.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);
    //TODO check if work
    if (count($queryResult) == 1) {
        $result = $queryResult;
    }else{
        //TODO erreur en cas d'échec
        $result = "erreur";
    }

    return $result;
}