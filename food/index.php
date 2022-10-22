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
	<title>food</title>
	<link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
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
					<li><a href="../Events/index.php"><b>EVENTS</b></a></li>
					<li><a href="index.php"><b>FOOD</b></a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="parta">
				<h3>snacks &amp; beverages</h3>
				<!-- <div class="down">
			<button type="submit"><b>select your movie ticket</b></button>
			<a href="#"><img src="../RAP img/down-arrow.png" alt="down"></a>
			</div> -->
				<div class="filter">
					<b>
						<p>Filters</p>
					</b>
					<button class="fill" type="submit"><a href="#"><img src="../RAP img/filter.png" alt="filter"></a></button>
					<div class="neew">
						<ul>
							<li><b>dry snacks</b></li>
							<li><b>beverages</b></li>
							<li><b>fast food</b></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="partb">
				<div class="boxa">
					<img src="../RAP img/pexels-nourishment-decoded-10497790.jpg" alt="nacho">
					<h4>nacho chips</h4>
					<div class="new">
						<p>Nacho chips with tea</p>
					</div>
					<button class="add" type="submit"><b>Add</b></button>
					<div class="price">
						<p>$10</p>
					</div>
				</div>
			</div>
			<div class="partc">
				<div class="boxb">
					<img src="../RAP img/pexels-glady-francis-1586942.jpg" alt="nacho">
					<h4>french fries</h4>
					<div class="neww">
						<p>Spicy french fries</p>
					</div>
					<button class="addb" type="submit"><b>Add</b></button>
					<div class="priceb">
						<p>$15</p>
					</div>
				</div>
			</div>
			<div class="partd">
				<div class="boxc">
					<img src="../RAP img/pexels-satyam-verma-4449068.jpg" alt="nacho">
					<h4>samosa</h4>
					<div class="newww">
						<p>4 piece of samosa</p>
					</div>
					<button class="addc" type="submit"><b>Add</b></button>
					<div class="pricec">
						<p>$20</p>
					</div>
				</div>
			</div>
			<div class="parte">
				<div class="boxd">
					<img src="../RAP img/pexels-tima-miroshnichenko-7991162.jpg" alt="nacho">
					<h4>pop corn</h4>
					<div class="newd">
						<p>Large size</p>
					</div>
					<button class="addd" type="submit"><b>Add</b></button>
					<div class="priced">
						<p>$20</p>
					</div>
				</div>
			</div>

			<div class="partg">
				<div class="boxf">
					<img src="../RAP img/16c17807-80ce-4c7e-ac8a-f217bb864af9.jfif" alt="nacho">
					<h4>pop corn combo</h4>
					<div class="newf">
						<p>Medium size popcorn with coc</p>
					</div>
					<button class="addf" type="submit"><b>Add</b></button>
					<div class="pricef">
						<p>$30</p>
					</div>
				</div>
			</div>
			<div class="parth">
				<div class="boxg">
					<img src="../RAP img/Mr-Burgerpaid-social.jpg" alt="nacho">
					<h4>burger combo</h4>
					<div class="newg">
						<p>Veg burger,pepsi,french fries</p>
					</div>
					<button class="addg" type="submit"><b>Add</b></button>
					<div class="priceg">
						<p>$35</p>
					</div>
				</div>
			</div>
			<div class="parti">
				<div class="boxh">
					<img src="../RAP img/Tuna-melt-landscape-1-scaled.jpg" alt="nacho">
					<h4>sandwich combo</h4>
					<div class="newh">
						<p>chicken sandwich with ice tea</p>
					</div>
					<button class="addh" type="submit"><b>Add</b></button>
					<div class="priceh">
						<p>$32</p>
					</div>
				</div>
			</div>
			<div class="partj">
				<div class="boxi">
					<img src="../RAP img/istockphoto-93489269-1024x1024.jpg" alt="nacho">
					<h4>popcorn combo</h4>
					<div class="newi">
						<p>popcorn with coco cola</p>
					</div>
					<button class="addi" type="submit"><b>Add</b></button>
					<div class="pricei">
						<p>$22</p>
					</div>
				</div>
			</div>
			<div class="chat"><a href="#"><img src="../RAP img/chat icon-01.png" alt="chat"></a></div>
		</div>

	</div>
</body>

</html>