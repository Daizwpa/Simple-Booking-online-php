<?php
session_start();
$password = $_POST["mote"];
$email = $_POST["adress"];


include './../model/company.php';
$company = new Company();
$is_it = $company->loock_for($email, $password);

if($is_it){
    
    // Set session variables
    $_SESSION["id"] = $company->id;
    $_SESSION["type"] = "company";
    
    header('Location:./../view/DashBoordCompany.php');

}else{
    echo "<script>alert('incorrect email or password!'); window.location='./../view/LoginAsCompany.php'</script>";
    //header('Location:./../view/LoginAsCompany.php');
   
    
}
?>