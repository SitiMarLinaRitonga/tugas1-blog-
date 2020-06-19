<?php

$id = $_GET['id'];

$kat = new App\Photo();
$row = $kat->edit($id);
?>
<h2>Edit Photo</h2>
<form method="POST" action="photo_proses.php">
	<input type="hidden" name="photo_id" value="<?php echo $id; ?>">
	<table class="table1">
		<tr>
			<td>NAMA</td>
			<td><input type="date" name="photo_date" value="<?php echo $row['photo_date']; ?>"></td>
		</tr>
		<tr>
			<td>PHOTO TITLE</td>
			<td><input type="text" name="photo_title" value="<?php echo $row['photo_title']; ?>"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="photo_text"><?php echo $row['photo_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>KODE POST</td>
			<td><input type="number" name="post_id" value="<?php echo $row['post_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>