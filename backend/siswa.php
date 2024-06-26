<?php 
include "config/database.php";

// ambil data dari database
$sql = "SELECT * FROM tb_siswa";
$result = mysqli_query($conf, $sql);

?>

<?php include "layouts/header.php"; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="add_siswa.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php $i = 1; ?>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jurusan"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td>
                          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">Edit</a>
                          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Del</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php include "layouts/footer.php"; ?>