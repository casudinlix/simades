<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Akses
        <small>Data Akses Menu Aplikasi</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">



          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="info">Nama Pengguna</th>
                  <th class="info">Email</th>
                   <th class="info">Active</th>
                  <th class="warning">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
 <?php foreach($menu as $key):?>
<td><?php echo $key->username?></td>
<td><?php echo $key->email?></td>
<?php if($key->active==1):?>
  <td><center><span class="label pull-right bg-blue">YA</span></center></td>
  <?php else:?>
    <td><span class="label pull-right bg-red">TIDAK</span></td>
  <?php endif;?>


<td>
  <a class="btn btn-success" href="<?php echo site_url('home/utility/menu/add/').clean($key->id)?>"><i class="fa fa-check" title="Tambah Hak Akses"></i></a>
</td>



   </tr>
   <?php endforeach;?>
                <tfoot>
                <tr>
                  <th class="info">Nama Pengguna</th>

                  <th class="info">Email</th>
                   <th class="info">Active</th>
                  <th class="warning">Action</th>
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
