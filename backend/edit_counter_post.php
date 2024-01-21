<?php

$edit_counter_id = $_POST['edit_counter_id'];
$counter_icon = $_POST['counter_icon'];
$counter_number = $_POST['counter_number'];
$counter_title = $_POST['counter_title'];
$counter_status = $_POST['counter_status'];

$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$counter_update_query = "UPDATE counters SET counter_icon='$counter_icon',counter_number='$counter_number',
counter_title='$counter_title',counter_status='$counter_status' WHERE counter_id='$edit_counter_id';";
$counter_update_final = mysqli_query($db_connect, $counter_update_query);
header('location:view_counter.php');

?>