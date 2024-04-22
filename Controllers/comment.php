<?php

    require_once('src/Model.php');

    function comment(){
        $comments = getComments();
    
        require('templates/contactPage.php');
    }