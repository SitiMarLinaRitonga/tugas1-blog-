<?php


$id = $_GET['id'];

$kat = new App\Post();
$row = $kat->edit($id);
?>
<h2>Edit Post</h2>
<form method="Post" action="post_proses.php">
	<input type="hidden" name="post_id" value="<?php echo $id; ?>">
	<table class="table1">
		<tr>
			<td>NAMA</td>
			<td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
		</tr>
		<tr>
			<td>SLUG POST</td>
			<td><input type="text" name="post_slug" value="<?php echo $row['post_slug']; ?>"></td>
		</tr>
		<tr>
			<td>POST TITLE</td>
			<td><input type="text" name="post_title" value="<?php echo $row['post_title']; ?>"></td>
		</tr>
		<tr>
			<td>TEXT POST</td>
			<td><textarea name="post_txt"><?php echo $row['post_txt']; ?></textarea></td>
		</tr>
		<tr>
			<td>CATEGORY</td>
			<td><input type="number" name="category_id" value="<?php echo $row['category_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>