<!DOCTYPE html>
<html>

<head>
    <title>Gaming Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        #li-login {
            color: #fff;
        }

        #li-login:hover {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="padding-all">
        <div class="header">
            <h1><img src="./images/5.png" alt=" "> Gaming Registration Form</h1>
        </div>

        <div class="design-w3l">
            <div class="mail-form-agile">
                <form action="./registrationCode.php" method="POST">
                    <input type="text" name="first_name" placeholder="First Name..." required />
                    <input type="text" name="last_name" placeholder="Last Name..." required /><br><br>
                    <label style="color: #fff;" for="gender">Gender:</label>
                    <select name="gender" id="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select><br><br>


                    <label style="color: #fff;" for="dob">Birth Day:</label>
                    <input type="date" name="dob" required />
                    <!-- <select aria-label="Day" name="birth_day" id="day" title="Day" class="_9407 _5dba _9hk6 _8esg"></select> -->


                    <input type="text" name="address" placeholder="Address..." required />
                    <input type="text" name="phone_number" placeholder="Phone Number..." required />
                    <input type="text" name="email" placeholder="Email..." required />
                    <input type="password" name="password" placeholder="Password..." required />
                    <input type="password" name="conformpassword" placeholder="Conform Password..." required />
                    <br><br>
                    <input type="submit" name="submit" value="submit">

                    <br><br>
                    <a id="li-login" href="./login.php">Do you have account click here !!</a>

                </form>
            </div>
            <div class="clear"> </div>
        </div>

        <div class="footer">
            <p>© 2024 Gaming Registration Form. All Rights Reserved | Design by <a href="#"> Group 5 </a></p>
        </div>
    </div>



</body>

<script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>

</html>