<?php
                    session_start();


    function addManager(){

        if(isset($_POST["submit_signup"])){
            if(isset($_POST["create_name"], $_POST["create_login"], $_POST["create_password"])){
                $name = htmlspecialchars($_POST["create_name"]);
                $login = htmlspecialchars($_POST["create_login"]);
                $password = htmlspecialchars($_POST["create_password"]);

                // password hash
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // We connect to the database.
                try {
                    $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
                } catch(Exception $e) {
                    die('Erreur : '.$e->getMessage());
                }
                $statement = $database->prepare("INSERT INTO `management`(`name`, `login`, `password`) VALUES (?,?,?)");
                $statement->bindParam(1, $name);
                $statement->bindParam(2, $login);
                $statement->bindParam(3, $hashed_password);
                $statement->execute();

                echo "Succès de l'ajout";
            } else {
                echo "Echec de l'ajout";
            }
        }
       
    }   

    function checkCredentials() {
        if(isset($_POST["submit"])){
            if(isset($_POST["login"], $_POST["password"])){
                $login = htmlspecialchars($_POST["login"]);
                $password = htmlspecialchars($_POST["password"]);
    
                // Connexion à la base de données
                try {
                    $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
                } catch(Exception $e) {
                    die('Erreur : '.$e->getMessage());
                }
    
                // Requête pour obtenir le mot de passe associé à l'identifiant donné
                $statement = $database->prepare("SELECT * FROM `management` WHERE `login` = ?");
                $statement->execute(array($login));
                $user = $statement->fetch(PDO::FETCH_ASSOC);
    
                // Vérification du mot de passe
                if($user && password_verify($password, $user['password'])){
                    // Authentification réussie
                    echo "Connexion réussie!";
                    $_SESSION["user_id"] = $user["id_management"];
                    header("Location: ../Vues/private_modify.php");
                    exit();
                } else {
                    // Identifiants incorrects
                    echo "Identifiants incorrects!";
                }
            } else {
                // Certains champs ne sont pas définis
                echo "Veuillez remplir tous les champs!";
            }
        }
    }
    
    
function modifyManager() {
    if(isset($_POST["submit_modify"])) {
        if(isset($_POST["modify_login"], $_POST["modify_password"])) {
            $new_login = htmlspecialchars($_POST["modify_login"]);
            $new_password = htmlspecialchars($_POST["modify_password"]);

            // password hash
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // We connect to the database.
            try {
                $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
            } catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }

            $statement = $database->prepare("UPDATE `management` SET `login`=?, `password`=? WHERE `id`=?");
            $statement->execute(array($new_login, $hashed_password, $_SESSION['user_id'])); // Assurez-vous de stocker l'ID de l'utilisateur dans $_SESSION lors de la connexion

            echo "Modification réussie";
        } else {
            echo "Veuillez remplir tous les champs";
        }
    }
}

// Appel de la fonction pour modifier le compte lors de la soumission du formulaire


    
    
    