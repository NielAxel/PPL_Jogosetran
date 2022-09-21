<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
   <div class="card">
      <div class="card-header bg-info text-width">
      <h3 class="card-title">Dokumentasi Gereja</h3>
   </div>
      <div class="card-body">
         <a class="btn btn-outline-info mb-3" href="<?= base_url('dokumentasi/tambah') ?>">
            <i class="fa fa-plus"></i>
            Tambah Data Dokumentasi Gereja
         </a>
         <table class="table table-bordered table-striped">
            <thead>
               <th>No</th>
               <th>Judul Dokumentasi</th>
               <th>Deskripsi Dokumentasi</th>
               <th>Tanggal Dokumentasi</th>
               <th>Gambar</th>
               <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               foreach ($dokumentasis as $dokument) {
               ?>
                  <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $dokument->judul_dokumentasi ?></td>
                     <td><?= $dokument->deskripsi_dokumentasi ?></td>
                     <td><?= $dokument->tanggal_dokumentasi ?></td>
                     <td><img src="<?= base_url() . '/gambar/' . $dokument->gambar ?> " width="200px;"></td>
                     <td>
                        <a class=" btn btn-sm btn-warning" href="<?= base_url("dokumentasi/ubah/$dokument->id_dokumentasi") ?>">
                           <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="<?= base_url("dokumentasi/hapus/$dokument->id_dokumentasi ") ?>">
                           <i class="fa fa-trash-alt"></i>
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