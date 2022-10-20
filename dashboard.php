<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <h3>Dashboard</h3>
        <div class="row">
          <!--<div class="col-lg-4 col-6">
             small box 
            <div class="small-box bg-gradient-info">
              <div class="inner">
              <?php
              //$query = mysqli_query($koneksi, "SELECT count(id) as admin FROM pengguna");
              //$data  = mysqli_fetch_array($query);
              ?>
              <h3><?= $data['admin'] ?></h3>
              <p>USER</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="index.php?page=data-admin.php" class="small-box-footer">Data User <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>-->
          
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-info">
              <div class="inner">
              <?php
              $query = mysqli_query($koneksi, "SELECT count(id) as asal_surat FROM tb_surat_masuk");
              $data  = mysqli_fetch_array($query);
              ?>
              <h3><?= $data['asal_surat'] ?></h3>
              <p>TOTAL SURAT MASUK</p>
              </div>
              <div class="icon">
                <i class="ion ion-email-unread"></i>
              </div>
              <a href="index.php?page=surat-masuk" class="small-box-footer">Lihat Data Surat Masuk <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-success">
              <div class="inner">
              <?php
              $query = mysqli_query($koneksi, "SELECT count(id) as tujuan_surat FROM tb_surat_keluar");
              $data  = mysqli_fetch_array($query);
              ?>
              <h3><?= $data['tujuan_surat'] ?></h3>
              <p>TOTAL SURAT KELUAR</p>
              </div>
              <div class="icon">
                <i class="ion ion-email"></i>
              </div>
              <a href="index.php?page=surat-keluar" class="small-box-footer">Lihat Data Surat Keluar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          
          <!-- ./col -->
          <!--<div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>-->
          <!-- ./col -->
          <!-- Default box -->
          <div class="col-13">
          <div class="card ">
              <div class="card-header">
              
              <h3 class="card-title">Selamat Datang</h3>
          </div>
              <!-- /.card-header -->
              <div class="card-body ">
              <h3 align="center">SISTEM INFORMASI SURAT MENYURAT SMA SANTA MARIA YOGYAKARTA</h3>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
       