<h2>TAMPILKAN DAFTAR KATEGORI</h2>
<a href="index.php?page=category_input">Add</a>

<?php 


$kat = new App\Category();
$rows = $kat->tampil();

?>

<table class="table1">
	<tr>
		<td>NO</td>
		<td>NAMA</td>
		<td>KETERANGAN</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['category_id']; ?></td>
			<td><?php echo $row['category_name']; ?></td>
			<td><?php echo $row['category_text']; ?></td>
			<td><a href="index.php?page=category_edit&id=<?php echo $row['category_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=category_proses&delete-id=<?php echo $row['category_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>