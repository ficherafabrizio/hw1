<?php

    // Avvia la sessione
    session_start();
    // Verifica l'accesso
    if(isset($_SESSION["username"]))
    {
        // Vai alla home
        header("Location: home.php");
        exit;
    }
    // Verifica l'esistenza di dati POST
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        // Connetti al database
        $conn = mysqli_connect("localhost", "root", "root", "hw1");
        // Escape dell'input
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        // Cerca utenti con quelle credenziali
        $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $res = mysqli_query($conn, $query);
        // Verifica la correttezza delle credenziali
        if(mysqli_num_rows($res) > 0)
        {
            // Imposta la variabile di sessione
            $_SESSION["username"] = $_POST["username"];
            // Vai alla pagina home_db.php
            header("Location: home.php");
            exit;
        }
        else
        {
            // Flag di errore
            $errore = true;
        }
    }

?>
<html>
    <head>
        <title>Login - LifeJourney</title>
        <link rel="shortcut icon" href="images/favicon.png">
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='login.css'>
        <script src='login.js' defer></script>
    </head>
    <body>
        <header><a href="homepage.html" id="backimg"><img src="images/backicon.png" /></a>&nbsp;</header>
        <h1>LifeJourney</h1>
        <main>
            <h2>Login</h2>
            <p class='errore hidden' id="hiddenmsg">
                Devi riempire tutti i campi.
            </p>
            <?php
                if(isset($errore))
                {
                    echo "<p class='errore'>";
                    echo "Credenziali non valide.";
                    echo "</p>";
                }
            ?>
        
            <form name='nome_form' method='post'>
                    <label>Nome utente <input type='text' name='username'></label>
                    <label>Password <input type='password' name='password'></label>
                    <label>&nbsp;<input type='submit' value='login' id="loginbutton"></label>
            </form>
        </main>
        <p id="regdiv">
            Non hai un account? <br> <a href='register.html' id="reglink">Registrati</a>
        </p>
        <footer>
            <p>
                1000007725 &nbsp;  <a href="github.com/ficherafabrizio/hw1">HW1</a>
            </p>
        </footer>
    </body>
</html>