<?php
session_start();
$_SESSION["id_service"] = $_POST["id_service"];
header('Location:./../view/createBooking.php');

?>