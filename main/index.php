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
	<title>Rapture movies</title>
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
				<!-- <label>
					<input type="text" name="loca"></label>
				<button type="submit"><img src="../RAP img/download.png" alt="arrow"></button> -->
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
					<li><a href="index.php"><b>HOME</b></a></li>
					<li><a href="../Movies/index.php"><b>MOVIES</b></a></li>
					<li><a href="../Ratings/index.php"><b>RATINGS</b></a></li>
					<li><a href="../Events/index.php"><b>EVENTS</b></a></li>
					<li><a href="../food/index.php"><b>FOOD</b></a></li>
				</ul>
			</div>
		</div>
		<div class="banner">
			<!-- <img src="RAP img/Uncharted.jpg" alt="banner">
			<button class="ar" type="submit"><img src="RAP img/back.png" alt="arrow"></button>
			<button class="arr" type="submit"><img src="RAP img/whiteee.png" alt="arrow"></button> -->
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="../RAP img/Uncharted.jpg" alt="banner"></div>
					<div class="swiper-slide"><img src="../RAP img/Mahesh_Babu_Sarkaru_Vaari_Paat.jpg" alt="banner"></div>
					<div class="swiper-slide"><img src="../RAP img/05f2670f-0806-4d80-8fdb-483071f8b9fe.png" alt="banner">
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>

		<div class="content">
			<div class="parta">
				<h3>TRENDING MOVIES</h3>
				<button type="submit"><img src="../RAP img/back.png" alt="arrow"></button>
				<button type="submit"><img src="../RAP img/whiteee.png" alt="arrow"></button>
			</div>
			<div class="house">
				<div class="box"><img src="../RAP img/Downton-Abbey-A-New-Era-Release-Date.jpg" alt="poster">
					<div class="txt">
						<p><b>ENGLISH / U/A</b><br>
							2D,3D</p>
					</div>
					<button class="yelllow" type="submit"><b>BOOK</b></button>
				</div>

				<div class="boxx"><img src="../RAP img/Jersey_Poster_1649918922.jpg" alt="poster">
					<div class="txt">
						<p><b>HINDI / U/A</b><br>
							2D</p>
					</div>
					<button class="yelloww" type="submit"><b>BOOK</b></button>
				</div>

				<div class="boxxx"><img src="../RAP img/hridayam-movie-stills-017-819x1024.jpg" alt="poster">
					<div class="txt">
						<p><b>MALAYALAM / U</b><br>
							2D</p>
					</div>
					<button class="yellowww" type="submit"><b>BOOK</b></button>
				</div>
			</div>


			<div class="partb">
				<h3>EVENTS</h3>
				<button type="submit"><img src="../RAP img/back.png" alt="arrow"></button>
				<button type="submit"><img src="../RAP img/whiteee.png" alt="arrow"></button>
			</div>
			<div class="ban">
				<div class="banne"><img src="../RAP img/ar.jpg" alt="banner">
					<div class="gray"><a href="Events/index.html">
							<p><b>VIEW<br>MORE</b></p>
						</a></div>
					<button class="yell" type="submit"><b>BOOK<br>NOW</b></button>
				</div>
			</div>

			<div class="partc">
				<h3>INTERVAL SPECIALS</h3>
				<button type="submit"><img src="../RAP img/back.png" alt="arrow"></button>
				<button type="submit"><img src="../RAP img/whiteee.png" alt="arrow"></button>
				<div class="boxy"><a href="food/index.html"><img src="../RAP img/16c17807-80ce-4c7e-ac8a-f217bb864af9.jfif" alt="snacks">
						<p><b>POPCORN WITH<br>COCO COLA</b></p>
					</a>
				</div>
				<div class="boxyb"><a href="food/index.html"><img src="../RAP img/Mr-Burgerpaid-social.jpg" alt="snack">
						<p><b>BURGER,PEPSI &amp; FRIES<br>COMBO</b></p>
					</a>
				</div>
				<div class="boxya"><a href="food/index.html"><img src="../RAP img/Tuna-melt-landscape-1-scaled.jpg" alt="snack">
						<p><b>VEG SANDWITCH WITH<br>ICE TEA</b></p>
					</a>
				</div>
			</div>

			<div class="partd">
				<div class="sechr">
					<hr>
				</div>
				<div class="firsthr">
					<hr>
				</div>
				<h3>OFFER</h3>
			</div>
			<div class="parte">
				<div class="bo"><a href="#"><img src="../RAP img/of.png" alt="offer"></a></div>
				<div class="boo"><a href="#"><img src="../RAP img/off.png" alt="off"></a></div>
			</div>
			<hr>

			<div class="partf">
				<h3>UPCOMING MOVIES</h3>
				<button type="submit"><img src="../RAP img/back.png" alt="arrow"></button>
				<button type="submit"><img src="../RAP img/whiteee.png" alt="arrow"></button>

				<div class="up"><img src="../RAP img/FQtoVgPWYA461kW.jfif" alt="thor">
					<p><b>THOR<br>LOVE AND THUNDER</b></p>
					<div class="brown">
						<p><b>ENGLISH / U/A</b></p>
					</div>
				</div>

				<div class="down"><img src="../RAP img/MV5BN2ZkOTU3ZWYtNWVmMS00NGUyLWE2NTQtMDVkYjdjYTlhNThmXkEyXkFqcGdeQXVyODEyNjEwMDk@._V1_.jpg" alt="rambo">
					<p><b>KAATHUVAKULA<br>RENDU KAADHAL</b></p>
					<div class="bowny">
						<p><b>TAMIL / U/A</b></p>
					</div>
				</div>

				<div class="right"><img src="../RAP img/Mahesh-Babu-Sarkaru-Vaari-Paata-First-Look-Poster-HD.jpg" alt="sarkaru">
					<p><b>SARKAARU VAARI PAATA</b></p>
					<div class="bownyy">
						<p><b>TELUGU / U/A</b></p>
					</div>
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
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}
</script>

</html>