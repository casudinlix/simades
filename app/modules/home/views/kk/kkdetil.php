<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

        <small>Detil Data Kartu Warga</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detil Data</h3>

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

            <li>
              <a data-toggle="tab" href="#faq-tab-2">
                <i class="fa fa-group bigger-120"></i>
              Data Anggota Keluarga
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('home/master/warga/add')?>">
                <i class="fa fa-plus-circle bigger-120"></i>
                Tambah Anggota Keluarga
              </a>
            </li>
            </ul>
          <div class="tab-content no-border padding-24">
            <div id="faq-tab-1" class="tab-pane fade in active">


              <div class="space-8"></div>
<form role="form" action="<?php echo site_url('home/master/kk/update');?>" method="POST">
              <div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor KK</label>
    <input type="text" class="form-control" required="" name="kk" onkeypress="return angka(event)" value="<?php echo base64_decode($this->uri->segment(5))?>" maxlength="16">
                    </div>
                    <input type="hidden" class="form-control" required="" name="id" onkeypress="return angka(event)" value="<?php echo base64_decode($this->uri->segment(6))?>" maxlength="16">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK Kepala Keluarga</label>
                      <select name="nik" class="col-sm-6 control-label select" data-placeholder="Pilih" style="width: 100%;" required>
                      <option value="<?php echo $datakk->warga_id?>"><?php echo $datakk->nik." | ".$datakk->nama?></option>
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

            <div id="faq-tab-2" class="tab-pane fade">


              <div class="space-8"></div>

              <div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="box-body">
                       <table id="example1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                              <th class="info">Nama</th>
                              <th class="info">NIK</th>
                              <th class="info">Jenis Kelamin</th>
                              <th class="info">Tempat Lahir</th>
                              <th class="info">Tanggal Lahir</th>
                              <th class="info">Umur</th>
                              <th class="info">Agama</th>
                              <th class="info">Pendidikan</th>
                              <th class="info">Pekerjaan</th>

                              <th class="danger">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
              <?php foreach ($anggota as $key): ?>

                <td><?php echo $key->nama ?></td>
                <td><?php echo $key->nik ?></td>
                <td><?php echo $key->jk ?></td>
                <td><?php echo $key->tempatlahir ?></td>
                <?php $ttl=new datetime($key->tanggallahir);
                $today=new DateTime();
                $umur=$today->diff($ttl) ?>

                <td><?php echo $key->tanggallahir ?></td>
                <td><?php echo $umur->y ?></td>
                <td><?php echo $key->nama_agama ?></td>
                  <td><?php echo $key->nama_pend_kk ?></td>
                <td><?php echo $key->nama_pekerjaan ?></td>


                <td><a class="btn btn-danger" href="#" onclick="hapusanggota('<?php echo $key->id?>')"><i class="fa fa-trash-o" title="Active menu"></i></a></td>
              </tr>
            <?php endforeach; ?>

                            <tfoot>
                            <tr>
                              <th class="info">Nama</th>
                              <th class="info">NIK</th>


                              <th class="info">Jenis Kelamin</th>
                              <th class="info">Tempat Lahir</th>
                              <th class="info">Tanggal Lahir</th>
                              <th class="info">Umur</th>
                              <th class="info">Agama</th>
                              <th class="info">Pendidikan</th>
                              <th class="info">Pekerjaan</th>

                              <th class="danger">Action</th>
                            </tr>
                            </tfoot>
                          </table>
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
