<?php

    if(isset($_POST["submit"])){
        
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $comments = $_POST["comments"];

        
        if($fullname && $email && $comments){
            echo $fullname;
            echo "<br>";
            echo $email; 
            echo "<br>";
            echo $comments; 
        } else {
            echo "Něco nám chybí";
        }
        
        // připojení do databáze
        $connection = mysqli_connect("localhost","root","","feedbackburgers");
        
        if($connection){
            echo "Jsme propojeni s databází";
        } else {
            echo "Ou, něco se pokazilo";
        }

        $connection = mysqli_connect("localhost","root","","feedbackburgers");
        
        if($connection){
            echo "Jsme propojení s databází";
        } else {
            die("Ou, něco se pokazilo");
        }
        
        $query = "INSERT INTO reviews(fullname, email, comments) VALUES('$fullname','$email', '$comments')";
        
        $result = mysqli_query($connection,$query);
        
        if(!$result){
            die("Dotaz do databáze selhal".mysqli_error());
        }   
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
        <form action="formular.php" method="post" class="form">
            <h5>Napište nám jak Vám chutnalo</h5>
            <input type="text" name="fullname" placeholder="Jméno a příjmení">
            <input type="email" name="email" placeholder="Email">
            <textarea name="comments" rows="10" cols="30"></textarea>
            <input type="submit" value="Odeslat" name="submit">
        </form>
    </div>
    
</body>
</html>