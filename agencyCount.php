<?php
      $host = 'localhost:3306';
      $username = 'root';
      $password = '';
      $dbName = 'agency';
     
      $connection = mysqli_connect($host,$username,$password,$dbName);

      // Check connection
      if (mysqli_connect_errno())
      {
        echo "Failed to connect to database : " . mysqli_connect_error();
      }
      else
        echo "Connection successful ...".'<br>';
  
      $sql = "select * from agencies";
      $resultSet = $connection->query($sql);

      $rowCount = $resultSet->num_rows;
      echo 'No of rows : '.$rowCount.'<br>';
          
      $resultSet->close(); 
      $connection->close();
?>