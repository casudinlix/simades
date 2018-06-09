<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Akses Baru 
        
      </h1>
       
    </section>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
               
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('home/utility/menu/save');?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pengguna</label>
 <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $user->username?>" readonly="">
                </div>
                <input type="hidden" name="id" value="<?php echo $this->uri->segment(5)?>" placeholder="">
                <div class="form-group">
                  <label for="exampleInputPassword1">Group</label>
                  <input type="tex" class="form-control" id="exampleInputPassword1" value="<?php echo $user->group_name?>" readonly>
                </div>
                 
                 
              </div>
              <!-- /.box-body -->

               
             
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
           
          <!-- /.box -->

          <div class="box box-danger" >
            <div class="box-header with-border">
              Data Menu
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   
                  <th>Nama menu</th>
                    
                  <th>Action</th>
                </tr>
                 
                </thead>
                <tbody>
                <tr>
<?php foreach($menu as $key):?>
 <td><?php echo $key->menu?></td>
 <td><a class="btn btn-danger" href="#" onclick="hapuspermission('<?php echo $key->id?>')"><i class="fa fa-trash-o" title="Active menu"></i></a></td>
</tr>
<?php endforeach;?>
                 
                </tr>
              </tbody>
            </table>
            </div>
          
          </div>
          
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
               
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pilih Menu</label>

                  <div class="col-sm-10">
                    <select name="menuid" id="select" class="col-sm-6 control-label" required="">
                      <option value=""></option>
                    
                       <?php foreach($menulist as $key):?>
        <option value="<?php echo $key->id?>"><?php echo $key->id.". ".$key->menu?></option>
                       <?php endforeach;?>
                    </select>
                  </div>
                </div>
                 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('home/utility/menu')?>" class="btn btn-default">Kembali</a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
           
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->