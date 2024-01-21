<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);

if ($name) {
    $_SESSION['old_name'] = $name;
}
else {
    $_SESSION['name_error'] = "Name Is Required";
    $flag = true;
}
if ($email) {
    $_SESSION['old_email'] = $email;
}
else {
    $_SESSION['email_error'] = "Email Is Required";
    $flag = true;
}
if ($password) {
    $_SESSION['old_password'] = $password;
}
else {
    $_SESSION['password_error'] = "Password Is Required";
    $flag = true;
}
if ($confirm_password) {
    $_SESSION['old_confirm_password'] = $confirm_password;
}
else {
    $_SESSION['confirm_password_error'] = "Confirm Password Is Required";
    $flag = true;
}
if ($password != $confirm_password) {
    $_SESSION['match_password_error'] = "Password and Confirm Password Not Matched";
    $flag = true;
}
else {
    if ($preg_maa != 1) {
        $_SESSION['preg_maa_error'] = "Your Password Should Be Capital, Small, No, SC, Min 8, Max 20";
        $flag = true;
    }
}
if ($flag) {
    header('location: signup.php');
}
else {
    $en_password = md5($password);
    $db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
    $user_insert_quary = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$en_password')";
    mysqli_query($db_connect, $user_insert_quary);
    $_SESSION['login_success'] = "$name Registration Successfully Done";
    $_SESSION['login_email'] = "$email";
    header('location:login.php');
}

?>