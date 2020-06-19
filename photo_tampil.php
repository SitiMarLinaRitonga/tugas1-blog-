<h2>TAMPILKAN DAFTAR PHOTO</h2>
<a href="index.php?page=photo_input">Add</a>

<?php


$kat = new App\Photo();
$rows = $kat->tampil();

?>

<table class="table1">
	<tr>
		<td>No</td>
		<td>TANGGAL</td>
		<td>TITLE PHOTO</td>
		<td>KETERANGAN</td>
		<td>PHOTO</td>
		<td>KODE POST</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['photo_id']; ?></td>
			<td><?php echo $row['photo_date']; ?></td>
			<td><?php echo $row['photo_title']; ?></td>
			<td><?php echo $row['photo_text']; ?></td>
			<td><img src="img/<?=$data['photo_upload']?>" width="100"></td>
			<td><?php echo $row['post_id']; ?></td>
			<td><a href="index.php?page=photo_edit&id=<?php echo $row['photo_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=photo_proses&delete-id=<?php echo $row['photo_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>