<?php
include './../model/Upload.php';
include './../model/service.php';
require './../model/checkAuth.php';
$company = check_is_company();

$array_details = [
    "name" => $_POST['name'],
    "about" => $_POST['about'],
    "prix" => 0,
    "image" => upload_image($_FILES, "./../view/CreateService.php"),
    "id_company"=> $company->id,
];




$service = new Service($array_details);
$service->ToString();

$is_ok = $service->save_dataBase();

if($is_ok){
    echo "<script>alert('the service created.!');</script>";
    header('Location: ./../view/listOfService.php');
}else{
    echo "<script>alert('error.!'); window.location='./../view/CreateService.php'</script>";
}

?>