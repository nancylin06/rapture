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
	<title>Events</title>
	<link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b311425060.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<div class="wrap">
		<div class="header">
			<div class="logo"><img src="../RAP img/Asset 1.png" alt="logo"></div>
			<div class="se">
				<input type="search" name="search">
				<button type="submit"><a href="#"><img src="../RAP img/search-interface-symbol.png" alt="search"></a></button>
			</div>
			<div class="log">
				<p><b><?php
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
						?></b></p>
				<a href="../user/index.php"><img src="../RAP img/user.png" alt="log"></a>
			</div>
		</div>
		<div class="nav">
			<div class="locic"><a href="../user/index.php"><img src="../RAP img/location.png" alt="loca"></a></div>
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

						if (empty($local)) {
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
					<li><a href="index.php"><b>EVENTS</b></a></li>
					<li><a href="../food/index.php"><b>FOOD</b></a></li>
				</ul>
			</div>
		</div>
		<!--
	<div class="banner">
		<img src="../RAP img/Uncharted.jpg" alt="banner">
		<button class="ar"><img src="../RAP img/back.png" alt="arrow"></button>
		<button class="arr"><img src="../RAP img/whiteee.png" alt="arrow"></button>
	</div>
-->
		<div class="content">
			<div class="parta">
				<h3>Events</h3>
				<div class="filter">
					<b>
						<p>Filters</p>
					</b>
					<button class="fill" type="submit"><a href="#"><img src="../RAP img/filter.png" alt="filter"></a></button>
					<div class="new">
						<ul>
							<li><b>language</b></li>
							<li><b>categories</b></li>
							<li><b>streaming</b></li>
							<li><b>price</b></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="partz">
				<div class="boxa">
					<img src="../RAP img/MV5BYmE4ZTIyZDAtZTgxZi00MjYwLWI2ZWQtYzJiYWMxMWIyMjJkXkEyXkFqcGdeQXVyMzc1MDM1ODA@._V1_FMjpg_UX1000_.jpg" alt="arrahman">
					<p><b>A.R RAHMAN CONCERT<br>IS HERE</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxb">
					<img src="../RAP img/5cd27b1e3e9c06194f491bc01c6f7d4e.jpg" alt="arrahman">
					<p><b>TALENT HUNT VOCAL<br>INSTRUMENTAL</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxc">
					<img src="../RAP img/18092020053148_Grand-Outdoor-Catering-Innr-Banner.jpg" alt="arrahman">
					<p><b>grand outdoors<br>food party</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="box1">
					<img src="../RAP img/0c98e77eca75c3ace2e93a27961912ee.png" alt="arrahman">
					<p><b>digital marketing<br>meet up</b><br>
						<a href="#">view more</a>
					</p>
				</div>
			</div>
			<div class="partb">
				<div class="boxe">
					<img src="../RAP img/10062022132646120_eve.jpg" alt="arrahman">
					<p><b>Palladium food<br>festival</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxf">
					<img src="../RAP img/FU36xECaMAAndWf.jpg" alt="arrahman">
					<p><b>korean film<br>festival</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxg">
					<img src="../RAP img/POSTER (1mb)-2020010105.jpg" alt="arrahman">
					<p><b>srm's gaming<br>events</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="box2">
					<img src="../RAP img/112a39f4-2d97-44aa-ae3a-0e95a60abbce.png" alt="arrahman">
					<p><b>community<br>picnic</b><br>
						<a href="#">view more</a>
					</p>
				</div>
			</div>
			<div class="partd">
				<div class="boxd">
					<img src="../RAP img/thumb629f531f17ab0.jpg" alt="arrahman">
					<p><b>uncalled knacks<br>open mic</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxj">
					<img src="../RAP img/spectrum-2022.jpg" alt="arrahman">
					<p><b>spectrum 2022<br>is here</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxk">
					<img src="../RAP img/146_1632731086_14df0c53cbc7ee6c8847c3e2ea6a7e42.jpeg" alt="arrahman">
					<p><b>navratri 2022<br>celebration</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="box3">
					<img src="../RAP img/bbb21f8e-3b64-4df3-8d16-65d9bc6b07c3.png" alt="arrahman">
					<p><b>young scholars<br>gala</b><br>
						<a href="#">view more</a>
					</p>
				</div>
			</div>
			<div class="partc">
				<h3>online events</h3>
				<div class="boxh">
					<img src="../RAP img/Screenshot-2022-05-18-at-18.31.41.jpg" alt="arrahman">
					<p><b>sandbox launch<br>event</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxi">
					<img src="../RAP img/Members-online-exhibition-poster.jpg" alt="arrahman">
					<p><b>members online<br>exhibition</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="boxk">
					<img src="../RAP img/27a522c9-9550-4d78-a437-bd2292934f2f.png" alt="arrahman">
					<p><b>digital marketing<br>meet up</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="box4">
					<img src="../RAP img/PO-0049.png" alt="arrahman">
					<p><b>music festival<br>online</b><br>
						<a href="#">view more</a>
					</p>
				</div>
				<div class="chat"><a href="#"><img src="../RAP img/chat icon-01.png" alt="chat"></a></div>
			</div>
		</div>
		<div class="footer">
			<div class="foota">
				<h2>QUICK LINKS</h2>
				<ul>
					<li><b><a href="#">ABOUT US</a></b></li>
					<li><b><a href="#">feedback</a></b></li>
					<li><b><a href="#">register</a></b></li>
					<li><b><a href="#">LOG IN</a></b></li>
					<li><b><a href="#">FAQ</a></b></li>
					<li><b><a href="#">HELP</a></b></li>
				</ul>
			</div>
			<div class="footb">
				<h2>browse all</h2>
				<ul>
					<li><b><a href="#">blog</a></b></li>
					<li><b><a href="#">theatres</a></b></li>
					<li><b><a href="#">movies</a></b></li>
					<li><b><a href="#">trending</a></b></li>
					<li><b><a href="#">events</a></b></li>
					<li><b><a href="#">coming soon</a></b></li>
				</ul>
			</div>
			<div class="footc">
				<h2>SUBSCRIBE </h2><br>
				<div class="mail">
					<form action="index.php" method="POST">
						<label>
							<input type="email" name="email">
						</label>
						<button type="submit" name="sub"><img src="../RAP img/mail-01.png" alt="email"></button>
					</form>
					<?php
					if (isset($_POST['sub'])) {
						$big_name = $_SESSION['rap_name'];
						$sub_mail = $_POST['email'];

						$update = "UPDATE `rapture` SET `rap_subs` = '$sub_mail' WHERE `rap_name` = '$big_name'";
						$update_query = mysqli_query($connect, $update);

						if ($update_query) {
							echo '<span class="coggy" style="display:none" ><i class="fa-solid fa-circle-check fa-shake tick aria-hidden="true"></i></span>';
						}
					}
					?>
				</div>
				<div class="h2">
					<h2>follow us </h2>
				</div>
				<ul>
					<li><a href="#"><img class="fb" src="../RAP img/facebook-app-symbol.png" alt="fb"></a></li>
					<li><a href="#"><img class="you" src="../RAP img/you-01.png" alt="fb"></a></li>
					<li><a href="#"><img class="twitter" src="../RAP img/new twt-01.png" alt="fb"></a></li>
					<li><a href="#"><img class="insta" src="../RAP img/instagram.png" alt="fb"></a></li>
				</ul>
			</div>
			<div class="footd">
				<h2>CUSTOMER CARE</h2><br>
				<button type="submit"><a href="#"><img src="../RAP img/customer-01.png" alt="customer"></a></button>
			</div>
			<p>COPYRIGHTS &copy; <?php echo date('Y') ?> RAPTURE MOVIES PRIVATE LIMITED</p>
		</div>
	</div>
</body>
<script>
	$(".coggy").fadeIn(900);
	$(".coggy").fadeOut(1000);
</script>

</html>