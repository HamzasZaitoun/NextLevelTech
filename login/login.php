<!DOCTYPE html>
<html>
<head>
    <title>Gaming Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/registration.css">
    <style>
        #li-regs {
            color: #fff;
        }

        #li-regs:hover {
            color: blue;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
    <script>
        function validateForm() {
            let isValid = true;

            const email = document.forms["loginForm"]["email"];
            const password = document.forms["loginForm"]["password"];

            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            if (!email.value) {
                document.getElementById('emailError').textContent = "Please enter a valid email.";
                isValid = false;
            }

            if (!password.value) {
                document.getElementById('passwordError').textContent = "Password error.";
                isValid = false;
            }

            return isValid;
        }
    </script>

</head>
<body>
    <div class="padding-all">
        <div class="header">
            <h1><img src="./images/5.png"> Gaming Login Form</h1>
        </div>

        <div class="design-w3l">
            <div class="mail-form-agile">
                <?php
                session_start(); 
                if (isset($_SESSION['error'])) {
                    echo '<p class="error">' . htmlspecialchars($_SESSION['error']) . '</p>'; 
                    unset($_SESSION['error']); 
                }
                ?>

                <form name="loginForm" onsubmit="return validateForm()" action="./loginCode.php" method="POST">
                    <input type="text" name="email" placeholder="Email..." required />
                    <p id="emailError" class="error"></p>

                    <br><br>
                    <input type="password" name="password" placeholder="Password..." required />
                    <p id="passwordError" class="error"></p>

                    <br><br>
                    <input type="submit" name="login" value="Login"><br><br>

                    <a id="li-regs" href="./registration.php">Create a new account</a>
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
