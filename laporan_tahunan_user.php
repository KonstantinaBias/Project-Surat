<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Data Surat Masuk Tahun Ini</h3>
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
          $last_day = date('Y-m-d h:i:s',strtotime('last day of previous year'));
          $first_day = date('Y-m-d h:i:s',strtotime('first day of next year'));
          $query = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk WHERE tgl_surat between '$last_day' and '$first_day'");
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
            Lihat
          </a>
          <a href="" class="btn btn-sm btn-success">Download</a>
          </td>

          </tr>
          <?php }?>
        </tbody>
  </table>
  </div>
  </div>

        <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Data Surat Keluar Tahun Ini</h3>
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
          $last_day = date('Y-m-d h:i:s',strtotime('last day of previous year'));
          $first_day = date('Y-m-d h:i:s',strtotime('first day of next year'));
          $query = mysqli_query($koneksi,"SELECT * FROM tb_surat_keluar WHERE tgl_surat between '$last_day' and '$first_day'");
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
            Lihat
          </a>
          <a href="" class="btn btn-sm btn-success">Download</a>
          </td>

          </tr>
          <?php }?>
        </tbody>
</table>
</section> 
</div>
</div>
</div>
