<?php
/**
 * @file    articleManager.php
 * @brief   article management bewteen the server and the DB (mostly to add or check datas)
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 10.06.2022
 */

function writeArticleInDB($title,$description,$image,$price,$pseudo,$category)
{
    //write the received datas in the DB
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php
    $strSeparator = '\'';
    $loginQuery = 'INSERT INTO articles (title,description,price,image,categories_ID,clients_ID) VALUES ("'.$title.'","'.$description.'","'.$price.'","'.$image.'","'.$category.'","'.$pseudo.'")';
    $queryResult = executeQuerySelect($loginQuery);
    return $queryResult;
}

function checkIfProductExist($title,$description)
{
    //check if a product has the same title and descrition than the one gotten with the form
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php
    $result = false;
    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM articles WHERE title ='.$strSeparator.$title.$strSeparator.'AND description='.$strSeparator.$description.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);
    if (count($queryResult) == 1) {
        $result = true;
    }
    return $result;
}

function getCategoryId($category)
{
    //get the id of the category
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php
    $strSeparator = '\'';
    $loginQuery = 'SELECT idCategories FROM categories WHERE name ='.$strSeparator.$category.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);
    //check if there's ONE thing in the result. If not, send a error instead
    if (count($queryResult) == 1) {
        $result = $queryResult[0]["idCategories"];
    }else{
        $result = "erreur";
    }
    return $result;
}

function getClientId($pseudo)
{
    //get the id of the seller/current user
    require_once "model/dbConnector.php";
    //prepare the query and then execute it with dbconnector.php
    $strSeparator = '\'';
    $loginQuery = 'SELECT idUsers FROM members WHERE name ='.$strSeparator.$pseudo.$strSeparator;
    $queryResult = executeQuerySelect($loginQuery);
    //check if there's ONE thing in the result. If not, send a error instead
    if (count($queryResult) == 1) {
        $result = $queryResult[0]["idUsers"];
    }else{
        $result = "erreur";
    }
    return $result;
}