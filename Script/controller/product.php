<?php
/**
 * @file    product.php
 * @brief   File description
 * @author  Create by Nathan.CHAUVEAU
 * @version 03.03.2022
 */
function ControlArticle($ArrayofProductInput){
    require "model/articleManager.php";
    if(isset($ArrayofProductInput)){
        if($ArrayofProductInput['prix'] >= "0"){

            $titre= $ArrayofProductInput['titre'];
            $categorie= $ArrayofProductInput['categorie'];
            $description = $ArrayofProductInput['description'];
            $image=$ArrayofProductInput['image'];
            $prix=$ArrayofProductInput['prix'];

            $message= array($titre,$description,$prix,$image);

            $JSONContent=getContentArticleJSON($categorie);

            //check if the article is already inside the JSON
            if((strpos($JSONContent,$titre) !== false) &&(strpos($JSONContent,$image) !== false)&&(strpos($JSONContent,$prix) !== false)&&(strpos($JSONContent,$description) !== false)){
                //send back to the add article page
                require "view/addArticle.php";
            }else{
                //write the article in the good JSON
                writearticleInJSON($message,$categorie);
                require 'view/home.php';
            }

        }else{
            require "view/addArticle.php";
        }

    }else{
        require "view/addArticle.php";
    }

}