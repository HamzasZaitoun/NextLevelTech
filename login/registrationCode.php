<?php
session_start();
include ('../includes/db_class.php');
include ('../includes/usersClass.php');

$user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submit"])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['conformpassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone_number'];

    if ($password !== $confirmPassword) {
        exit();
    }

    // تشفير كلمة المرور باستخدام الدالة password_hash
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // تسجيل المستخدم مع كلمة المرور المشفرة
    if ($user->register($firstName, $lastName, $email, $hashedPassword, $gender, $dob, $address, $phoneNumber)) {
        header("Location: login.php");
        exit();
    } else {
        echo "An error occurred while entering data.";
    }
}
?>
