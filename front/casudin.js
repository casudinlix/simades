function hapuspermission($d) {
    var id = $d;

      swal({
    title: "Apa Anda Yakinss?",
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