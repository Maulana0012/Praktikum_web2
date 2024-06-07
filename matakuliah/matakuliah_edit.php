<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM matakuliah WHERE id_matkul=$id");
while ($data = mysqli_fetch_array($result)) {
    $kode_matkul = $data['kode_matkul'];
    $nama_matkul = $data['nama_matkul'];
    $sks = $data['sks'];
    $semester = $data['semester'];
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="panel-title">Ubah Data Matakuliah</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-update" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode_matkul" class="col-sm-2 control-label">Kode Matakuliah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kode_matkul"
                                value="<?php echo $kode_matkul; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_matkul" class="col-sm-2 control-label">Nama Matakuliah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_matkul"
                                value="<?php echo $nama_matkul; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="col-sm-2 control-label">SKS</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sks">
                                <option disabled> Pilih </option>
                                <option <?php if ($sks == "1")
                                    echo 'selected'; ?> value="1">1</option>
                                <option <?php if ($sks == "2")
                                    echo 'selected'; ?> value="2">2</option>
                                <option <?php if ($sks == "3")
                                    echo 'selected'; ?> value="3">3</option>
                                <option <?php if ($sks == "4")
                                    echo 'selected'; ?> value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="semester" class="col-sm-2 control-label">semester</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="semester">
                                <option disabled> Pilih </option>
                                <option <?php if ($semester == "1")
                                    echo 'selected'; ?> value="1">1</option>
                                <option <?php if ($semester == "2")
                                    echo 'selected'; ?> value="2">2</option>
                                <option <?php if ($semester == "3")
                                    echo 'selected'; ?> value="3">3</option>
                                <option <?php if ($semester == "4")
                                    echo 'selected'; ?> value="4">4</option>
                                <option <?php if ($semester == "5")
                                    echo 'selected'; ?> value="5">5</option>
                                <option <?php if ($semester == "6")
                                    echo 'selected'; ?> value="6">6</option>
                                <option <?php if ($semester == "7")
                                    echo 'selected'; ?> value="7">7</option>
                                <option <?php if ($semester == "8")
                                    echo 'selected'; ?> value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                            <input type="submit" name="update" class="btn btn-primary" value="Update">
                            <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>