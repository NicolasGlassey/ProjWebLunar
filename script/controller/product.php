<?php

/**
 * @file    product.php
 * @brief   article information management
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 09.06.2022
 */

function addArticle($arrayOfArticle){
    require "model/articleManager.php";
    if($arrayOfArticle ==! null){
        //get the data from the form
        $title = $arrayOfArticle['title'];
        $category = $arrayOfArticle['category'];
        $description = $arrayOfArticle['description'];
        $image = $arrayOfArticle['image'];
        $price  = $arrayOfArticle['price'];

        if($price >= "0") {
            if (!checkIfProductExist($title, $description)) {
                $categoryId = getCategoryId($category);
                if ($categoryId != "erreur") {
                    $idClient = getClientId($_SESSION['user']);
                    if ($idClient != "erreur") {
                        writeArticleInDB($title, $description, $image, $price, $idClient, $categoryId);
                        require 'view/home.php';
                    }
                }
            }
        }
        require "view/addArticle.php";
    }
}