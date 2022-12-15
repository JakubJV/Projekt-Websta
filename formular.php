<?php

    include "mysql/db.php";
    Connection();

    if(isset($_POST["submit"])){
        PostFunction();
    }


?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/formular.css">
    <title></title>
</head>
<body>

    <div class="column3">
        <form action="nabidka.php" method="post" class="form">
            <h5>Napište nám jak Vám chutnalo</h5>
            <input type="text" name="fullname" placeholder="Jméno a příjmení">
            <input type="email" name="email" placeholder="Email">
            <textarea name="comments" rows="10" cols="30"></textarea>
            <input type="submit" value="Odeslat" name="submit">
        </form>
    </div>
    
</body>
</html>