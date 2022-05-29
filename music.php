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
        <title>Album Musicale - LifeJourney</title>
        <link rel="shortcut icon" href="images/favicon.png">
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='music.css'>
        <script src='music.js' defer></script>
    </head>
    <body>
        <nav>
                <a href="home.php" id="backlink" class="nav_links"><img src='images/backicon_white.png'></a>
                <a href='diary.php' id="diario_nav" class="nav_links">Diario</a>
                <a href='home.php' id="logo">LifeJourney</a>
                <a href='music.php' id='music_nav' class="nav_links">Album Musicale</a>
                <a href="logout.php" id="logout_nav">logout</a>
        </nav>
        <main>
            <h1 id='title'>Il tuo album musicale:</h1>
            <form id="search_form" method="post" name="searchForm">
                <label>Cerca una canzone:<input type="search" name="searchbox">
                    <input type="hidden" name="hiddeninput">
                    <input type="submit" value='Cerca' id='localsearch' class="bottoni">
                    <button id="onlinesearch"  class="bottoni">Cerca online</button>
                    <img src="images/x.png" id="clear">
                </label>
            </form>
            <div id="songbox">
                
            </div>
        </main>
        <footer>
            <p>
                1000007725 &nbsp;  <a href="github.com/ficherafabrizio/hw1">HW1</a>
            </p>
        </footer>
    </body>
</html>