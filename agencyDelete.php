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
  
      $id = 103;

      $sql = "delete from agencies where id = ?";
      $statement = $connection->prepare($sql);
           
      $statement->bind_param('i',$id);

      $res = $statement->execute();
      $n = mysqli_affected_rows($connection);

      if ( $n == 1 )
           echo 'Delete Success'.'<br>';
      else
           echo 'Not found'.'<br>';    

      $statement->close(); 
      $connection->close();
?>