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
        //get the datas from the form
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
                //get the id of the chosen category
                $idcategory=getCategoryId($category);
                if($idcategory != "erreur"){
                    //get the id of the seller
                    $idClient=getClientId($_SESSION['user']);
                    if($idClient != "erreur"){
                        //write the article in the DB
                        writeArticleInDB($title,$description,$image,$price,$idClient,$idcategory);
                        require 'view/home.php';
                    }else{
                        //send back to the add article page
                        require "view/addArticle.php";
                    }
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