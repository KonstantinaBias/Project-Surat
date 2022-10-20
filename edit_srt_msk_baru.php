<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi, "SELECT * FROM tb_surat_masuk_baru WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Surat Masuk yang Dibuat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update/update_srt_msk_baru.php' enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" placeholder="Asal Surat" name='asal_surat' value="<?php echo $view['asal_surat'];?>">
                        <input type="text" class="form-control" placeholder="Asal Surat" name='id' value="<?php echo $view['id'];?>" hidden>  
                    </div>
                    </div>
                </div>
                    <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kode Surat</label>
                        <input type="text" class="form-control" placeholder="Kode Surat" name='kode_surat' value="<?php echo $view['kode_surat'];?>">
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
                        <option value="A.II.10">A.II.10</option>
                        <option value="C.II.4">C.II.4</option>
                        <option value="D.II.4">D.II.4</option>
                        </select>
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
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" placeholder="Tanggal Surat" name='tgl_surat' value="<?php echo $view['tgl_surat'];?>">
                      </div>
                    </div>
                </div>
                <button type="submit" class= "btn btn-sm btn-primary">Simpan</button>
              </div>
            </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
    </div>
</section>