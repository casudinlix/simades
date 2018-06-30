<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kartu Keluarga
        <small>Data Kartu Keluarga</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">

            <a href="<?php echo site_url('home/master/warga/add') ?>" class="btn btn-info" title="Tambah Data Baru"><i class="fa fa-plus"></i></a>

          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>


          </div>
        </div>
        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>

                  <th class="info">No KK</th>
                  <th class="info">Kepala Keluarga</th>
                  <th class="info">NIK</th>
                  <th class="info">Jumlah Keluarga</th>
                  <th class="info">Jenis Kelamin</th>
                  <th class="info">Umur</th>
                  <th class="info">Blok / Dusun</th>
                  <th class="info">RT / RW</th>

                  <th class="danger">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
  <?php foreach ($kk as $key): ?>
    <td><a><?php echo $key->no_kk ?></a></td>
    <td><?php echo $key->nama ?></td>
    <td><a href="<?php echo site_url('home/master/warga/detil/').clean($key->warga_id)?>"><?php echo $key->nik ?></a></td>
    <?php $ttl=new datetime($key->tanggallahir);
    $today=new DateTime();
    $umur=$today->diff($ttl) ?>
    <td><?php echo $key->jml_keluarga ?></td>
    <td><?php echo $key->jk ?></td>
    <td><?php echo $umur->y ?></td>
    <td><?php echo $key->blok ?></td>
    <td><?php echo $key->rtrw ?></td>

    <td><i class="fa fa-print btn btn-warning"></i></td>
  </tr>
<?php endforeach; ?>

                <tfoot>
                <tr>
                  <th class="info">No KK</th>
                  <th class="info">Kepala Keluarga</th>
                  <th class="info">NIK</th>
                  <th class="info">Jumlah Keluarga</th>
                  <th class="info">Jenis Kelamin</th>
                  <th class="info">Umur</th>
                  <th class="info">Blok / Dusun</th>
                  <th class="info">RT / RW</th>

                  <th class="danger">Action</th>
                </tr>
                </tfoot>
              </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
