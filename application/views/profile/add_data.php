<div class="card">
   <div class="card-header bg-info text-white">
      <h3 class="card-title">Form Tambah Data Gembala</h3>
   </div>
   <div class="card-body">
      <form action="<?= base_url('profile/insert') ?>" method="POST" enctype="multipart/form-data">
         <div class="form-group">
            <label for="">Nama Gembala</label>
            <input type="text" class="form-control" name="nama_gembala" required placeholder="Masukan Nama Gembala">
         </div>
         <div class="form-group">
            <label for="">Deskripsi Gembala</label>
            <input type="text" class="form-control" name="deskripsi_gembala" required placeholder="Masukan Deskripsi Gembala">
         </div>
         <div class="form-group">
            <label for="">Riwayat Pendidikan</label>
            <input type="text" class="form-control" name="riwayat_pendidikan" required placeholder="Masukan Riwayat Pendidikan Gembala">
         </div>
         <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class="form-control" name="userfile" required size="20">
         </div>
   </div>
   <div class=" card-footer">
      <a class="btn btn-info" href="<?= base_url("profile") ?>">Kembali</a>
      <button class="btn btn-success">
         <i class="fa fa-save"></i>
         simpan data gembala
      </button>
   </div>
</div>