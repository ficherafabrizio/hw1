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
        <title>Diario - LifeJourney</title>
        <link rel="shortcut icon" href="images/favicon.png">
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='diary.css'>
        <script src='diary.js' defer></script>
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
            <form id='datesearch' name="dateform" method="post">
                <label>Cerca una pagina: <input type="date" name="data" id="date_input"><input type="submit" value="Cerca" id="searchbutton"></label>
            </form>
            <div id="date_titolo">
                <h1 id="date"></h1>
                <span class='hidden' id="exceed_length">Impossibile salvare, non superare i 300 caratteri.</span>
            </div>
            <form id='id_form_pagina' name="formpagina" method="post">
                <input type= "hidden" name="datapagina"> 
                <textarea id="pagina" name="pag" placeholder="Inizia a scrivere..."></textarea>
                <input type="submit" value="Salva" id="savebutton">
            </form> 
        </main>
        <footer>
            <p>
                1000007725 &nbsp;  <a href="github.com/ficherafabrizio/hw1">HW1</a>
            </p>
        </footer>
    </body>
</html>