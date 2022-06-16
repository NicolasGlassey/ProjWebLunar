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
            $message= array($title,$description,$image,$price);

            $jsonContent=getContentArticleJson($category);

            //check if the article is already inside the JSON
            if((strpos($jsonContent,$title) == true) &&(strpos($jsonContent,$image) == true)&&(strpos($jsonContent,$price) == true)&&(strpos($jsonContent,$description) == true)){
                //send back to the add article page
                require "view/addArticle.php";
            }else{
                //write the article in the good JSON
                writeArticleInJson($message,$category);
                require 'view/home.php';
            }

        }else{
            require "view/addArticle.php";
        }

    }else{
        require "view/addArticle.php";
    }

}