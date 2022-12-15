<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/nabidka.css" />
    <title>Nabídka World of Burgers</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="Home">World of Burgers</a></li>
                <li><a href="nabidka.php" class="Menu">Nabídka</a></li>
                <li><a href="kontakt.php" class="Contact">Kontakt</a></a></li>
            </ul>
        </nav>
    </header>

    <div class="banner"></div>

    <main>
        <div class="container">
            <h1>Nabídka World of Burgers</h1>
            <div class="row">
                <div class="column1">
                    <img src="CSS/img/big_cheese1.jpg" />
                    <h3>Big Cheese</h3>
                    <p>Pořádná nálož hovězího s plátky cheddaru mezi dvěma kusy zlatavé bulky
                    </p><br>
                    <p>(pšeničná houska, 200g čerstvého hovězího masa, cheddar, hermelín, kyselá okurka, BBQ omáčka)</p>
                </div>
                <div class="column2">
                    <img src="CSS/img/special_burger1.jpg" />
                    <h3>Special Burger</h3>
                    <p>Burger s kuřecím plátkem masa pokrytým avokádovou pastou</p><br>
                    <p>(pšeničná houska, 200g kuřecího masa, cheddar, avokádová pasta, kyselá okurka, BBQ omáčka)</p>
                </div>
                <?php
                include "formular.php";
                ?>
                
    </main>

    <?php

    include "footer.php";

    ?>
</body>

</html>