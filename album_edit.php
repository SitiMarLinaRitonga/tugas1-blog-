<?php


$id = $_GET['id'];

$kat = new App\Album();
$row = $kat->edit($id);
?>
<h2>Edit Album</h2>
<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table class="table1">
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>"></td>
		</tr>
		<tr>
			<td>PHOTO TITLE</td>
			<td><input type="text" name="album_text" value="<?php echo $row['album_text']; ?>"></td>
		</tr>
		<tr>
			<td>KODE PHOTO</td>
			<td><input type="number" name="photo_id" value="<?php echo $row['photo_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>