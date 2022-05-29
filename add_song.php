<?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_POST['track']) && isset($_POST['nome'])){

        $conn = mysqli_connect("localhost", "root", "root", "hw1");

        $user = mysqli_real_escape_string($conn, $_SESSION["username"]);
        $track = mysqli_real_escape_string($conn, $_POST["track"]);
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);

        mysqli_query($conn, "INSERT INTO canzone(track,user,nome) VALUES('".$track."','".$user."','".$nome."')");
        
        mysqli_close($conn);
      
    }

?>