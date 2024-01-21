<?php

$service_title = $_POST['service_title'];
$service_description = $_POST['service_description'];
$service_icon = $_POST['service_icon'];
$service_status = $_POST['service_status'];

$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$service_insert_quary = "INSERT INTO services (service_title, service_description, service_icon, service_status) 
VALUES ('$service_title', '$service_description', '$service_icon', '$service_status');";
mysqli_query($db_connect, $service_insert_quary);
header('location:add_service.php');

?>