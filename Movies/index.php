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
	<title>Movies</title>
	<link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<script src="https://kit.fontawesome.com/b311425060.js" crossorigin="anonymous"></script>
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
					<li><a href="index.php"><b>MOVIES</b></a></li>
					<li><a href="../Ratings/index.php"><b>RATINGS</b></a></li>
					<li><a href="../Events/index.php"><b>EVENTS</b></a></li>
					<li><a href="../food/index.php"><b>FOOD</b></a></li>
				</ul>
			</div>
		</div>
		<div class="banner">
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="../RAP img/Mahesh_Babu_Sarkaru_Vaari_Paat.jpg" alt="banner"></div>
					<div class="swiper-slide"><img src="../RAP img/05f2670f-0806-4d80-8fdb-483071f8b9fe.png" alt="banner">
					</div>
					<div class="swiper-slide"><img src="../RAP img/Uncharted.jpg" alt="banner"></div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>



		<div class="content">
			<div class="parta">
				<div class="boxa">
					<b>
						<p>Now Showing</p>
					</b>
				</div>
				<a href="#">
					<div class="boxb">
						<b>
							<p>Upcomming Movies</p>
						</b>
					</div>
				</a>
				<div class="filter">
					<b>
						<p>Filters</p>
					</b>
					<button class="fill" type="submit"><a href="#"><img src="../RAP img/filter.png" alt="filter"></a></button>
					<div class="new">
						<ul>
							<li><b>language</b></li>
							<li><b>format</b></li>
							<li><b>genre</b></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="partb">

				<div class="box"><img src="../RAP img/Downton-Abbey-A-New-Era-Release-Date.jpg" alt="poster">
					<div class="txt">
						<p><b>ENGLISH / U/A</b><br>
							2D,3D</p>
					</div>
					<button class="yellow" type="submit"><b>BOOK</b></button>
				</div>

				<div class="boxx"><img src="../RAP img/Jersey_Poster_1649918922.jpg" alt="poster">
					<div class="txtt">
						<p><b>HINDI / U/A</b><br>
							2D</p>
					</div>
					<button class="yelloww" type="submit"><b>BOOK</b></button>
				</div>

				<div class="boxxx"><img src="../RAP img/hridayam-movie-stills-017-819x1024.jpg" alt="poster">
					<div class="txttt">
						<p><b>MALAYALAM / U</b><br>
							2D</p>
					</div>
					<button class="yellowww" type="submit"><b>BOOK</b></button>
				</div>
				<div class="bo1"><img src="../RAP img/download.jfif" alt="poster">
					<div class="txt1">
						<p><b>english / U</b><br>
							2D,3d</p>
					</div>
					<button class="yellow1" type="submit"><b>BOOK</b></button>
				</div>
			</div>


			<div class="partc">
				<div class="movie"><img src="../RAP img/rrr-movie-ram-charan-first-look-posters-hd-tamil.jpg" alt="poster">
					<div class="tt">
						<p><b>TELEGU / U/A</b><br>
							2D,3D</p>
					</div>
					<button class="yello" type="submit"><b>BOOK</b></button>
				</div>

				<div class="now"><img src="../RAP img/MV5BYjVkMjMxMmYtYjQ3YS00MGQwLWI4OWQtMmFlYTIxNGIyZDU2XkEyXkFqcGdeQXVyMTUwMjU3NzI4._V1_.jpg" alt="poster">
					<div class="ttt">
						<p><b>ENGLISH / U/A</b><br>
							2D</p>
					</div>
					<button class="yelloo" type="submit"><b>BOOK</b></button>
				</div>

				<div class="show"><img src="../RAP img/The_Batman_poster_10.webp" alt="poster">
					<div class="tttt">
						<p><b>ENGLISH / U/A</b><br>
							2D</p>
					</div>
					<button class="yellooo" type="submit"><b>BOOK</b></button>
				</div>
				<div class="bo2"><img src="../RAP img/MV5BZGFmNmRlZmQtMDAyYy00NTJjLTg2ODQtZDI0OWE3M2I2NDcyXkEyXkFqcGdeQXVyNjY1MTg4Mzc@._V1_.jpg" alt="poster">
					<div class="txt2">
						<p><b>english / U</b><br>
							2D,3d</p>
					</div>
					<button class="yellow2" type="submit"><b>BOOK</b></button>
				</div>
			</div>

			<div class="partd">

				<div class="boxxxx"><img src="../RAP img/snh_online_6072x9000_posed_01.jpg" alt="poster">
					<div class="txtttt">
						<p><b>English / U</b><br>
							2D,3D</p>
					</div>
					<button class="yellowwww" type="submit"><b>BOOK</b></button>
				</div>
				<div class="boxm"><img src="../RAP img/Adivi-Sesh-Major-first-look-poster-HD.jpg" alt="poster">
					<div class="txtm">
						<p><b>telegu / U</b><br>
							2D</p>
					</div>
					<button class="yellowm" type="submit"><b>BOOK</b></button>
				</div>
				<div class="boxn"><img src="../RAP img/FGp5EBXXwAEt66R.webp" alt="poster">
					<div class="txtn">
						<p><b>english / U/A</b><br>
							2D,3d</p>
					</div>
					<button class="yellown" type="submit"><b>BOOK</b></button>
				</div>
				<div class="bo3"><img src="../RAP img/MV5BMjA0NzllZDItZGVjOS00MGVmLWEzM2QtODExNWYzMTgyOTliXkEyXkFqcGdeQXVyODc0OTEyNDU@._V1_.jpg" alt="poster">
					<div class="txt3">
						<p><b>english / U</b><br>
							2D,3d</p>
					</div>
					<button class="yellow3" type="submit"><b>BOOK</b></button>
				</div>
			</div>

			<div class="parte">

				<div class="boxo"><img src="../RAP img/Top-Gun-Rogue-Nation-Style.png" alt="poster">
					<div class="txto">
						<p><b>English / U</b><br>
							2D,3D</p>
					</div>
					<button class="yellowo" type="submit"><b>BOOK</b></button>
				</div>
				<div class="boxp"><img src="../RAP img/MV5BOGEyZWQ2ZjYtNjdmMy00OWIxLWEwOGUtMjkyZGNhMTA5NWJiXkEyXkFqcGdeQXVyMTM1OTU1MzQx._V1_.jpg" alt="poster">
					<div class="txtp">
						<p><b>tamil / U/a</b><br>
							2D</p>
					</div>
					<button class="yellowp" type="submit"><b>BOOK</b></button>
				</div>
				<div class="boxq"><img src="../RAP img/FR_-O5qVIAQ9RBp.png" alt="poster">
					<div class="txtq">
						<p><b>english / U/A</b><br>
							2D,3d</p>
					</div>
					<button class="yellowq" type="submit"><b>BOOK</b></button>
				</div>
				<div class="bo4"><img src="../RAP img/xmbU4JTUm8rsdtn7Y3Fcm30GpeT.jpg" alt="poster">
					<div class="txt4">
						<p><b>english / U</b><br>
							2D,3d</p>
					</div>
					<button class="yellow4" type="submit"><b>BOOK</b></button>
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
							echo '<span class="cog" style="display:none" ><i class="fa-solid fa-circle-check fa-shake tick aria-hidden="true"></i></span>';
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
	$(".cog").fadeIn(800);
	$(".cog").fadeOut(1000);
</script>

</html>