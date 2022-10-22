<?php session_start();
$connect = mysqli_connect('localhost', 'root', '', 'finalproject');

if (!$connect) {
	echo "<h4 style='color:green;'>not connected</h4>";
}
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>log in</title>
	<link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b311425060.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<div class="wrap">
		<div class="content">
			<div class="box">
				<div class="logo"><img src="../RAP img/Asset 1.png" alt="logo"></div>
				<div class="log">
					<h3>log in</h3>
				</div>
				<a href="../sign up/index.php">
					<div class="sign">
						<h3>sign up</h3>
					</div>
				</a>
				<form method="POST" action="index.php">
					<label id="two">email :</label>
					<div class="boxa">
						<input type="email" placeholder="Enter your e-mail" name="mail" required for="two">
						<i class="fa-solid fa-envelope enve"></i>
					</div>
					<label id="one">Password :</label>
					<div class="boxb">
						<input type="password" placeholder="Password" name="pass" required for="one">
						<i class="fa-solid fa-lock enve"></i>
					</div>
					<a href="" class="forget">Forget password?</a>
					<button type="submit" name="btn"><b>sign in</b></button>
				</form>
				<?php
				if (isset($_POST['btn'])) {
					$mail = $_POST['mail'];
					$pass = $_POST['pass'];

					$select = "SELECT * FROM `rapture` WHERE `rap_email` = '$mail' OR `rap_pass` = '$pass'";
					$select_query = mysqli_query($connect, $select);

					while ($row = mysqli_fetch_assoc($select_query)) {
						$log_name = $row['rap_name'];
						$log_email = $row['rap_email'];
						$log_pass = $row['rap_pass'];
						$log_id = $row['rap_id'];
						$log_add = $row['rap_add'];
					}

					if ($mail == $log_email && $pass == $log_pass) {
						header('location:../main/index.php');
						$_SESSION['rap_name'] = $log_name;
						$_SESSION['rap_id'] = $log_id;
						$_SESSION['rap_add'] = $log_add;
					} else {
						echo '<div class="failed">
						<h4>Sign in Failed!</h4>
						</div>';
					}
				}
				?>
			</div>
		</div>
	</div>
	<script>
		$("div.failed").hide().slideDown(300);

		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
</body>

</html>