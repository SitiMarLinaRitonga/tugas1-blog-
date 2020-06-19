<h2>TAMPILKAN DAFTAR ALBUM</h2>
<a href="index.php?page=album_input">Add</a>

<?php


$kat = new App\Album();
$rows = $kat->tampil();

?>

<table class="table1">
	<tr>
		<td>NO</td>
		<td>NAMA ALBUM</td>
		<td>TEXT ALBUM</td>
		<td>KODE PHOTO</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['album_id']; ?></td>
			<td><?php echo $row['album_text']; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['photo_id']; ?></td>
			<td><a href="index.php?page=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=album_proses&delete-id=<?php echo $row['album_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>