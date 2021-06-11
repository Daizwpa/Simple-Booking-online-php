<?php
session_start();
include './../model/reservations.php';
$id = $_POST["res_id"];
$reservations = new Reservations();
$is_delete = $reservations->delete($id);
if($is_delete){
   if($_SESSION["type"] == "company"){
    header('Location: ./../view/listReservations.php');

   }else{
    header('Location: ./../view/MyresarvationUser.php');
   }
    
}else{
echo "error ";
}


?>