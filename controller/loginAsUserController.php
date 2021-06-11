<?php
session_start();
$password = $_POST["mote"];
$email = $_POST["adress"];



include './../model/user.php';
$user = new User();
$is_it = $user->loock_for($email, $password);

if($is_it){
    
    // Set session variables
    $_SESSION["id"] = $user->id;
    $_SESSION["type"] = "user";
    header('Location:./../view/DashBoordUser.php');

}else{
    echo "<script>alert('incorrect email or password!'); window.location='./../view/LoginAsUser.php'</script>";
    die();

}

?>