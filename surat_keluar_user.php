<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Data Surat Keluar</h3>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tujuan Surat</th>
                    <th>Nomor</th>
                    <th>Kode</th>
                    <th>Tanggal</th>
                    <th>Perihal</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_surat_keluar");
                    while ($srt = mysqli_fetch_array($query)) {
                      $no++
                    
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $srt["tujuan_surat"];?></td>
                    <td><?php echo $srt['nmr_surat'];?></td>
                    <td><?php echo $srt['kode_surat'];?></td>
                    <td><?php echo $srt['tgl_surat'];?></td>
                    <td><?php echo $srt['perihal'];?></td>
                    <td>
                      <a
                        class="view data btn btn-sm btn-secondary"
                        href="http://localhost/si-surat/app/surat/<?= $srt['dokumen']?>"
                        target="_blank"
                      >
                      <i class='fa fa-eye'></i>
                      </a>
                      <a href="" class="btn btn-sm btn-success"><i class='fa fa-download'></i></a>
                    </td>

                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_srt_klr.php">
            <div class="modal-body">

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tujuan Surat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tujuan_surat" placeholder="Tujuan Surat" name="tujuan_surat" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nmr_surat" placeholder="Nomor Surat" name="nmr_surat" required>
                </div>
              </div>
              <fieldset class="form-group">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Surat</label>
                <div class="col-sm-10">
                <select class="form-select" id="inputGroupSelect01" name="kode_surat">
                    <option selected>Pilih</option>
                    <option value="A.II.10">A.II.10</option>
                    <option value="C.II.4">C.II.4</option>
                    <option value="D.II.4">D.II.4</option>
                  </select>
                </div>
              </div>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tgl_surat" placeholder="Tanggal Surat" name="tgl_surat">
                </div>
              </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Perihal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="perihal" placeholder="Perihal" name="perihal">
                  </div>
                </div>
              <div class="mb-3">
              <label for="formFile" class="form-label">Dokumen</label>
              <input class="form-control" type="file" id="dokumen" name="dokumen">
              </div>
            </div>
              </fieldset>
            
              
            <div class="modal-footer justify-content">
              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
              <button type="reset" class="btn btn-danger" name="reset">Kosongkan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Modal View Data -->
      <?php
        $query = mysqli_query($koneksi,"SELECT * FROM tb_surat_keluar");
        while ($srt = mysqli_fetch_array($query)) {
      ?>
        <div class="modal fade" id="modal-view-<?php echo $srt['id'];?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Lihat Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- <form method="get" action="add/tambah_srt_msk.php"> -->
              <div class="modal-body">

                <div class="form-group row">
                  Tujuan Surat : <div id="tujuan_surat">
                  <?php echo $srt['tujuan_surat'];?>
                  </div>
                  <div class="col-sm-10">
                  </div>
                </div>
                <div class="form-group row">
                  Nomor Surat : <div id="nmr_surat"></div>
                  <div class="col-sm-10">
                  </div>
                </div>
                <fieldset class="form-group">
                <div class="form-group row">
                  Kode Surat : <div id="kode_surat"></div>
                  <div class="col-sm-10">
                </div>
                </div>
                  <div class="form-group row">
                  Tanggal Surat : <div id="tgl_surat"></div>
                  <div class="col-sm-10">
                  </div>
                </div>
                  <div class="form-group row">
                  Perihal :
                  <div class="col-sm-10"> <div id="perihal"></div>
                  </div>   
                  </div>
                </fieldset>
              
                
              <div class="modal-footer justify-content">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <button type="reset" class="btn btn-danger" name="reset">Kosongkan</button>
              </div>
            </div>
            <!-- </form> -->
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      <?php }?>

<script>
  function hapus_data(data_id){
    //alert('OK');
    //window.location=("delete\hapus_data.php?id="+data.id);
    Swal.fire({
      title: 'Apakah Datanya akan Dihapus?',
      showCancelButton: true,
      confirmButtonText: 'Ya',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("delete/hapus_srt_klr.php?id="+data_id)
      }
    })
  }
</script>

</div>
</div>
</div>
</div>