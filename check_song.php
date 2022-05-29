<?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_GET['track'])){

        $conn = mysqli_connect("localhost", "root", "root", "hw1");

        $user = mysqli_real_escape_string($conn, $_SESSION["username"]);
        $track = mysqli_real_escape_string($conn, $_GET["track"]);

        $res = mysqli_query($conn, "SELECT * FROM canzone where user='".$user."' and track='".$track."'");
        
        if(mysqli_num_rows($res) >0){
            print_r(false);
        }else{
            print_r(true);
        }

        mysqli_free_result($res);
        mysqli_close($conn);
      
        echo json_encode($output);
      
    }

?>