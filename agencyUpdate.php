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
  
      $id = 104;
      $name = 'nikki';
      

      $sql = "update agencies set  name = ? where id = ?";
      $statement = $connection->prepare($sql);
           
      $statement->bind_param("si",$name,$id);

     
      $n = $statement->execute();
      if ( $n != 1 )    
         throw new AgencyNotFOundException();
          
      $statement->close(); 
      $connection->close();
?>