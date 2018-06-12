 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Tamplet Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved. Develop &copy; <?php echo date('Y')?> By <a>Casudin</a>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
           
           
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo tema()?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->

<script src="<?php echo tema()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo tema()?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo tema()?>data.js"></script>
<script src="<?php echo tema()?>data2.js"></script>
<script src="<?php echo tema()?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo tema()?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo tema()?>iCheck/icheck.min.js"></script>
<script src="<?php echo tema()?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->

<script src="<?php echo tema()?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo tema()?>dist/js/demo.js"></script>
<script src="<?php echo tema()?>bower_components/select2/dist/js/select2.js"></script>
<script src="<?php echo tema()?>bootstrap-sweetalert-master/dist/sweetalert.min.js"></script>
 <script>
function angka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

  return false;
  return true;
}


</script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      "processing": true,
      "responsive": true,
       "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      "pageLength": 5 
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  function show() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
  $(document).ready(function(){
   $('#data-table').dataTable({
    "bJQueryUI": true,
    "sPaginationType": "full_numbers",
    "sDom": '<""l>t<"F"fp>'
  });  
  $('.sidebar-menu').tree();
  $('#select').select2({});
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
  
});
</script>

<?php
if ($this->session->flashdata('susscess')):
  ?>
<script>
swal("Selamat!", "Data Berhasil Di Simpan!", "success")</script>
<?php endif;?>

<?php
if ($this->session->flashdata('access')):
  ?>
<script>
swal("Akses Di Tolak!", "Anda Tidak Di Ijinkan Akses!", "error")</script>
<?php endif;?>
 
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script type="text/javascript">
    function nonactive($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakin?",
    text: " !"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('api/nonactivemenu/') ?>";

          if (!isConfirm) return;
          $.ajax({
              url: url1+id,
              type: "POST",

              dataType: "HTML",
              success: function () {
                  setTimeout(function () {
                      swal(" request finished!");
                      window.location.reload();
            }, 2000);


              },
              error: function (xhr, ajaxOptions, thrownError) {
                  swal("Error Update!", "Anda Tidak Punya Akses!", "error");
              }

          });

    });
    }

    </script>
    <script type="text/javascript">
    function nonactiveuser($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakin?",
    text: " !"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('api/nonactiveuser/') ?>";

          if (!isConfirm) return;
          $.ajax({
              url: url1+id,
              type: "POST",

              dataType: "HTML",
              success: function () {
                  setTimeout(function () {
                      swal(" request finished!");
                      window.location.reload();
            }, 2000);


              },
              error: function (xhr, ajaxOptions, thrownError) {
                  swal("Error Update!", "Anda Tidak Punya Akses!", "error");
              }

          });

    });
    }

    </script>
    <script type="text/javascript">
    function activeuser($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakin?",
    text: " !"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('api/activeuser/') ?>";

          if (!isConfirm) return;
          $.ajax({
              url: url1+id,
              type: "POST",

              dataType: "HTML",
              success: function () {
                  setTimeout(function () {
                      swal(" request finished!");
                      window.location.reload();
            }, 2000);


              },
              error: function (xhr, ajaxOptions, thrownError) {
                  swal("Error Update!", "Anda Tidak Punya Akses!", "error");
              }

          });

    });
    }

    </script>
    <script>
function hapuspermission($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakin?",
    text: " !"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('api/hapuspermission/') ?>";

          if (!isConfirm) return;
          $.ajax({
              url: url1+id,
              type: "POST",

              dataType: "HTML",
              success: function () {
                  setTimeout(function () {
                      swal(" request finished!");
                      window.location.reload();
            }, 2000);


              },
              error: function (xhr, ajaxOptions, thrownError) {
                  swal("Error Update!", "Anda Tidak Punya Akses!", "error");
              }

          });

    });
    }
    </script>
    <script type="text/javascript">
    function hapusgroup($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakin?",
    text: " !"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('api/hapusgroup/') ?>";

          if (!isConfirm) return;
          $.ajax({
              url: url1+id,
              type: "POST",

              dataType: "HTML",
              success: function () {
                  setTimeout(function () {
                      swal(" request finished!");
                      window.location.reload();
            }, 2000);


              },
              error: function (xhr, ajaxOptions, thrownError) {
                  swal("Error Update!", "Anda Tidak Punya Akses!", "error");
              }

          });

    });
    }

    </script>
    <script type="text/javascript">
    function hapusmenu($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakin?",
    text: " !"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('api/hapusmenu/') ?>";

          if (!isConfirm) return;
          $.ajax({
              url: url1+id,
              type: "POST",

              dataType: "HTML",
              success: function () {
                  setTimeout(function () {
                      swal(" request finished!");
                      window.location.reload();
            }, 2000);


              },
              error: function (xhr, ajaxOptions, thrownError) {
                  swal("Error Update!", "Anda Tidak Punya Akses!", "error");
              }

          });

    });
    }

    </script>
    <script type="text/javascript">
    function activemenu($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakin?",
    text: "!"+id,
    type: "warning",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true
    },


     function (isConfirm) {



        var url1= "<?php echo site_url('api/activemenu/') ?>";

          if (!isConfirm) return;
          $.ajax({
              url: url1+id,
              type: "POST",

              dataType: "HTML",
              success: function () {
                  setTimeout(function () {
                      swal(" request finished!");
                      window.location.reload();
            }, 2000);


              },
              error: function (xhr, ajaxOptions, thrownError) {
                  swal("Error Update!", "Anda Tidak Punya Akses!", "error");
              }

          });

    });
    }

    </script>
</body>
</html>
