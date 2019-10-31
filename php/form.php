<?php
include 'templates/header.php';
?>
<br>
<br>
<h1 class="tracking-in-expand">Espace Etudiant</h1>
<br>
<h6>Merci de vous munir des codes d'accès vous ayant été délivrés lors de l'inscription :</h6>
 
<div class="input-bg">
    <form  action="valid.php" method="POST">
    <?php
            foreach($_POST as $value) { 
                echo "<p>$value</p>"; }
    ?>
        <label for="username">Votre pseudo:</label>
        <input type="text" id="prenom" name="username" placeholder="Votre pseudo" required>
    
        <label for="password">Votre mot de passe:</label>
        <input type="password" id="password" name="password" required>
       
        <input type="submit" value="valider">
    </form>
    <br>
    <p class="italique"En cas de perte, des points vouis seront retirés de vos prochains travaux pratiques...></p>
</div>
<?php
include 'templates/footer.php';

