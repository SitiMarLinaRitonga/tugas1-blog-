<h2>TAMBAH PHOTO</h2>
<form method="POST" action="photo_proses.php">
<table class="table1">
	<tr>
		<td>DATE</td>
		<td><input type="date" name="photo_date"></td>
	</tr>
	<tr>
		<td>TITLE PHOTO</td>
		<td><input type="text" name="photo_title"></td>
	</tr>
	<tr>
		<td>KETERANGAN</td>
		<td><textarea name="photo_text"></textarea></td>
	</tr>
	<tr>
		<td>KODE POST</td>
		<td><input type="number" name="post_id"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
	</tr>
</table>
</form>