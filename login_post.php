<?php
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);

$db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
$select_count_quary = "SELECT COUNT(*) AS 'result' FROM users WHERE email = '$email' AND password = '$password';";
$count_final = mysqli_query($db_connect, $select_count_quary);
$after_assoc = mysqli_fetch_assoc($count_final)['result'];

if ($after_assoc == 1) {
    $select_find_quary = "SELECT id, name FROM users WHERE email = '$email';";
    $find_final = mysqli_query($db_connect, $select_find_quary);
    $after_assoc_find = mysqli_fetch_assoc($find_final);
    $_SESSION['login_email'] = $email;
    $_SESSION['login_name'] = $after_assoc_find['name'];
    $_SESSION['login_id'] = $after_assoc_find['id'];
    header('location: backend/dashboard.php');
}
else {
    $_SESSION['login_error'] = 'Your Email & Password Not Match';
    header('location: login.php');
}

?>