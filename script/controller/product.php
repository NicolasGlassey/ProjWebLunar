<?php

/**
 * @file    product.php
 * @brief   article informations management
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 09.06.2022
 */

function addArticle($arrayofArticle){
    require "model/articleManager.php";
    if($arrayofArticle ==! null){
        $title = $arrayofArticle['title'];
        $category = $arrayofArticle['category'];
        $description = $arrayofArticle['description'];
        $image = $arrayofArticle['image'];
        $price  = $arrayofArticle['price'];

        if($price >= "0"){
            //check if the article is already inside the DB
            if(checkIfProductExist($title,$description)){
                //send back to the add article page
                require "view/addArticle.php";
            }else{
                //write the article in the DB
                $idcategory=getCategoryId($category);
                if($idcategory != "erreur"){
                    //TODO faire fonction get id client
                    getClientId();
                    writeArticleInDB($title,$description,$image,$price,$_SESSION['user'],$idcategory);
                    require 'view/home.php';
                }else{
                    require "view/addArticle.php";
                }
            }
        }else{
            require "view/addArticle.php";
        }
    }else{
        require "view/addArticle.php";
    }

}