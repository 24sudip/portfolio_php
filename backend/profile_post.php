<?php
session_start();
// Name Change
if (isset($_POST['name_change'])) {
    $name = $_POST['name'];
    $id = $_SESSION['login_id'];
    $db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
    $name_update_query = "UPDATE users SET name='$name' WHERE id=$id;";
    $name_update_final = mysqli_query($db_connect, $name_update_query);
    $_SESSION['login_name'] = $name;
    header('location:profile.php');
}
// Profile Photo 
if (isset($_POST['profile_photo_btn'])) {
    $id = $_SESSION['login_id'];
    $photo_name = $_FILES['profile_photo']['name'];
    $after_explode = explode('.', $photo_name);
    $file_name_extension = end($after_explode);
    $new_name = $id.".".$file_name_extension;
    $old_location = $_FILES['profile_photo']['tmp_name'];
    $new_location = "../assets/backend2/profile_photos/".$new_name;
    move_uploaded_file($old_location, $new_location);
    $db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
    $profile_photo_update_query = "UPDATE users SET default_profile_photo='$new_name' WHERE id=$id;";
    $name_update_final = mysqli_query($db_connect, $profile_photo_update_query);
    header('location:profile.php');
}

?>