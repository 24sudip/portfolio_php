<?php

$counter_icon = $_POST['counter_icon'];
$counter_number = $_POST['counter_number'];
$counter_title = $_POST['counter_title'];
$counter_status = $_POST['counter_status'];

$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$counter_insert_quary = "INSERT INTO counters (counter_icon, counter_number, counter_title, counter_status) 
VALUES ('$counter_icon', '$counter_number', '$counter_title', '$counter_status');";
$counter_after_query = mysqli_query($db_connect, $counter_insert_quary);
header('location:add_counter.php');

?>