<?php
    session_start();
    if(isset($_POST["searchbox"]) && isset($_SESSION["username"])){


        $conn = mysqli_connect("localhost", "root", "root", "hw1");

        $user = mysqli_real_escape_string($conn, $_SESSION["username"]);
        $nome = mysqli_real_escape_string($conn, $_POST["searchbox"]);

        $output = array();

        $res = mysqli_query($conn, 'SELECT track FROM canzone WHERE nome like "%'.$nome.'%" and user="'.$user.'"');
        
        while($row = mysqli_fetch_assoc($res))
        {
            $output[] = $row;
        }

        mysqli_free_result($res);
        mysqli_close($conn);
      
        echo json_encode($output);
    }

?>