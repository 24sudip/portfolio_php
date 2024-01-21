<?php

$delete_counter_id = $_GET['view_counter_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$counter_delete_query = "DELETE FROM counters WHERE counter_id = $delete_counter_id;";
$counter_delete_final = mysqli_query($db_connect, $counter_delete_query);
header('location:view_counter.php');

?>