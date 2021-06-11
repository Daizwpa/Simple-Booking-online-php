<?php
require './../model/checkAuth.php';
require './../model/reservations.php';
$company = check_is_company();
$date = $_POST["date"];
$time = $_POST["time"];
$res_id = $_SESSION["id_reservations"];
$res = new Reservations();
$res->update($res_id, "time", $time);
$res->update($res_id, "date", $date);

header('Location:./../view/listReservations.php');

?>