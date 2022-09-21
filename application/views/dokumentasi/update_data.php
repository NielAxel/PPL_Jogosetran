<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-info text-width">
      <h3 class="card-title">Form Ubah Dokumentasi Gereja</h3>
   </div>
      <div class="card-body">
         <form action="<?= base_url('dokumentasi/update') ?>" method="post" enctype="multipart/form-data">
            <div class=" form-group">
               <label for="">Judul Dokumentasi</label>
               <input type="text" name="judul_dokumentasi" class="form-control col-5" value="<?= $dokumentasis->judul_dokumentasi ?>">
            </div>
            <div class="form-group">
               <label for="">Deskripsi Dokumentasi</label>
               <input type="text" class="form-control col-5" value="<?= $dokumentasis->deskripsi_dokumentasi ?>" name="deskripsi_dokumentasi" required placeholder="Masukan Deskripsi Dokumentasi">
            </div>
            <div class="form-group">
               <label for="">Tanggal Dokumentasi</label>
               <input type="date" class="form-control col-5" value="<?= $dokumentasis->tanggal_dokumentasi ?>" name="tanggal_dokumentasi" required placeholder="Masukan Judul Dokumentasi">
            </div>
            <div class="form-group">
               <label for="exampleFormControlFile1">Pilih Gambar</label>
               <input type="file" value="<?= $dokumentasis->gambar ?>" class="form-control col-5" name="userfile" size="20" />
            </div>
            <input type="hidden" name="id_dokumentasi" value="<?= $dokumentasis->id_dokumentasi ?>">
      </div>
      <div class="card-footer">
         <a class="btn btn-info" href="<?= base_url('dokumentasi') ?>">Kembali</a>
         <button class="btn btn-warning">
            <i class="fa fa-edit"></i>
            Ubah Dokumentasi
         </button>
      </div>
      </form>
   </div>
</div>