<?php

 require_once('../../app/Models/Model.php');

 
 
 function homePage(){
    $dishes = getDishes();
   
    require('templates/homePage.php');

}