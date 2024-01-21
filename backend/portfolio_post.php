<?php

session_start();
$portfolio_category = $_POST['portfolio_category'];
$portfolio_title = $_POST['portfolio_title'];

$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$portfolio_insert_query = "INSERT INTO portfolios (portfolio_category, portfolio_title) VALUES ('$portfolio_category','$portfolio_title')";
$portfolio_insert_final = mysqli_query($db_connect, $portfolio_insert_query);

// Portfolio Image Insert Code

$add_portfolio_id = mysqli_insert_id($db_connect);
$portfolio_photo_name = $_FILES['portfolio_photo']['name'];
$after_explode = explode('.', $portfolio_photo_name);
$file_name_extension = end($after_explode);
$new_name = $add_portfolio_id.".".$file_name_extension;
$old_location = $_FILES['portfolio_photo']['tmp_name'];
$new_location = "../assets/backend2/portfolio_photos/".$new_name;
move_uploaded_file($old_location, $new_location);
$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$portfolio_photo_update_query = "UPDATE portfolios SET portfolio_photo='$new_name' WHERE portfolio_id=$add_portfolio_id;";
$name_update_final = mysqli_query($db_connect, $portfolio_photo_update_query);
$_SESSION['add_portfolio_success'] = "Portfolio Successfully Added";
header('location:portfolio.php');

?>