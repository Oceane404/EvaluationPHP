<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Tech Academy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
// session_id("Oceane");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" href="index.php">Accueil</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Evénement</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Blog</a>
<?php
    if (isset($_SESSION) && !empty($_SESSION) && $_POST[username] = $_SESSION[username] && $_POST[password] = $_SESSION[password]) {
      echo "<a class='nav-link disabled'>Bonjour, $_SESSION[username]</a>";
  } else {
?>
  <a class="flex-sm-fill text-sm-center nav-link" href="form.php">Inscription</a>
<?php
  }
?>

</nav>