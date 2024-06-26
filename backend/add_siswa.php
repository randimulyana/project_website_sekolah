<!-- form start -->
<form role="form" method="POST" action="pages/mahasiswa/tambah_mahasiswa_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nim</label>
                     <input type="text" name="nim" class="form-control" placeholder="Nim">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                    <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto">
                  </div>
                   </div>
                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"  placeholder="isi alamat disini!!"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan" required>
                      <option value="">- Pilih Jurusan -</option>
                      <option value="RPL"> Rekayasa Perangkat Lunak </option>
                      <option value="MM"> Multimedia </option>
                      <option value="TKJ"> Teknik komputer Jaringan </option>
                    </select>
                  </div>
                 
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="simpan" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                </div>
              </form>