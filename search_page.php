<?php
    session_start();
    if(isset($_POST["data"]) && isset($_SESSION["username"])){


        $conn = mysqli_connect("localhost", "root", "root", "hw1");

        $user = mysqli_real_escape_string($conn, $_SESSION["username"]);
        $data = mysqli_real_escape_string($conn, $_POST["data"]);

        $output = array();

        $res = mysqli_query($conn, 'SELECT contenuto FROM pagina WHERE data="'.$data.'" and user="'.$user.'"');
        
        while($row = mysqli_fetch_assoc($res))
        {
            $output[] = $row;
        }

        mysqli_free_result($res);
        mysqli_close($conn);
      
        echo json_encode($output);
    }

?>