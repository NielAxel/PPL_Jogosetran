<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-info text-width">
      <h3 class="card-title">Form Ubah Data Gereja</h3>
   </div>
      <div class="card-body">
         <form action="<?= base_url('datagereja/update') ?>" method="POST">
            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <label for="">Nama Gereja</label>
                     <input type="text" class="form-control col-10" value="<?= $datagerejas->nama_gereja ?>" name="nama_gereja" required placeholder="Masukan Nama Gereja">
                  </div>
                  <div class="form-group">
                     <label for="">Tanggal Berdiri Gereja</label>
                     <input type="date" class="form-control col-10" value="<?= $datagerejas->tgl_berdiri_gereja ?>" name="tgl_berdiri_gereja" required placeholder="mm/dd/yyyy">
                  </div>
                  <div class="form-group">
                     <label for="">Visi Gereja</label>
                     <input type="text" class="form-control col-10" value="<?= $datagerejas->visi_gereja ?>" name="visi_gereja" required placeholder="Masukan visi gereja">
                  </div>
                  <div class="form-group">
                     <label for="">Misi Gereja</label>
                     <input type="text" class="form-control col-10" value="<?= $datagerejas->misi_gereja ?>" name="misi_gereja" required placeholder="Masukan misi gereja">
                  </div>
                  <div class="form-group">
                     <label for="">Deskripi Gereja</label>
                     <textarea class="form-control col-10" value="<?= $datagerejas->deskripsi_gereja ?>" name="deskripsi_gereja" cols="30" rows="10" placeholder="Masukan deskripsi gereja"></textarea>
                  </div>
               </div>
               <div class="col-6">
                  <div class="from-group">
                     <label for="">Alamat</label>
                     <input class="form-control col-10" type="text" value="<?= $datagerejas->alamat ?>" name="alamat" required placeholder="Masukan alamat">
                  </div>

                  <div class="from-group">
                     <label for="">No Handphone</label>
                     <input class="form-control col-10" type="text" value="<?= $datagerejas->no_hp ?>" name="no_hp" required placeholder="Masukan No Handphone">
                  </div>
                  <div class="form-group">
                     <label for="">Sosial Media</label>
                     <input type="text" class="form-control col-10" value="<?= $datagerejas->sosmed ?>" name="sosmed" required placeholder="Masukan Sosial Media">
                  </div>

                  <div class="form-group">
                     <label for="">Email</label>
                     <input type="text" class="form-control col-10" value="<?= $datagerejas->email ?>" name="email" required placeholder="Masukan Email">
                  </div>

                  <div class="form-group">
                     <label for="">Url Logo Gereja</label>
                     <input type="text" class="form-control col-10" value="<?= $datagerejas->url_logo_gereja ?>" name="url_logo_gereja" required placeholder="Masukan Url Logo gereja">
                  </div>
                  <input type="hidden" name="id_gereja" value="<?= $datagerejas->id_gereja ?>">
               </div>
            </div>
      </div>
      <div class="card-footer">
         <a class="btn btn-info" href="<?= base_url('datagereja') ?>">
            Kembali
         </a>
         <button class="btn btn-warning">
            <i class="fa fa-edit"></i>
            Update
         </button>
      </div>
      </form>
   </div>
</div>