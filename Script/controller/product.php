<?php
/**
 * @file    product.php
 * @brief   File description
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 * @version 06.05.2022
 */

function addArticle($title,$category,$description,$image,$price){
    require "model/articleManager.php";
    if(isset($title,$category,$description,$image,$price)){
        if($price >= "0"){
            $message= array($title,$description,$image,$price);

            $jsonContent=getContentArticleJSON($category);

            //check if the article is already inside the JSON
            if((strpos($jsonContent,$title) !== false) &&(strpos($jsonContent,$image) !== false)&&(strpos($jsonContent,$price) !== false)&&(strpos($jsonContent,$description) !== false)){
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