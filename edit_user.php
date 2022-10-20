<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update/update_user.php' enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Nama" name='id' value="<?php echo $view['id'];?>" hidden>  
                    </div>
                    </div>
                </div>
                    <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name='username' value="<?php echo $view['username'];?>">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password" name='password' value="<?php echo $view['password'];?>">
                      </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level" >
                        <option value="<?php echo $view['level'];?>" selected><?php echo $view['level'];?></option>
                        <option value="admin">Admin</option>
                        <option value="pengguna">Pengguna</option>
                        </select>
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
</div>
</div>
</div>