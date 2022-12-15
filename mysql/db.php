<?php

    function Connection(){
        global $connection;
        $connection = mysqli_connect("localhost","root","","feedbackburgers");
    }   

    function PostFunction(){
        global $connection;
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $comments = $_POST["comments"];
        
        $query = "INSERT INTO reviews(fullname, email, comments) VALUES('$fullname','$email', '$comments')";
        
        $result = mysqli_query($connection,$query);
        
        if(!$result){
            die("Dotaz do databáze selhal".mysqli_error());
        }   
    }

?>