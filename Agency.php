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
     $name = 'kaneez';
    $place='bangalore';
    

      $sql = "insert into agencies values(?,?,?)";
      $statement = $connection->prepare($sql);
           

      $statement->bind_param("iss",$id,$name,$place);

      if ( $statement->execute() )
         echo 'Insert success ...'.'<br>';
      else
         echo $statement->error.'<br>';

      $statement->close(); 
      $connection->close();

  
?>
