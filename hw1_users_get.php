<?php
      $conn = mysqli_connect("localhost", "root", "root", "hw1");
      
      $users = array();
      
      $res = mysqli_query($conn, "SELECT * FROM users");
      while($row = mysqli_fetch_assoc($res))
      {
            $users[] = $row;
      }
      
      mysqli_free_result($res);
      mysqli_close($conn);
      
      echo json_encode($users);

?>