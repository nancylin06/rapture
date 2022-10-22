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
	<title>Ratings</title>
	<link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b311425060.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<style>
		.swiper {
			width: 100%;
			height: 100%;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}

		.swiper-slide img {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.swiper-button-next {
			color: white;
		}

		.swiper-button-prev {
			color: white;
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="header">
			<div class="logo"><img src="../RAP img/Asset 1.png" alt="logo"></div>
			<div class="se">
				<input type="search" name="search">
				<button type="submit"><a href=""><img src="../RAP img/search-interface-symbol.png" alt="search"></a></button>
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
					<li><a href="index.php"><b>RATINGS</b></a></li>
					<li><a href="../Events/index.php"><b>EVENTS</b></a></li>
					<li><a href="../food/index.php"><b>FOOD</b></a></li>
				</ul>
			</div>
		</div>
		<div class="banner">
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="../RAP img/05f2670f-0806-4d80-8fdb-483071f8b9fe.png" alt="banner">
					</div>
					<div class="swiper-slide"><img src="../RAP img/Mahesh_Babu_Sarkaru_Vaari_Paat.jpg" alt="banner">
					</div>
					<div class="swiper-slide"><img src="../RAP img/Uncharted.jpg" alt="banner"></div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
		<div class="content">
			<div class="partz">
				<h3>top picks</h3>
			</div>
			<div class="parta">
				<div class="one"><a href="#">
						<div class="boxa">
							<img src="../RAP img/MV5BYjVkMjMxMmYtYjQ3YS00MGQwLWI4OWQtMmFlYTIxNGIyZDU2XkEyXkFqcGdeQXVyMTUwMjU3NzI4._V1_.jpg" alt="badguys">
							<p><b>the bad guys</b></p>
						</div>
						<div class="icon"><img src="../RAP img/star.png" alt="rating">
							<p>9.5</p>
						</div>
						<div class="ico"><img src="../RAP img/star (1).png" alt="rate"></div>
						<div class="text">
							<p>A crackerjack<br>criminal crew <br>of animal<br>outlaws are<br>about to attempt..</p>
						</div>
						<div class="view"><small>
								<p><a href="#">view more</a></p>
							</small></div>
					</a>
				</div>

				<div class="two">
					<div class="boxb">
						<img src="../RAP img/71p-N52eLzL._AC_SL1200_.jpg" alt="badguys">
						<p><b>sonic 2</b></p>
					</div>
					<div class="iconn"><img src="../RAP img/star.png" alt="rating">
						<p>9.6</p>
					</div>
					<div class="icoo"><img src="../RAP img/star (1).png" alt="rate"></div>
					<div class="txt">
						<p>When Doctor Robotnik<br>(Jim Carrey) returns to<br>carry out another<br>nefarious plan,Sonic
							<br>and his ally Tails<br> vow to stop him..
						</p>
					</div>
					<div class="vieww"><small>
							<p><a href="#">view more</a></p>
						</small></div>
				</div>

				<div class="three"><a href="#">
						<div class="boxc">
							<img src="../RAP img/secrets-of-dumbledore-poster-3.jpg" alt="dumbledore">
							<p><b>dumbledore</b></p>
						</div>
						<div class="iconnn"><img src="../RAP img/star.png" alt="rating">
							<p>9.1</p>
						</div>
						<div class="icooo"><img src="../RAP img/star (1).png" alt="rate"></div>
						<div class="txtt">
							<p>Albus Dumbledore<br>gathers a ragtag<br>group of wizards<br>and witches to<br>stand
								against..</p>
						</div>
						<div class="viewww"><small>
								<p><a href="#">view more</a></p>
							</small></div>
					</a>
				</div>
			</div>
			<div class="partx">
				<h3>in theatres</h3>
				<button class="arrowa" type="submit"><img src="../RAP img/back.png" alt="arrow"></button>
				<button class="arrowb" type="submit"><img src="../RAP img/whiteee.png" alt="arrow"></button>
			</div>

			<div class="partc">
				<div class="boxd"><img src="../RAP img/FR_-O5qVIAQ9RBp.png" alt="poster">
					<div class="txtd">
						<p><b>lightyear</b></p>
					</div>
					<div class="icond"><img src="../RAP img/star.png" alt="rating">
						<p>8.1</p>
					</div>
					<button class="yellowd" type="submit"><b>BOOK</b></button>
				</div>
				<div class="boxe"><img src="../RAP img/Top-Gun-Rogue-Nation-Style.png" alt="poster">
					<div class="txte">
						<p><b>top-gun</b></p>
					</div>
					<div class="icone"><img src="../RAP img/star.png" alt="rating">
						<p>7.8</p>
					</div>
					<button class="yellowe" type="submit"><b>BOOK</b></button>
				</div>
				<div class="boxf"><img src="../RAP img/Adivi-Sesh-Major-first-look-poster-HD.jpg" alt="poster">
					<div class="txtf">
						<p><b>major</b></p>
					</div>
					<div class="iconf"><img src="../RAP img/star.png" alt="rating">
						<p>7.9</p>
					</div>
					<button class="yellowf" type="submit"><b>BOOK</b></button>
				</div>
				<div class="boxg"><img src="../RAP img/MV5BOGEyZWQ2ZjYtNjdmMy00OWIxLWEwOGUtMjkyZGNhMTA5NWJiXkEyXkFqcGdeQXVyMTM1OTU1MzQx._V1_.jpg" alt="poster">
					<div class="txtg">
						<p><b>vikram</b></p>
					</div>
					<div class="icong"><img src="../RAP img/star.png" alt="rating">
						<p>8.5</p>
					</div>
					<button class="yellowg" type="submit"><b>BOOK</b></button>
				</div>
			</div>

			<div class="party">
				<h3>fan favourite</h3>
				<button class="arrowa" type="submit"><img src="../RAP img/back.png" alt="arrow"></button>
				<button class="arrowb" type="submit"><img src="../RAP img/whiteee.png" alt="arrow"></button>
			</div>

			<div class="partd">
				<div class="boxh"><img src="../RAP img/FGp5EBXXwAEt66R.webp" alt="poster">
					<div class="txth">
						<p><b>uncharted</b></p>
					</div>
					<div class="iconh"><img src="../RAP img/star.png" alt="rating">
						<p>7.2</p>
					</div>
					<button class="icoh" type="submit"><img src="../RAP img/star (1).png" alt="rate"></button>
				</div>
				<div class="boxi"><img src="../RAP img/snh_online_6072x9000_posed_01.jpg" alt="poster">
					<div class="txti">
						<p><b>spiderman </b></p>
					</div>
					<div class="iconi"><img src="../RAP img/star.png" alt="rating">
						<p>9.1</p>
					</div>
					<button class="icoi" type="submit"><img src="../RAP img/star (1).png" alt="rate"></button>
				</div>
				<div class="boxj"><img src="../RAP img/hridayam-movie-stills-017-819x1024.jpg" alt="poster">
					<div class="txtj">
						<p><b>hridayam</b></p>
					</div>
					<div class="iconj"><img src="../RAP img/star.png" alt="rating">
						<p>8.0</p>
					</div>
					<button class="icoj" type="submit"><img src="../RAP img/star (1).png" alt="rate"></button>
				</div>
				<div class="boxk"><img src="../RAP img/MV5BOTU0MzIxZDgtNTFlZC00YjRkLWI2ZGItZTQ0NjZmZTNjYTUwXkEyXkFqcGdeQXVyMTA1NzEzOTU1._V1_.jpg" alt="poster">
					<div class="txtk">
						<p><b>777 charlie</b></p>
					</div>
					<div class="iconk"><img src="../RAP img/star.png" alt="rating">
						<p>9.5</p>
					</div>
					<button class="icok" type="submit"><img src="../RAP img/star (1).png" alt="rate"></button>
				</div>
			</div>

			<div class="partb">
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
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
	var swiper = new Swiper(".mySwiper", {
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
	$(".coggy").fadeIn(900);
	$(".coggy").fadeOut(1000);
</script>

</html>