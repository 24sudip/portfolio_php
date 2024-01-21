<?php

$id = $_POST['id'];
$service_title = $_POST['service_title'];
$service_description = $_POST['service_description'];
$service_icon = $_POST['service_icon'];
$service_status = $_POST['service_status'];

$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$service_update_query = "UPDATE services SET service_title='$service_title',service_description='$service_description',
service_icon='$service_icon',service_status='$service_status' WHERE id='$id';";
$service_update_final = mysqli_query($db_connect, $service_update_query);
header('location:view_service.php');

?>