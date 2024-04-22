<?php 
    $title = "Private";
    ob_start();
?>
    
    <div id="private_home">
        <div id="login">
            <h1>Connectez-vous pour ajouter sur la carte!</h1>

            <form action="" method="POST" class="form">
                <!-- <input type="text" name="name" placeholder="Nom"> -->
                <input type="text" name="login" placeholder="Identifiant">
                <input type="password" name="password" placeholder="mot de passe">
                <input type="submit" name="submit">
            </form>
            <a href="">Modifier le mot de passe</a>
        </div>

        <div id="signup">
            <h1>Vous n'avez pas de compte? Créez-en un!</h1>

            <form action="" method="POST" class="form">
                <input type="text" name="create_name" placeholder="Nom">
                <input type="text" name="create_login" placeholder="Identifiant">
                <input type="password" name="create_password" placeholder="Mot de passe">
                <input type="submit" name="submit_signup">
            </form>
        </div>
    </div>
    <?php
        $content = ob_get_clean();
        echo $content;
    ?>

    <style>
        body{
            margin: 0;
            padding: 0;
            text-align: center;
        }
        #private_home{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }
        #login{
            margin-bottom: 50px;
        }
        #signup{
            margin-top: 50px;
        }
        .form{
            display: flex;
            flex-direction: column;
            align-content: center;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            width: 40vw;
            margin: auto;
        }
        input{
            margin-bottom: 10px;
            
        }
        input[type="submit"]{
            background-color: blue;
            color: white;
        }
    </style>
    
    <?php

        require_once('../src/privateModel.php');
        require_once('../templates/layout.php');
        addManager();
        checkCredentials();
    ?>
