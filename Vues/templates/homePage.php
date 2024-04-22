
    <?php $title = "Accueil"; ?>

    <?php 
        ob_start();  
    ?>

    <nav>
        <ul id="left_menu">
            <li><a href="../app/templates/homePage.php">Accueil</a></li>
            <li><a href="../app/templates/propos.php">A propos</a></li>
            <li><a href="../app/templates/menuPage.php">Menus</a></li>
            <li><a href="../app/templates/contactPage.php">Contact</a></li>
        </ul>
        <div id="logo">
            <p>Pastamia</p>
        </div>
        <div id="right_menu">
            <p>Contact</p>
            <img src="../app/images/fb.png" alt="logo_facebook">
            <img src="../app/images/ig.png" alt="logo_instagram">
            <img src="../app/images/sc.png" alt="logo_snapChat">
        </div>

    </nav>
    <hr>
    <div id="carrousel">
        <h3>Carrousel</h3>
        <img src="../app/images/lazaign.jpg" alt="lazaign" >
    </div>




    <h1>Nos plats !</h1>
    <?php
            foreach($dishes as $dish){
                
    ?>
    <div>
        <h3>
            <?= htmlspecialchars($dish['nom']); ?>
        </h3>
        <p>
            <?= htmlspecialchars($dish['description']); ?>
        </p>
        <p>
            <?= htmlspecialchars($dish['prix']) . "€";
            }
            ?>
    </div>

    <footer>
        <div id="footer_contact">
            <p>Contact</p>
            <img src="../app/images/fb.png" alt="logo_facebook">
            <img src="../app/images/ig.png" alt="logo_instagram">
            <img src="../app/images/sc.png" alt="logo_snapChat">
        </div>
    </footer>

    <?php $content = ob_get_clean();
        echo $content;
     ?>

    <?php require('layout.php'); 
//  require('templates/contactPage.php');
 ?>
    </p>
</body>
</html>