<?php

header("Content-Type:application/json");
include('./../model/service.php');


if (isset($_GET['keyword']) && $_GET['keyword']!="") {
    $keyword = $_GET["keyword"];
	$service = new Service();
    $data = $service->search($keyword);
	$response["status"] = "true";	
	$response["message"] = "result";
	$response["data"] = $data;
	
} else{
	$response["status"] = "false";
	$response["message"] = "No customer(s) found!";
}
echo json_encode($response);
exit;

?>