<?php
require 'connect.php';

if (isset($_POST["submit"])) {

    $name = !empty($_POST['name']) ? $_POST['name'] : null;
    $email = !empty($_POST['email']) ? $_POST['email'] : null;
    $password = !empty($_POST['password']) ? $_POST['password'] : null;

    if ($name && $email && $password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO db (user_name, user_email, password) VALUES (?, ?, ?)";

        $stmt = mysqli_stmt_init($connect);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashed_password);

            if (mysqli_stmt_execute($stmt)) {
                header("Location: detalis.php");
                exit();
            } else {
                echo "An error occurred while entering data.";
            }
        } else {
            echo "An error occurred while preparing the statement.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #4646fa;
        }

        form {
            padding: 20px;
            margin: 20px;
            width: 450px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <form action="" method="POST">
        <h1>Registration</h1>
        <div class="mb-3">
            <label for="exampleInputFullName1" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        <a href="./login.php">Do you have account click here</a>
    </form>

</body>
<script src="./js/bootstrap.js"></script>

</html>