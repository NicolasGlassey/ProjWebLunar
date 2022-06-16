<?php
/**
 * @file    navigation.php
 * @brief   Navigate between  home or lost page
 * @author  Create by Nathan modified by Adam, Elodie, Pierrot
 * @version 09.06.2022
 */

/**
 * @return void
 */
function home($homeOrLost){
    if($homeOrLost==true){
        require "view/lost.php";
    }
   else {
       require "view/home.php";
   }
}
