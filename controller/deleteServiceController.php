<?php
include './../model/service.php';
$id = $_POST["serice_id"];
$service = new Service();
$is_delete = $service->delete($id);
if($is_delete){
    header('Location: ./../view/listOfService.php');
}else{
echo "error ";
}

?>