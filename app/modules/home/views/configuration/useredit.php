<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Pengguna
        
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
            <form role="form" action="<?php echo site_url('home/configuration/users/save/edit');?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIP" name="nip" onkeypress="return angka(event)" value="<?php echo $users->user_nip?>" autocomplete="off">
<input type="hidden" name="id" value="<?php echo $this->uri->segment(5)?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama User</label>
                  <input type="tex" class="form-control" id="exampleInputPassword1" placeholder="Nama Pengguna" name="namauser" value="<?php echo $users->username?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" value="<?php echo $users->email?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input id="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" value="<?php echo base64_decode($users->pass)?>" autocomplete="off">
                  <input type="checkbox" onclick="show()">Show Password
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Group</label>

                  <div class="col-sm-10">
                    <select name="group" id="select" class="col-sm-6 control-label" required="">
                    	<option value="<?php echo $users->id?>"><?php echo $users->id." ".$users->group_name?></option>
                    	 
                    	 <?php foreach($grouplist as $key):?>
				<option value="<?php echo $key->id?>"><?php echo $key->id.". ".$key->group_name?></option>
                    	 <?php endforeach;?>
                    </select>
                  </div>
                </div>
                
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('home/configuration/users/')?>" class="btn btn-default">Kembali</a>
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