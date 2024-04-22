<?php


    require_once('src/Controllers/homePage.php');
    require_once('src/Controllers/comment.php');

    if(isset($_GET['action']) && $_GET['action'] !== ''){
        if(isset($_GET['action']) && $_GET['action'] === 'comment'){
            comment();
        } else {
        }
    } else {
        homePage();

    }
    