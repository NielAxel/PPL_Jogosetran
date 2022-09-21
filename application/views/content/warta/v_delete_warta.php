<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-info text-white">
         <h3 class="card-title">Hapus Warta</h3>
      </div>
      <div class="card-body">
         <form id="form-delete-gembala" action="<?= site_url('warta/delete') ?>" method="post">
            <div class="form-group">
               <label for="">Judul Warta</label>
               <input value="<?= $wartas->judul_warta ?>" readonly class="form-control col-5" 
               name="judul_warta" placeholder="Masukan Nama gembala " type="text">
            </div>


            <input type="hidden" name="kd_warta" value="<?= $wartas->kd_warta ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-info" href="<?= site_url('warta') ?>">Batal</a>
         <button class="btn btn-danger" id="btn-warta-gembala">
            <i class="fa fa-trash-alt"></i>
            Hapus Data Gembala
         </button>
      </div>
      </form>
   </div>
</div>

<script>
   $(function() {
      $("#btn-delete-gembala").on("click", function() {
         let validate = $("#form-delete-gembala").valid()
         if (validate) {
            $("#form-delete-gembala").submit()
         }
      })
      $("#form-delete-gembala").validates({
         rules: {
            harga_barang: {
               digits: true
            },
            jumlah_barang: {
               digits: true
            }
         },
         errorElement: 'span',
         errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
         },
         highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid')
         }
      })
   })
</script>