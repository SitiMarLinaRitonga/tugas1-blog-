<h2>TAMBAH POST</h2>
<form method="POST" action="post_proses.php">
<table class="table1">
	<tr>
		<td>TANGGAL</td>
		<td><input type="date" name="post_date"></td>
	</tr>
	<tr>
		<td>SLUG</td>
		<td><input type="text" name="post_slug"></td>
	</tr>
	<tr>
		<td>TITLE</td>
		<td><input type="text" name="post_title"></td>
	</tr>
	<tr>
		<td>KETERANGAN</td>
		<td><textarea name="post_txt"></textarea></td>
	</tr>
	<tr>
		<td>CATEGORY</td>
		<td><input type="number" name="category_id"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
	</tr>
</table>
</form>