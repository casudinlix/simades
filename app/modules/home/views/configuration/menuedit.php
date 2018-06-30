<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Menu Baru

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
            <form role="form" action="<?php echo site_url('home/menu/add/update');?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Menu</label>
   <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $menu->menu?>" name="namamenu" required="" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">link</label>
                  <input type="tex" class="form-control" id="exampleInputPassword1" value="<?php echo $menu->link?>" name="link" required="" autocomplete="off">
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Parent</label>

                  <div class="col-sm-10">
                    <select name="parent"  class="col-sm-6 control-label select" required="">
<?php if ($parent->parent=="0"): ?>
		<option value="0">No Parent/ Root Menu</option>
	<?php else: ?>
	<?php $parentname=$this->db->get_where('menus',['id'=>$parent->parent])->row();
	   ?>

  <option value="<?php echo $parent->parent?>"><?php echo $parent->parent." ".$parentname->menu?></option>
<?php endif;?>

<option value="0">No Parent/ Root Menu</option>

                    	 <?php foreach($menulist as $key):?>
				<option value="<?php echo $key->id?>"><?php echo $key->id.". ".$key->menu?></option>
                    	 <?php endforeach;?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Icon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" value="<?php echo $menu->icon?>" name="icon">
                  </div>
                </div>
                <input type="hidden"  value="<?php echo $menu->id?>" name="id">
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">

                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('home/menu')?>" class="btn btn-default">Kembali</a>
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
