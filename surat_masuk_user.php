 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Data Surat Masuk</h3>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Asal Surat</th>
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
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk");
                    while ($srt = mysqli_fetch_array($query)) {
                      $no++
                    
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $srt["asal_surat"];?></td>
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
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Modal View Data -->   
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
        window.location=("delete/hapus_srt_msk_user.php?id="+data_id)
      }
    })
  }
</script>

