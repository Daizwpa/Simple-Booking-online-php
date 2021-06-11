<?php
require './../model/reservations.php';
session_start();
$arr = [
    "date" => $_POST["date"],
    "time" => $_POST["time"],
    "status" => false,
    "id_service" => $_SESSION["id_service"],
    "id_user" => $_SESSION["id"],
];

$reservation = new Reservations($arr);
$reservation->ToString();


$is_ok = $reservation->save_dataBase();

if($is_ok){
    header('Location:./../view/MyresarvationUser.php');
}else{
    $reservation->ToString();

}
?>