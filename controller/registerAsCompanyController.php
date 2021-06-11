<?php
include './../model/Upload.php';
include './../model/company.php';
session_start();
$arrayDetails = [
    "name" => $_POST["name"],
    "email" => $_POST["adress"],
    "motepass" => $_POST["mote"],
    "phone" => $_POST["phone"],
    "about" => $_POST["about"],
    "image" => upload_image($_FILES, "./../view/signCompany.php"),
];



$company = new Company($arrayDetails);

$is_done = $company->save_dataBase();

if($is_done){
    // Set session variables
    $_SESSION["id"] = $company->id;
    $_SESSION["type"] = "company";

     
    header('Location:./../view/DashBoordCompany.php');

}else{
    "<script>alert('error.!'); window.location='/../view/signCompany.php'</script>";
}

?>