<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-info text-width">
      <h3 class="card-title">Form Tambah Data Gereja</h3>
   </div>

      <div class="card-body">
         <form action="<?= base_url('datagereja/insert') ?>" method="POST">
            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <label for="">Nama Gereja</label>
                     <input type="text" class="form-control col-10 " name="nama_gereja" required placeholder="Masukan Nama Gereja">
                  </div>
                  <div class="form-group">
                     <label for="">Tanggal Berdiri Gereja</label>
                     <input type="date" class="form-control col-10" name="tgl_berdiri_gereja" required placeholder="mm/dd/yyyy">
                  </div>
                  <div class="form-group">
                     <label for="">Visi Gereja</label>
                     <input type="text" class="form-control col-10" name="visi_gereja" required placeholder="Masukan visi gereja">
                  </div>
                  <div class="form-group">
                     <label for="">Misi Gereja</label>
                     <input type="text" class="form-control col-10" name="misi_gereja" required placeholder="Masukan misi gereja">
                  </div>
                  <div class="form-group">
                     <label for="">Deskripi Gereja</label>
                     <textarea class="form-control col-10" name="deskripsi_gereja" cols="30" rows="10" placeholder="Masukan deskripsi gereja"></textarea>
                  </div>
               </div>
               <div class="col-6">
                  <div class="from-group">
                     <label for="">Alamat</label>
                     <input class="form-control col-10" type="text" name="alamat" required placeholder="Masukan alamat">
                  </div>

                  <div class="from-group">
                     <label for="">No Handphone</label>
                     <input class="form-control col-10" type="text" name="no_hp" required placeholder="Masukan No Handphone">
                  </div>
                  <div class="form-group">
                     <label for="">Sosial Media</label>
                     <input type="text" class="form-control col-10" name="sosmed" required placeholder="Masukan Sosial Media">
                  </div>

                  <div class="form-group">
                     <label for="">Email</label>
                     <input type="text" class="form-control col-10" name="email" required placeholder="Masukan Email">
                  </div>

                  <div class="form-group">
                     <label for="">Url Logo Gereja</label>
                     <input type="text" class="form-control col-10" name="url_logo_gereja" required placeholder="Masukan Url Logo gereja">
                  </div>
               </div>
            </div>
      </div>
      <div class="card-footer">
         <a class="btn btn-info" href="<?= base_url('datagereja') ?>">
            Kembali
         </a>
         <button class="btn btn-success">
            <i class="fa fa-save"></i>
            Simpan
         </button>
      </div>
      </form>
   </div>
</div>