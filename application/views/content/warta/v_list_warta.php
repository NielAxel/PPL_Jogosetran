<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-info text-white">
         <h3 class="bg-blue">WARTA GEREJA</h3>
      </div>
      <div class=" card-body">
         <a class="btn btn-outline-info mb-3" href="<?= base_url('warta/tambah') ?>">
            <i class="fa fa-plus"></i>
            Tambah Warta
         </a>
         <table class=" table table-bordered  table-hover">
            <thead class="table-dark text-white">
               <tr>
                  <th>Nomor</th>
                  <th>Judul Warta</th>
                  <th>Jenis Warta</th>
                  <th>Tanggal Warta</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               foreach ($wartas as $w) {
               ?>
                  <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $w->judul_warta  ?></td>
                     <td><?= $w->jenis_warta ?></td>
                     <td><?= $w->tgl_warta ?></td>
                     <td>

                        <a href="<?= site_url("warta/ubah/$w->kd_warta") ?>" class="btn btn-sm btn-warning">
                           <i class="fa fa-edit"></i>
                        </a>
                        <a href="<?= site_url("warta/hapus/$w->kd_warta") ?>" data-id="<?= $w->kd_warta ?>" class="btn btn-sm btn-danger btn-delete-warta">
                           <i class="fa fa-trash"></i>
                        </a>


                     </td>
                  </tr>
               <?php
               }
               ?>

            </tbody>
         </table>
      </div>
   </div>
</div>

<div class="modal" id="modal-confirm-delete">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <h4>Anda Yakin Hapus data ini?</h4>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
            <button type="button" class="btn btn-danger" id="btn-delete">Hapus</button>
         </div>
      </div>
   </div>
</div>
<form id="form-delete" method="post" action="<?= site_url('warta/delete') ?>">

</form>