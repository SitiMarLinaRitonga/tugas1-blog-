<h2>POSTING PHOTO</h2>
<a href="index.php?page=post_input">Add</a>

<?php


$kat = new App\Post();
$rows = $kat->tampil();

?>

<table class="table1">
	<tr>
		<td>NO</td>
		<td>TANGGAL</td>
		<td>SLUG</td>
		<td>TITLE</td>
		<td>KETERANGAN</td>
		<td>CATEGORY</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['post_id']; ?></td>
			<td><?php echo $row['post_date']; ?></td>
			<td><?php echo $row['post_slug']; ?></td>
			<td><?php echo $row['post_title']; ?></td>
			<td><?php echo $row['post_txt']; ?></td>
			<td><?php echo $row['category_id']; ?></td>
			<td><a href="index.php?page=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=post_proses&delete-id=<?php echo $row['post_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>