<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi, "SELECT * FROM tb_surat_keluar WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Surat Keluar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_srt_klr.php'>
                  <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tujuan Surat</label>
                        <input type="text" class="form-control" placeholder="Tujuan Surat" name='tujuan_surat' value="<?php echo $view['tujuan_surat'];?>">
                        <input type="text" class="form-control" placeholder="Tujuan Surat" name='id' value="<?php echo $view['id'];?>" hidden>  
                    </div>
                    </div>
                </div>
                    <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" placeholder="Nomor Surat" name='nmr_surat' value="<?php echo $view['nmr_surat'];?>">
                      </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Kode Surat</label>
                        <select class="form-control" name="kode_surat" >
                        <option value="<?php echo $view['kode_surat'];?>" selected><?php echo $view['kode_surat'];?></option>
                        <option value="A.I.10">A.I.10</option>
                        <option value="C.I.4">C.I.4</option>
                        <option value="D.I.4">D.I.4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="text" class="form-control" placeholder="Tanggal Surat" name='tgl_surat' value="<?php echo $view['tgl_surat'];?>">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" class="form-control" placeholder="Perihal" name='perihal' value="<?php echo $view['perihal'];?>">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen</label>
                      <input class="form-control" type="file" id="dokumen" name="dokumen" value="<?php echo $view['dokumen'];?>">
                      </div>
                    </div>
                </div>
                <button type="submit" class= "btn btn-sm btn-primary">Simpan</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
    </div>
</section>