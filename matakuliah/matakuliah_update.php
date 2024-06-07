<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kode_matkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    // update user data
    $result = mysqli_query($conn, "UPDATE matakuliah SET
kode_matkul='$kode_matkul',nama_matkul='$nama_matkul',sks='$sks',semester='$semester'WHERE id_matkul=$id");
    // Redirect to homepage to display updated user in list
    header("Location:?page=matakuliah-show");
}