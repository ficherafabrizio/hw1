<?php

    // Avvia la sessione
    session_start();
    // Verifica se l'utente è loggato
    if(!isset($_SESSION['username']))
    {
        // Vai alla login
        header("Location: homepage.html");
        exit;
    }

?>

<html>
    <head>
        <title>Home - LifeJourney</title>
        <link rel="shortcut icon" href="images/favicon.png">
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='home.css'>
    </head>
    <body>
        <header>
            <nav>
                <a href='diary.php' id="diario_nav" class="nav_links">Diario</a>
                <a href='home.php' id="logo">LifeJourney</a>
                <a href='music.php' id='music_nav' class="nav_links">Album Musicale</a>
                <a href="logout.php" id="logout_nav">logout</a>
            </nav>
            <div id="bottomheader">
                <p>Benvenuto <?php echo $_SESSION["username"] ?>!</p>
            </div>
        </header>
        <div id="cards">
            <a href="diary.php" id='diarycard'>Diario</a>
            <a href="music.php" id="musiccard">Album<br>Musicale</a>
        </div>
        <footer>
            <p>
                1000007725 &nbsp;  <a href="github.com/ficherafabrizio/hw1">HW1</a>
            </p>
        </footer>
    </body>
</html>