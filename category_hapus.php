<?php

include "koneksi.php";
$id = isset($_GET['id']) ? $_GET['id'] : '';

$sql = "DELETE FROM tb_category WHERE category_id=:category_id";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":category_id", $id);
if ($stmt->execute()) {
    echo "<script>alert('Data Dapat Dihapus');</script>";
    echo "<script>location='category_tampil.php';</script>";
} else {
    echo "<script>alert('Data Tidak Dapat Dihapus');</script>";
}
