<?php

      $servername="localhost";
      $username="root";
      $password= "";
      $dbname= "mitra bank";

      $conn=mysqli_connect($servername, $username, $password, $dbname);

      if(!$conn){
          die("Failed to connect due to ----> ".mysqli_connect_error());
      }

?>      