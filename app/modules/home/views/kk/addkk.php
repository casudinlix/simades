<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

        <small>Tambah Data Kartu Keluarga</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>

          </div>
        </div>
        <div class="box-body">
          <ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
            <li class="active">
              <a data-toggle="tab" href="#faq-tab-1">
                <i class="blue ace-icon fa fa-info bigger-120"></i>
                Informasi Kartu Keluarga
              </a>
            </li>
          </ul>
          <div class="tab-content no-border padding-24">
            <div id="faq-tab-1" class="tab-pane fade in active">


              <div class="space-8"></div>
<form role="form" action="<?php echo site_url('home/master/kk/save');?>" method="POST">
              <div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor KK</label>
    <input type="text" class="form-control" placeholder="Nomor Kartu Keluarga" name="kk" onkeypress="return angka(event)" required="" autocomplete="off" maxlength="16">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK Kepala keluarga</label>
 <select name="nik" class="col-sm-6 control-label select" data-placeholder="Pilih"        style="width: 100%;" required>
   <option value=""></option>
<option value="0">Belum Ada Kepala Keluarga</option>
                          <?php foreach ($warga as $key): ?>
  <option value="<?php echo $key->id?>"><?php echo $key->nik." | ".$key->nama?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>



                  </div>
                </div>



              </div>
            </div>


          </div>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo site_url('home/master/kk') ?>" class="btn btn-default">Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
