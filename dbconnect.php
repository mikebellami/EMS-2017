<?php

     
    

$dbengine   = 'mysql';
$dbhost     = 'localhost';
$dbuser     = 'root';
$dbpassword = '';
$dbname     = 'ems2';


try{
      $pdo = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    }  

     catch (PDOException $e)
     {
       $e->getMessage();
     }
     
 
   

?>
 
    
