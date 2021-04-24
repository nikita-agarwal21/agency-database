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

      $id=104;
      $sql= "select * from agencies where id= ?" ;
      $statement = $connection->prepare($sql);
      $statement->bind_param('i',$id);  
      if($statement->execute())
      {
        $statement->bind_result($id,$name,$place);
        if ( $statement->fetch())
        {
           echo 'id                : '.$id.'<br>';
           echo 'name              : '.$name.'<br>';
           echo 'place             : '.$place.'<br>';
         
        }
        else
            echo $id.' not found ...'.'<br>'; 

    } 
        
    $statement->close(); 
    $connection->close();
?>
     