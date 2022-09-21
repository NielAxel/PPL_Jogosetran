<div class="container-fluid mt-3">
   <div class="card ">
      <div class="card-header bg-info text-width">
      <h3 class="card-title">Form Hapus Data Gereja</h3>
   </div>
      <div class="card-body">
         <form action="<?= base_url('datagereja/delete') ?>" method="POST">
            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <label for="">Nama Gereja</label>
                     <input type="text" class="form-control col-10" value="<?= $datagerejas->nama_gereja ?>" name="nama_gereja" placeholder="Masukan Nama Gereja" readonly>
                  </div>

                  <input type="hidden" name="id_gereja" value="<?= $datagerejas->id_gereja ?>">
               </div>
            </div>
      </div>
      <div class="card-footer">
         <a class="btn btn-info" href="<?= base_url('datagereja') ?>">
            Kembali
         </a>
         <button class="btn btn-danger">
            <i class="fa fa-trash-alt"></i>
            Delete
         </button>
      </div>
      </form>
   </div>
</div>