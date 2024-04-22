<?php

    function getDishes(){
        // // We connect to the database.
        // try {
        //     $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
        // } catch(Exception $e) {
        //     die('Erreur : '.$e->getMessage());
        // }
$database = connectToDatabase();


        // We retrieve the 5 last blog posts.
        $statement = $database->query(
            "SELECT * FROM dishes"
        );
        $dishes = [];
        while (($row = $statement->fetch())) {
            $dish = [
                'nom' => $row['dish_name'],
                'description' => $row['description'],
                'prix' => $row['price'],
            ];

            $dishes[] = $dish;
        }

        return $dishes;
    }

    function getComments(){
        // We connect to the database.
        try {
            $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        $sql = "SELECT * FROM  comments";
        $statement = $database->query($sql);
        $comments = [];
        while (($row = $statement->fetch())){
            $comment = [
                'nom' => $row['commenter_name'],
                'description' => $row['comment_text'],
                'date' => $row['comment_date'],
            ];
            $comments[] = $comment;
        }
        return $comments;
    }



