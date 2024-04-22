<?php
session_start();
    $title = "Private_Modify";
    ob_start();
    require_once('../src/privateModel.php');
    checkCredentials();

    echo $_SESSION["user_id"];

?>

<div id="modify">
    <h1>Modifier le compte</h1>

    <form method="POST" class="form">
        <input type="text" name="modify_login" placeholder="Nouvel identifiant">
        <input type="password" name="modify_password" placeholder="Nouveau mot de passe">
        <input type="submit" name="submit_modify" value="Modifier">
    </form>
</div>











<?php $content = ob_get_clean();
    echo $content;
    require_once('../templates/layout.php');
    modifyManager();
?>
