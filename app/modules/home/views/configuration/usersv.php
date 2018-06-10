<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengguna
        <small>Data Pengguna Aplikasi</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
             
            <a href="<?php echo site_url('home/configuration/users/add') ?>" class="btn btn-info" title="Tambah Menu Baru"><i class="fa fa-plus"></i></a>
             
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
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Group</th>
                  <th>Active</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
 <?php foreach($users as $key):?>
<td><?php echo $key->user_nip?></td>
<td><?php echo $key->username?></td>
<td><?php echo $key->email?></td>
<td><?php echo $key->group_name?></td>
<?php if($key->active==1):?>
  <td><center><span class="label pull-right bg-blue">YA</span></center></td>
  <?php else:?>
    <td><span class="label pull-right bg-red">TIDAK</span></td>
  <?php endif;?>
 
<td>
  <a class="btn btn-success" href="<?php echo site_url('home/configuration/users/edit/').clean($key->users_id)?>"><i class="fa fa-pencil" title="Edit"></i></a>
 

<?php if($key->active==0):?>
 
<a class="btn btn-info" href="#" onclick="activeuser('<?php echo $key->users_id?>')"><i class="fa fa-child" title="Active UPengguna"></i></a>
    <?php else:?>
<a class="btn btn-warning" href="#" onclick="nonactiveuser('<?php echo $key->users_id?>')"><i class="fa f fa-power-off" title="Non Active"></i></a>
  <?php endif;?>


</td>
 

                  
   </tr>
   <?php endforeach;?>             
                <tfoot>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Group</th>
                  <th>Active</th>
                  <th>Action</th>
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