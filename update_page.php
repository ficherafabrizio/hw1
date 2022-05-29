<?php

    session_start();
    if(isset($_POST["datapagina"]) && isset($_SESSION["username"]) && isset($_POST["pag"])){

        $conn = mysqli_connect("localhost", "root", "root", "hw1");

        $user = mysqli_real_escape_string($conn, $_SESSION["username"]);
        $data = mysqli_real_escape_string($conn, $_POST["datapagina"]);
        $pagina = mysqli_real_escape_string($conn, $_POST["pag"]);

        $res = mysqli_query($conn, 'SELECT data FROM pagina WHERE data="'.$data.'" and user="'.$user.'"');

        if(mysqli_num_rows($res) > 0){

            mysqli_query($conn,"UPDATE pagina SET contenuto = '".$pagina."' WHERE data='".$data."' and user='".$user."'");
        }else{
            mysqli_query($conn,"INSERT INTO pagina(data,contenuto,user) VALUES('".$data."','".$pagina."','".$user."')");
        }


        mysqli_free_result($res);
        mysqli_close($conn);

    }

?>