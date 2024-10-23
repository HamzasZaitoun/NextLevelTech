<?php
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];




    $sql = "SELECT `user_email`,`user_password` FROM `users` where user_email=:user_email";
    $stmt = $connect->prepare($sql);

    $stmt->bindParam('user_email', $email);

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        if ($password == $row['user_password']) {
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_password'] = $row['user_password'];

            header("location: https://www.facebook.com/");
        } else {
            $loginError = 'Invalid email or password.';
            header("location: https://www.google.com/");
        }
    }
}
?>