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

$sql="select * from agencies";
$resultSet=$connection->query($sql);
echo "id".' '."name".' '."place".'<br>';
if ($resultSet->num_rows > 0)

      while ($row = $resultSet->fetch_assoc())
          echo  $row["id"].' '.$row["name"].' '.$row["place"].'<br>';


$resultSet->close();
$connection->close();          


        ?>