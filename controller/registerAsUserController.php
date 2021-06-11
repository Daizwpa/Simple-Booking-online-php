<?php
session_start();
include './../model/Upload.php';
include './../model/user.php';

$arrayDetails = [
    "name" => $_POST["name"],
    "last_name" => $_POST["last_name"],
    "email" => $_POST["adress"],
    "motepass" => $_POST["mote"],
    "phone" => $_POST["phone"],  
    "image" => upload_image($_FILES, "./../view/signUser.php"),
];


$user = new User($arrayDetails);

$is_done = $user->save_dataBase();

if($is_done){
    // Set session variables
    $_SESSION["id"] = $user->id;
    $_SESSION["type"] = "user";
     
    header('Location:./../view/DashBoordUser.php');

}else{
    "<script>alert('error.!'); window.location='/../view/signUser.php'</script>";
}

?>