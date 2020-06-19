<?php 

include_once "app/Controller.php";
include_once "app/Photo.php";

$kat = new App\Photo();

if ($_POST['btn-simpan']){
	$kat->input();
	header("location:index.php?page=photo_tampil");
}

if ($_POST['btn-edit']) {
	$kat->update();
	header("location:index.php?page=photo_tampil");
}

if ($_GET['delete-id']) {
	$kat->delete($_GET['delete-id']);
	header("location:index.php?page=photo_tampil");
}