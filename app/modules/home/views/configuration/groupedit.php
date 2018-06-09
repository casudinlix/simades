<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Group Baru
        
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
            <form role="form" action="<?php echo site_url('home/group/add/update');?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Group</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detilgroup->group_name?>" name="namagroup" required="" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea name="desc" class="form-control"><?php echo $detilgroup->group_desc?></textarea>
                   <input type="hidden" name="id" value="<?php echo $detilgroup->id?>">
                </div>
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Rule</label>
                  <label>
<?php if($detilgroup->a_create==1):?>
   <input type="checkbox" class="minimal" name="acreate" value="1" checked="">
<?php else:?>
  <input type="checkbox" class="minimal" name="acreate" value="1">
<?php endif;?>
                  Create
                </label>

                <label>
 <?php if($detilgroup->a_read==1):?>                 
  <input type="checkbox" class="minimal" name="aread" value="1" checked="">
    <?php else:?>
       <input type="checkbox" class="minimal" name="aread" value="1">
    <?php endif;?>              
                  Read
                </label>
                <label>
  <?php if($detilgroup->a_update==1):?>                  
   <input type="checkbox" class="minimal" name="aupdate" value="1" checked="">
<?php else:?>
  <input type="checkbox" class="minimal" name="aupdate" value="1">
 <?php endif;?>                  
                  Update
                </label>

                <label>
 <?php if($detilgroup->a_delete==1):?>                   
  <input type="checkbox" class="minimal" name="adelete" value="1" checked="">
 <?php else:?>
   <input type="checkbox" class="minimal" name="adelete" value="1">
     <?php endif;?>               
                  Delete
                </label>
                 <label>
  <?php if($detilgroup->a_report==1):?>                   
    <input type="checkbox" class="minimal" name="areport" value="1" checked="">
 <?php else:?>
<input type="checkbox" class="minimal" name="areport" value="1">
    <?php endif;?>                     
                  Report
                </label>
                   
                </div>
                 
              </div>
              <!-- /.box-body -->

               
             
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
           
          <!-- /.box -->

          <div class="box box-danger">
            <div class="box-header with-border">
               
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
                  

                  <div class="col-sm-10">
                     
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('home/group')?>" class="btn btn-default">Kembali</a>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i>Simpan</button>
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