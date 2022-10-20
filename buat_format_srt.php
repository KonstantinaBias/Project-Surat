<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Data Format Surat yang Pernah Dibuat</h3>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
              <div class="box-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Kode Surat</th>
                    <th>Perihal</th>
                    <th>Alamat Tujuan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php

                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk_baru");
                    while ($srt = mysqli_fetch_array($query)) {
                      $no++
                    
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $srt["nmr_surat"];?></td>
                    <td><?php echo $srt["kode_surat"];?></td>
                    <td><?php echo $srt['perihal'];?></td>
                    <td><?php echo $srt['alamat_tujuan'];?></td>
                    <td><?php echo $srt['tgl_surat'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $srt['id'];?>)" class="btn btn-sm btn-danger"><i class='fas fa-trash-alt'></i></a>
                      <a href="index.php?page=edit-srt-msk_baru&& id=<?php echo $srt['id'];?>" class="btn btn-sm btn-info"><i class='fa fa-edit'></i></a>
                      <a
                        class="view data btn btn-sm btn-secondary"
                        href="http://localhost/si-surat/app/surat/<?= $srt['dokumen']?>"
                        target="_blank"
                      >
                      <i class='fa fa-eye'></i>
                      </a>
                      <a href="format_surat.php" class="btn btn-sm btn-success"><i class='fa fa-print'></i></a>
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
            <form method="get" action="add/tambah_buat_srt_msk.php">
            <div class="modal-body">

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
                <label class="col-sm-2 col-form-label">Perihal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="perihal" placeholder="Perihal" name="perihal" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat Tujuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamat_tujuan" placeholder="Alamat Tujuan" name="alamat_tujuan" required>
                </div>
              </div>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tgl_surat" placeholder="Tanggal Surat" name="tgl_surat">
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
      </div>
      </div>
      </div>
      
      

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
        window.location=("delete/hapus_srt_msk.php?id="+data_id)
      }
    })
  }
</script>