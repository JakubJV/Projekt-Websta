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
                <li><a href=" index.php" class="Home">World of Burgers</a></li>
                <li><a href="nabidka.php" class="Menu">Nabídka</a></li>
                <li><a href="kontakt.php" class="Contact">Kontakt</a></a></li>
            </ul>
        </nav>
        <div class="header-text">
            <h1>Nabídka našich burgrů</h1>
        </div>
    </header>

    <main>
        <div class="menu-1">
            <img src="img/big_cheese1.jpg" alt="Big Cheesburger">
            <h2>Big Cheesburger</h2>
            <p>pořádná nálož hovězího s plátky cheddaru mezi dvěma kusy zlatavé bulky
            </p>
        </div>
        <div class="menu-2">
            <img src="img/special_burger1.jpg" alt="Special Burger">
            <h2>Special Burger</h2>
            <p>burger s kuřecím plátkem masa pokrytý avokádovou pastou</p>
        </div>
        <div class="clearfix"></div>
    </main>

    <?php

    include "footer.php";

    ?>
</body>

</html>