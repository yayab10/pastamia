<?php 
    $title = "Contact"; 
?>
<?php 
    ob_start();
 ?>
 <h1>Liste des commentaires</h1>
<?php
var_dump($comments);
    foreach($comments as $comment){
        ?>
    <div>
        <h3>
            <?= htmlspecialchars($comment['nom']); ?>
        </h3>
        <p>
            <?= htmlspecialchars($comment['description']); ?>
        </p>
        <p>
            <?= htmlspecialchars($comment['date']);
            }
            ?>
    </div>

    <?php 
        $content = ob_get_clean();
        echo $content;
     ?>
<?php
require('layout.php');
    
 
 
