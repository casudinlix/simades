<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

        <small>Detil Data Warga</small>
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
                Data Diri
              </a>
            </li>

            <li>
              <a data-toggle="tab" href="#faq-tab-2">
                <i class="fa fa-graduation-cap bigger-120"></i>
                Pendidikan
              </a>
            </li>

            <li>
              <a data-toggle="tab" href="#faq-tab-3">
                <i class="fa fa-users bigger-120"></i>
                Keluarga
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#faq-tab-4">
                <i class="fa fa-road bigger-120"></i>
                Alamat Dll
              </a>
            </li>


          </ul>
          <div class="tab-content no-border padding-24">
            <div id="faq-tab-1" class="tab-pane fade in active">


              <div class="space-8"></div>

              <div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
    <input type="text" class="form-control" placeholder="NIK" name="nik" onkeypress="return angka(event)" required="" value="<?php echo $warga->nik?>" readonly>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor KK</label>
 <select name="kk" disabled class="col-sm-6 control-label select" data-placeholder="Pilih"    style="width: 100%;">
<option value="<?php echo $warga->id_kk?>" ><?php echo $warga->no_kk?></option>
    <?php foreach ($kk as $key): ?>
  <option value="<?php echo $key->id?>"><?php echo $key->no_kk." | ".$key->nama?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
<input type="text" disabled class="form-control" placeholder="Nama" name="nama" onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $warga->nama?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <?php if ($warga->jk=="Laki-Laki"): ?>
                        <input disabled type="radio" class="minimal" name="jk" value="Laki-Laki" checked disabled>
                        Laki-Laki
                      <?php else: ?>
                    <input disabled type="radio" class="minimal" name="jk" value="Laki-Laki">
                      Laki-Laki
                    <?php endif;?>
                    <?php if ($warga->jk=="Perempuan"): ?>
                      <input disabled type="radio" class="minimal" name="jk" value="Perempuan" checked>
                      Perempuan
                    <?php else: ?>
                      <input disabled type="radio" class="minimal" name="jk" value="Perempuan">
                      Perempuan
                    <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
  <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir" disabled value="<?php echo $warga->tempatlahir?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
  <input disabled type="text" class="form-control" placeholder="Tanggal Lahir" name="ttl" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask   required="" autocomplete="off" value="<?php echo $warga->tanggallahir?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">RT / RW</label>
  <select disabled name="rtrw" class="col-sm-6 control-label select" data-placeholder="Pilih"
                        style="width: 100%;">
<option value="<?php echo $warga->rtrw_id?>"><?php echo $warga->rtrw?></option>
                          <?php foreach ($rt as $key): ?>
                      <option value="<?php echo $key->id?>"><?php echo $key->rtrw." | ".$key->blok?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Agama</label>
<select disabled name="agama" class="col-sm-6 control-label select" data-placeholder="Pilih" style="width: 100%;">
  <option value="<?php echo $warga->agama_id?>"><?php echo $warga->nama_agama?></option>
        <?php foreach ($agama as $key): ?>

    <option value="<?php echo $key->id?>"><?php echo $key->nama_agama?></option>
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
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Pendidikan</label>
      <select disabled name="statuspend" class="form-control select" data-placeholder="Pilih" style="width: 100%;">
<option value="<?php echo $warga->pendidikan_id?>"><?php echo $warga->status_pendidikan?></option>
<?php foreach ($statuspend as $key): ?>
<option value="<?php echo $key->id?>"><?php echo $key->nama_pendidikan?></option>
<?php endforeach; ?>
</select>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pendidikan Terakhir</label>
<select disabled name="pendterkahir" class="form-control select" data-placeholder="Pilih" style="width: 100%;">
<option value="<?php echo $warga->pendidikan_kk_id?>"><?php echo $warga->nama_pend_kk?></option>
                    <?php foreach ($pend as $key): ?>
                    <option value="<?php echo $key->id?>"><?php echo $key->nama_pend_kk?></option>
                    <?php endforeach; ?>
                    </select>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pekerjaan</label>
  <select disabled name="pekerjaan" class="form-control select" style="width: 100%;" data-placeholder="Pilih">
<option value="<?php echo $warga->pekerjaan_id?>"><?php echo $warga->nama_pekerjaan?></option>
                    <?php foreach ($pekerjaan as $key): ?>
                    <option value="<?php echo $key->id?>"><?php echo $key->nama_pekerjaan?></option>
                    <?php endforeach; ?>
                    </select>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div id="faq-tab-3" class="tab-pane fade">


              <div class="space-8"></div>

              <div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Perkawinan</label>
    <select disabled name="kawin" class="form-control select" style="width: 100%;" data-placeholder="Pilih">
<option value="<?php echo $warga->status_kawin?>"><?php echo $warga->nama_kawin?></option>
                    <?php foreach ($kawin as $key): ?>
    <option value="<?php echo $key->id?>"><?php echo $key->nama_kawin?></option>
                    <?php endforeach; ?>
                    </select>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Warga Negara</label>
                    <select disabled name="wn" class="form-control select" style="width: 100%;">
                <option value="<?php echo $warga->warganegara_id?>"><?php echo $warga->nama_wn?></option>
                    <?php foreach ($wn as $key): ?>
                    <option value="<?php echo $key->id?>"><?php echo $key->nama_wn?></option>
                    <?php endforeach; ?>
                    </select>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama ayah</label>
                    <input disabled type="text" class="form-control" value="<?php echo $warga->nama_ayah ?>" name="namaayah" onkeyup="this.value = this.value.toUpperCase()" required="" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Ibu</label>
<input type="text" disabled class="form-control" value="<?php echo $warga->nama_ibu ?>" name="namaibu" onkeyup="this.value = this.value.toUpperCase()" required="" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK Ayah</label>
                  <input disabled type="text" class="form-control" value="<?php echo $warga->nik_ayah ?>" name="nikayah" onkeypress="return angka(event)" required="" autocomplete="off" maxlength="16">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK Ibu</label>
                  <input disabled type="text" class="form-control" value="<?php echo $warga->nik_ibu ?>" name="nikibu" onkeypress="return angka(event)" required="" autocomplete="off" maxlength="16">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Golongan Darah</label>
                    <select disabled name="goldarah" class="form-control select" style="width: 100%;">
<option value="<?php echo $warga->gol_darah_id?>"><?php echo $warga->nama_gol_darah?></option>
                    <?php foreach ($darah as $key): ?>
                    <option value="<?php echo $key->id?>"><?php echo $key->nama_gol_darah?></option>
                    <?php endforeach; ?>
                    </select>

                    </div>
                  </div>


                </div>
              </div>
            </div>

            <div id="faq-tab-4" class="tab-pane fade">


              <div class="space-8"></div>

              <div id="faq-list-4" class="panel-group accordion-style1 accordion-style2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Sebelumnya</label>
                      <textarea disabled class="form-control" placeholder="Alamat Sebelumnya" name="alamatsebelumnya" onkeyup="this.value = this.value.toUpperCase()" required="" autocomplete="off"><?php echo $warga->alamat_sebelumnya?></textarea>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Sekarang</label>
                      <textarea disabled class="form-control" placeholder="Alamat Sekarang" name="alamatsekarang" onkeyup="this.value = this.value.toUpperCase()" required="" autocomplete="off"><?php echo $warga->alamat_sekarang?></textarea>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Telphone</label>
                    <input disabled type="text" class="form-control" value="<?php echo $warga->telepon?>" name="tlp" onkeypress="return angka(event)" required="" autocomplete="off" maxlength="16">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Warga</label>
        <select disabled name="statuswarga" class="form-control select" style="width: 100%;">
<option value="<?php echo $warga->status_id?>"><?php echo $warga->status_warga?></option>
                    <?php foreach ($status as $key): ?>
                    <option value="<?php echo $key->id?>"><?php echo $key->nama_status?></option>
                    <?php endforeach; ?>
                    </select>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<input type="hidden" name="id" value="<?php echo base64_decode($this->uri->segment(5))?>">
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo site_url('home/master/warga') ?>" class="btn btn-default">Kembali</a>
           
        </div>
        </form>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
