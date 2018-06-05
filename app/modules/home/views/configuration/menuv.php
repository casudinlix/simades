<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu
        <small>Data Menu Aplikasi</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
             
            <a href="<?php echo site_url('home/menu/add') ?>" class="btn btn-info" title="Tambah Menu Baru"><i class="fa fa-plus"></i></a>
             
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
                  <th>Nama Menu</th>
                  <th>Link menu</th>
                  <th>Active</th>
                  <th>Icon</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
 <?php foreach($menu as $key):?>
<td><?php echo $key->menu?></td>
<td><?php echo $key->link?></td>
<?php if($key->is_published==1):?>
  <td><center><span class="label pull-right bg-blue">YES</span></center></td>
  <?php else:?>
    <td><span class="label pull-right bg-red">NO</span></td>
  <?php endif;?>
<td><i class="fa <?php echo $key->icon?>"></i></td>
<td>
  <a class="btn btn-success" href="<?php echo site_url('home/menu/edit/').clean($key->id)?>"><i class="fa fa-pencil" title="Edit"></i></a>
 <a class="btn btn-danger" href="#" onclick="hapusmenu('<?php echo $key->id?>')"><i class="fa fa-trash-o" title="Active menu"></i></a>

<?php if($key->is_published==0):?>
 
<a class="btn btn-info" href="#" onclick="activemenu('<?php echo $key->id?>')"><i class="fa fa-child" title="Active menu"></i></a>
    <?php else:?>
<a class="btn btn-warning" href="#" onclick="nonactive('<?php echo $key->id?>')"><i class="fa f fa-power-off" title="Non Active"></i></a>
  <?php endif;?>


</td>
 

                  
   </tr>
   <?php endforeach;?>             
                <tfoot>
                <tr>
                  <th>Nama Menu</th>
                  <th>Link menu</th>
                  <th>Active</th>
                  <th>Icon</th>
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