<?php
session_start();
$_SESSION["id_reservations"] = $_POST["res_id"];
header('Location:./../view/changeDate.php');

?>