<!DOCTYPE html>
<html>
<head>
	<title>Praktikum E-Commerce Sederhana</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET; ?>images/header.png.png">
		</div>

		<div class="menu">
			<a href="index.php">HOME</a>
			<a href="index.php?page=category_tampil">KATEGORI</a>
			<a href="index.php?page=post_tampil">POST</a>
			<a href="index.php?page=photo_tampil">PHOTO</a>
			<a href="index.php?page=album_tampil">ALBUM</a>
			<a href="logut.php"> LOGOUT </a>
		</div>

		<div class="main">
			<?php

				if (isset($_GET['page']))  {
					include $_GET['page'] . ".php";				
				} else {
					include "main.php";
				}

			?>
		</div>

		<div class="footer">

		</div>

		<div>
			
		</div>
	</div>
</body>
</html>