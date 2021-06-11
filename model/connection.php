<?php

require 'db-config.php';
// Create connection
try{
  $conn = new PDO($servername, $username, $password);

}catch(PDOException $e){
  
}

return $conn;
?>