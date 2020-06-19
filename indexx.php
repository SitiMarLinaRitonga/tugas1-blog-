<!-- <?php 
	include "koneksi.php";
	

	if (isset($_POST['t_simpan'])) {
		
		$sql = "INSERT INTO tb_photos (id, date, tile, text, post_id)
		VALUES ('',:date, :title, :text, :post_id)";

		$stmt = $koneksi->prepare($sql);
		$stmt->bindParam(":id",$_POST['i_id']);
		$stmt->bindParam(":date",$_POST['i_date']);
		$stmt->bindParam(":title",$_POST['i_ti']);
		$stmt->bindParam(":text",$_POST['i_text']);
		$stmt->bindParam(":post_id",$_POST['i_idp']);
		$stmt->execute();
	}
	
 ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>
		Sistem Informasi Posting Foto
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php
	include "koneksi.php";
	session_start();
	if (!isset($_SESSION['username'])){
		header("location:login.php");
	}
?>
	<div class="utama">
		<div class="kepala">
			<?php include "header.php";?>
		</div>

		<div class="menu">
			<?php include "Menu.php";?>	
		</div>

		<div class="isi">
			<?php 

			if(isset($_GET['halaman']))
			{
				include $_GET['halaman'].".php";
			} else {

				include "utama.php";
			}
			?>
		</div>

		<div>
			<?php include "footer.php";?>
		</div>
	</div>
</body>
</html>