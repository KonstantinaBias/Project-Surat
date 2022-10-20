<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Data User</h3>
            </div>
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
          <div class="table-responsive">
            <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="col-1">No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT * FROM pengguna");
                  while($data = mysqli_fetch_array($query)){
                  $no++
                ?>
                <tr>
                  <td width='5%'><?php echo $no;?></td>
                  <td><?php echo $data['nama'] ?></td>
                  <td><?php echo $data['username'] ?></td>
                  <td><?php echo $data['password'] ?></td>
                  <td><?php echo $data['level'] ?></td>
                  <td>
                    <a href="index.php?page=edit-user&& id=<?php echo $data['id']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-info shadow-sm'><span aria-hidden="true"></span><i class='fa fa-edit'></i></button></a>
                    <a onclick="hapus_data(<?php echo $data['id'];?>)" class="btn btn-sm btn-danger"><i class='fas fa-trash-alt'></i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    </div>
    </div>
    </div>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_user.php">
            <div class="modal-body">

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                </div>
              </div>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="password" placeholder="password" name="password">
                </div>
              </div>
              <fieldset class="form-group">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                <select class="form-select" id="inputGroupSelect01" name="level">
                    <option selected>Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="pengguna">Pengguna</option>
                  </select>
                </div>
              </div>
            </fieldset>
            <div class="modal-footer justify-content">
              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
              <button type="reset" class="btn btn-danger" name="reset">Kosongkan</button>
            </div>
          </div>
          </form>
          </div>
          </div>
          </div>
          <!-- /.modal-content -->
      
        <!-- /.modal-dialog -->
     
      <!-- Modal View Data -->

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
            window.location=("delete/hapus_user.php?id="+data_id)
        }
        })
    }
    </script>

