<?php
if (isset($_POST['Submit'])) {
    $kode_matkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $result = mysqli_query($conn, "INSERT INTO matakuliah(kode_matkul, nama_matkul, sks, semester)
VALUES('$kode_matkul','$nama_matkul','$sks','$semester')");
    header("Location:?page=matakuliah-show");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data matakuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode_matkul" class="control-label">Kode Matakuliah</label>
                        <input type="text" class="form-control" name="kode_matkul"
                            placeholder="Masukan Kode Matakuliah..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama_matkul" class="ontrol-label">Nama Matakuliah</label>
                        <input type="text" class="form-control" name="nama_matkul"
                            placeholder="Masukan Nama Matakuliah..." required>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="control-label">SKS</label>
                        <select class="form-control" name="sks">
                            <option disabled selected> SKS </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="2">3</option>
                            <option value="2">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester" class="control-label">Semester</label>
                        <select class="form-control" name="semester">
                            <option disabled selected> Semester </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="2">3</option>
                            <option value="2">4</option>
                            <option value="2">5</option>
                            <option value="2">6</option>
                            <option value="2">7</option>
                            <option value="2">8</option>
                        </select>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>