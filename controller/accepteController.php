<?php
session_start();
include './../model/reservations.php';
$id = $_POST["res_id"];
$value = $_POST["value_accpet"];
$reservations = new Reservations();
$is_update = $reservations->update($id, "status", $value);
if($is_update){
   if($_SESSION["type"] == "company"){
    header('Location: ./../view/listReservations.php');

   }else{
    header('Location: ./../view/MyresarvationUser.php');
   }
    
}else{
echo "error ";
}


?>