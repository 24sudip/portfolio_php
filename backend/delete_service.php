<?php

$id = $_GET['id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$service_delete_query = "DELETE FROM services WHERE id = $id;";
$service_delete_final = mysqli_query($db_connect, $service_delete_query);
header('location:view_service.php');

?>