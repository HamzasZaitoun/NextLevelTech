<!DOCTYPE html>
<html>

<head>
    <title>Gaming Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/registration.css">

</head>

<body>
    <div class="padding-all">
        <div class="header">
            <h1><img src="./images/5.png" alt=" "> Gaming Registration Form</h1>
        </div>

        <div class="design-w3l">
            <div class="mail-form-agile">
                <form action="./registrationCode.php" method="POST">
                    <div class="form-row">
                        <input type="text" name="first_name" placeholder="First Name..." required />
                        <input type="text" name="last_name" placeholder="Last Name..." required />
                    </div>

                    <div class="gender-dob-container">
                        <label for="gender" class="styled-label">Gender :</label>
                        <select name="gender" id="gender" class="styled-gender-select">
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                        <br><br>
                        <label for="dob" class="styled-label">Birth Day :</label>
                        <div class="dob-container">
                            <select name="day" class="styled-dob-select" required>
                                <option value="">Day</option>
                                <?php
                                for ($day = 1; $day <= 31; $day++) {
                                    echo "<option value='$day'>$day</option>";
                                }
                                ?>
                            </select>

                            <select name="month" class="styled-dob-select" required>
                                <option value="">Month</option>
                                <?php
                                for ($month = 1; $month <= 12; $month++) {
                                    echo "<option value='$month'>$month</option>";
                                }
                                ?>
                            </select>

                            <select name="year" class="styled-dob-select" required>
                                <option value="">Year</option>
                                <?php
                                $currentYear = date("Y");
                                for ($year = $currentYear; $year >= 1900; $year--) {
                                    echo "<option value='$year'>$year</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <input type="text" name="address" placeholder="Address..." required />
                        <input type="text" name="phone_number" placeholder="Phone Number..." required />
                    </div>
                    <div class="form-row">
                        <input type="text" name="email" placeholder="Email..." required />
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" placeholder="Password..." required />
                        <input type="password" name="conformpassword" placeholder="Confirm Password..." required />
                    </div>

                    <br><br>
                    <input type="submit" name="submit" value="Submit">
                    <br><br>
                    <a id="li-login" href="./login.php">Do you have account? Click here!!</a>

                </form>
            </div>
            <div class="clear"> </div>
        </div>

        <div class="footer">
            <p>© 2024 Gaming Registration Form. All Rights Reserved | Design by <a href="#"> Group 5 </a></p>
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