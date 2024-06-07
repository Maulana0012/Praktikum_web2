<?php
include "../connection.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM matakuliah WHERE id_matkul=$id");
header("Location:../admin/?page=matakuliah-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=matakuliah-show'>";