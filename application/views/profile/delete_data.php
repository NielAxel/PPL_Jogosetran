<div class="card ">
   <div class="card-header bg-info text-white">
      <h3 class="card-title">Form Hapus Data Gembala</h3>
   </div>
   <div class="card-body">
      <form id="form-delete-gembala" action="<?= site_url('profile/delete') ?>" method="post">
         <div class="form-group">
            <label for="">Nama Gembala</label>
            <input value="<?= $profile->nama_gembala ?>" required class="form-control col-5" name="nama_gembala" placeholder="Masukan Nama gembala " type="text">
         </div>
         <div class="form-group">
            <label for="">Deskripsi Gembala</label>
            <input value="<?= $profile->deskripsi_gembala ?>" required class="form-control col-5" name="deskripsi_gembala" placeholder="Masukan Deskripsi Gembala" type="text">
         </div>
         <div class="form-group">
            <label for="">Riwayat Pendidikan</label>
            <input value="<?= $profile->riwayat_pendidikan ?>" required class="form-control col-5" name="riwayat_pendidikan" placeholder="Masukan Riwayat Pendidikan" type="text">
         </div>
         
         <input type="hidden" name="id_gembala" value="<?= $profile->id_gembala ?>">
   </div>
   <div class="card-footer">
      <a class="btn btn-info" href="<?= site_url('profile') ?>">Batal</a>
      <button class="btn btn-danger" id="btn-delete-gembala">
         <i class="fa fa-trash-alt"></i>
         Hapus Data Gembala
      </button>
   </div>
   </form>
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