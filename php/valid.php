<?php

include 'templates/header.php';

if(isset($_POST) && !empty($_POST)) {
    if(isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && $_SESSION["username"] = $_POST["username"] && $_SESSION["password"] = $_POST["password"]) { ?>
        <body>
    <div>
        <br>
            <h1 id="titre">Global Tech Academy</h1>
    </div>
    <div>
        <img src="lunettes.jpg" alt="Lunettes futuristes"/>
        <img src="https://pixabay.com/fr/photos/monde-terre-plan%C3%A8te-globe-terrestre-2491989/" alt="fond bleu tech"/>
    </div>
    <div>
        <p>All Tech Academy’s computer programming boot camps can be studied in full anywhere there’s an internet connection. We have students all over the world! With years of experience training online students, we strive to provide the same level of service to our online students that our in-person students receive. In fact, online students study the same exact content as our in-person students.</p>
    </div>
</body>
</html>
<?php
    } else {
        header('Location: index.php');
        }
    } else {
         header('Location: index.php');
        }

include 'templates/footer.php';