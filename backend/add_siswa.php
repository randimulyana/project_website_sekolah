<?php 

include "config/database.php";

if(isset($_POST["simpan"])){

$nama = $_POST["nama"];
$jurusan = $_POST["jurusan"];
$alamat = $_POST["alamat"];

$sql = "INSERT INTO tb_siswa
        VALUES
        ('','$nama', '$jurusan', '$alamat')
        ";
mysqli_query($conf, $sql);
}


?>
<?php include "layouts/header.php"; ?>
<!-- form start -->
<form method="POST" action="">
      <div class="box-body">
        <div class="form-group">
          <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama disini!">
        </div>
        <div class="form-group">
          <label>Jurusan</label>
          <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan disini!">
        </div>
          </div>
          <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control"  placeholder="isi alamat disini!!"></textarea>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="simpan" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
      </div>
 </form>
  <?php include "layouts/footer.php"; ?>