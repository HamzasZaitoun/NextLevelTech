<?php
session_start();
include('../includes/db_class.php');
include ('../includes/usersClass.php');

$user = new User($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($user->login($email, $password)) {
        header("Location:../index.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid email or password."; 
        header("Location: login.php");
        exit();
    }
}
