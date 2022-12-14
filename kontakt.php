<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/kontakt.css" />
    <title>Kontakt</title>
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
            <h1>World of Burgers</h1>
            <div class="row">
                <div class="column">
                    <p>Pražská tř. 6/62
                        <br>
                        Hradec Králové
                    </p>
                    <p>
                        Telefon: <strong style="font-size: 120%;">+420 600 350 250</strong>
                    </p>
                    <p>&nbsp;</p>
                    <h3>Otevírací doba</h3>
                    <?php $today = date("d M Y h:i A"); ?>
                    <?php echo $today ?>
                    <p>
                        pondělí - čtvrtek: 11:30 - 22:00
                        <br>
                        pátek - sobota: 11:30 - 23:00
                        <br>
                        neděle: 12:00 - 21:30
                    </p>
                    <p>&nbsp;</p>
                    <p>Poslední objednávky přijímáme 45 minut před zavírací hodinou</p>
                </div>
            </div>
        </div>
    </main>

    <?php

    include "footer.php";

    ?>

</body>

</html>