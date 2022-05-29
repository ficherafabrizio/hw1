<?php

      
      if(isset($_POST["username"]) && isset($_POST["password"]))
      {
            
            $conn = mysqli_connect("localhost", "root", "root", "hw1");
            
            $username = mysqli_real_escape_string($conn, $_POST["username"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);
            mysqli_query($conn, "INSERT INTO users(username,password) VALUES('".$username."', '".$password."')");
            
            mysqli_close($conn);
        }

?>