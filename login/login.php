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

		.error-message {
			color: red;
			margin-bottom: 10px;
		}
	</style>
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1><img src="./images/5.png"> Gaming Login Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<?php
				if (isset($_GET['error'])) {
					echo '<p class="error-message">' . htmlspecialchars($_GET['error']) . '</p>';
				}
				?>

				<form action="./loginCode.php" method="POST">
					<input type="text" name="email" placeholder="Email..." required />
					<br><br>
					<input type="password" name="password" placeholder="Password..." required />
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