<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu
        <small>Data Group Aplikasi</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
             
            <a href="<?php echo site_url('home/group/add') ?>" class="btn btn-info" title="Tambah Group Baru"><i class="fa fa-plus"></i></a>
             
          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
  
          </div>
        </div>
        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Group</th>
                  <th>Deskripsi</th>
                  
                   
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
 <?php foreach($groupp as $key):?>
<td><?php echo $key->group_name?></td>
<td><?php echo $key->group_desc?></td>

 
<td>
  <a class="btn btn-success" href="<?php echo site_url('home/group/edit/').clean($key->id)?>"><i class="fa fa-pencil" title="Edit"></i></a>
 <a class="btn btn-danger" href="#" onclick="hapusgroup('<?php echo $key->id?>')"><i class="fa fa-trash-o" title="Active menu"></i></a>

 


</td>
 

                  
   </tr>
   <?php endforeach;?>             
                <tfoot>
                <tr>
                  <th>Nama Group</th>
                  <th>Deskripsi</th>
                   
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