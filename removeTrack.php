<?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_GET['track'])){


        $conn = mysqli_connect("localhost", "root", "root", "hw1");
        echo $_GET["track"];
        $user = mysqli_real_escape_string($conn, $_SESSION["username"]);
        $track = mysqli_real_escape_string($conn, $_GET["track"]);
        echo $track;
        mysqli_query($conn, 'DELETE FROM canzone WHERE user="'.$user.'" and track="'.$track.'"');
        
        mysqli_close($conn);
      
    }

?>