<?php
session_start();
include('../includes/db_class.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $newPassword = trim($_POST['userpassword_new']);
    $confirmPassword = trim($_POST['userpassword_confirm']);

    $db = dbConnection::getInstence();
    $connect = $db->getConnection();

    $sql = "SELECT * FROM users WHERE user_email = :email";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($newPassword !== $confirmPassword) {
            $_SESSION['error'] = "The password does not match.";
            header("Location: forgotPassword.php");
            exit();
        }

        $sql = "UPDATE users SET user_password = :password WHERE user_email = :email";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':password', $newPassword);
        $stmt->bindParam(':email', $email);
        if ($stmt->execute()) {
            $_SESSION['success'] = "The password has been updated successfully.";
    header("Location: login.php");
    exit();

        } else {
            $_SESSION['error'] = "An error occurred while updating the password.";
        }
    } else {
        $_SESSION['error'] = "Invalid email.";
    }
    header("Location: forgotPassword.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Forget Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/registration.css">
    <style>
        a {
            color: #fff;
        }

        #li-regs:hover {
            color: dodgerblue;
        }
   

        #li-login:hover {
            color: dodgerblue;
        }
   

        .error {
            color: red;
            font-size: 0.9em;
        }
        .success {
            color: greenyellow;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="padding-all">
        <div class="header">
            <h1><img src="./images/5.png"> Gaming Forgot Password </h1>
        </div>

        <div class="design-w3l">
            <div class="mail-form-agile">
                <?php
                if (isset($_SESSION['error'])) {
                    echo '<p class="error">' . htmlspecialchars($_SESSION['error']) . '</p>';
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['success'])) {
                    echo '<p class="success">' . htmlspecialchars($_SESSION['success']) . '</p>';
                    unset($_SESSION['success']);
                }
                ?>

                <form method="POST">
                    <input type="text" name="email" placeholder="Email"required>
                    <input type="password" name="userpassword_new" placeholder="Password" required>
                    <input type="password" name="userpassword_confirm" placeholder="Confirm Password" required>
                    <br><br>
                    <input type="submit" value="Save">
                    <br><br>
                    <a id="li-regs" href="./registration.php">Create a new account</a>
                   <br><br>
                   <a  href="./login.php">Do you have an account!<samp id="li-login"> Click here!</samp></a>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer">
            <p>© 2024 Gaming Login form. All Rights Reserved | Design by <a href="#">Group 5</a></p>
        </div>
    </div>

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</body>

</html>