<?php session_start();
$connect = mysqli_connect('localhost', 'root', '', 'finalproject');

if (!$connect) {
	die('not connected');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>user</title>
	<link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<div class="wrap">
		<div class="header">
			<div class="logo"><img src="../RAP img/Asset 1.png" alt="logo"></div>
			<div class="se">
				<input type="search" name="search">
				<button type="submit"><img src="../RAP img/search-interface-symbol.png" alt="search"></button>
			</div>
			<div class="log">
				<p><b><?php if (isset($_SESSION['rap_name'])) {
							$num = $_SESSION['rap_id'];

							$select = "SELECT * FROM `rapture` WHERE `rap_id` = '$num'";
							$select_query = mysqli_query($connect, $select);

							while ($row = mysqli_fetch_assoc($select_query)) {
								$id = $row['rap_id'];
								$name = $row['rap_name'];

								echo 'Hi, ' . ucfirst($name);
							}
						}
						?></b></p>
				<a href="index.php"><img src="../RAP img/user.png" alt="log"></a>
			</div>
		</div>
		<div class="nav">
			<div class="locic"><a href="index.php"><img src="../RAP img/location.png" alt="loca"></a></div>
			<div class="loc">
				<?php
				if (isset($_SESSION['rap_name'])) {
					$num = $_SESSION['rap_id'];
					$add = $_SESSION['rap_add'];

					$select = "SELECT * FROM `rapture` WHERE `rap_id` = '$num'";
					$select_query = mysqli_query($connect, $select);

					while ($row = mysqli_fetch_assoc($select_query)) {
						$id = $row['rap_id'];
						$local = $row['rap_add'];

						echo ucfirst($local);

						if(empty($local)){
							echo ucfirst('select city');
						}
					}
				}
				?>
			</div>
			<div class="loca">
				<ul>
					<li><a href="../main/index.php"><b>HOME</b></a></li>
					<li><a href="../Movies/index.php"><b>MOVIES</b></a></li>
					<li><a href="../Ratings/index.php"><b>RATINGS</b></a></li>
					<li><a href="../Events/index.php"><b>EVENTS</b></a></li>
					<li><a href="../food/index.php"><b>FOOD</b></a></li>
				</ul>
			</div>
		</div>
		<?php
		if (isset($_SESSION['rap_name'])) {
			$num = $_SESSION['rap_id'];

			$select = "SELECT * FROM `rapture` WHERE `rap_id` = '$num'";
			$select_query = mysqli_query($connect, $select);

			while ($row = mysqli_fetch_assoc($select_query)) {
				$id = $row['rap_id'];
				$name = $row['rap_name'];
				$pass = $row['rap_pass'];
				$conf = $row['rap_conf'];
				$img = $row['rap_img'];
				$phn = $row['rap_phn'];
				$add = $row['rap_add'];
				$email = $row['rap_email'];
		?>
				<div class="content">
					<div class="user">
						<div class="head">
							<h2><?php
								if (isset($_SESSION['rap_name'])) {
									$num = $_SESSION['rap_id'];

									$select = "SELECT * FROM `rapture` WHERE `rap_id` = '$num'";
									$select_query = mysqli_query($connect, $select);

									while ($row = mysqli_fetch_assoc($select_query)) {
										$id = $row['rap_id'];
										$name = $row['rap_name'];

										echo 'Hi, ' . ucfirst($name);
									}
								}
								?></h2>
							<a href="../Log out/index.php"><button type="submit" class="out">LOG OUT</button></a>
						</div>
						<div class="middle">
							<form action="index.php" method="POST">
								<div class="first">
									<label for="one">Name</label><br>
									<input type="text" value="<?php echo $name; ?>" name="name" id="one" />
								</div>
								<div class="second">
									<label for="two">Mobile no</label><br>
									<input type="tel" value="<?php echo $phn; ?>" name="phn" id="two" pattern="[789][0-9]{9}" />
								</div>
								<div class="third">
									<label for="three">email</label><br>
									<input type="email" value="<?php echo $email; ?>" name="mail" id="three" />
								</div>
								<div class="fourth">
									<label for="four">password</label><br>
									<input type="password" value="<?php echo $pass; ?>" name="pass" id="four" />
								</div>
								<div class="fifth">
									<label for="five">Confirm password</label>
									<input type="password" value="<?php echo $conf; ?>" name="conf" id="five" />
								</div>
								<div class="sixth">
									<label for="six">Location</label><br>
									<select name="local" id="six">
										<option value="">choose location</option>
										<option value="Chennai">Chennai</option>
										<option value="Hyderabad">Hyderabad</option>
										<option value="Bengaluru">Bengaluru</option>
										<option value="Mumbai">Mumbai</option>
										<option value="Delhi">Delhi</option>
									</select>
								</div>
								<button type="submit" class="btn" name="update">Update</button>
							</form>
					<?php }
			}
					?>
					<?php
					if (isset($_POST['update'])) {
						$new_name = $_POST['name'];
						$new_phn = $_POST['phn'];
						$new_mail = $_POST['mail'];
						$new_pass = $_POST['pass'];
						$new_conf = $_POST['conf'];
						$new_local = $_POST['local'];

						$update = "UPDATE `rapture` SET `rap_name`='$new_name',`rap_email`='$new_mail',`rap_pass`='$new_pass',`rap_conf`='$new_conf',`rap_phn`='$new_phn',`rap_add`='$new_local' WHERE `rap_name` = '$name'";
						$update_query = mysqli_query($connect, $update);

						if ($update_query) {
							echo '<div class="correct">
		                        <h4>Successfully Updated ✅</h4>
		                         </div>';
						}
					}
					?>
						</div>
					</div>
				</div>
	</div>
	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
		$("div.correct").hide().slideDown(300);
	</script>
</body>

</html>