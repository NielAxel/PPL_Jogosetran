<?= $this->session->flashdata('pesan'); ?>
<div class="container-fluid mt-3">
   <div class="card">
      <div class=" card-header bg-info text-width">
      <h3 class=" card-title">Data Gereja</h3>
   </div>
      <div class="card-body">
         <a class="btn btn-outline-info mb-3" href="<?= base_url('datagereja/tambah') ?>">
            <i class="fa fa-plus"></i>
            Tambah Data Gereja
         </a>
         <table class="table table-bordered table-sm table-hover">
            <thead>
               <tr style=" text-align: center ;">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Deskripsi</th>
                  <th>Alamat</th>
                  <th>No Handphone</th>
                  <th>Sosial Media</th>
                  <th>Email</th>
                  <th>Url Logo</th>
                  <th>Action</th>
               </tr>

            </thead>
            <tbody>
               <?php
               $no = 1;
               foreach ($datagerejas as $g) {
               ?>
                  <tr>
                     <td><?= $no++ ?></td>
                     <td style=" width: 200px ;"><?= $g->nama_gereja ?></td>
                     <td style="width: 200px ;"><?= $g->tgl_berdiri_gereja ?></td>
                     <td style="width: 200px ;"><?= $g->visi_gereja ?></td>
                     <td style="width: 200px ;"><?= $g->misi_gereja ?></td>
                     <td><?= $g->deskripsi_gereja ?></td>
                     <td><?= $g->alamat ?></td>
                     <td><?= $g->no_hp ?></td>
                     <td><?= $g->sosmed ?></td>
                     <td><?= $g->email ?></td>
                     <td><?= $g->url_logo_gereja ?></td>
                     <td style="width: 300px;">
                        <a class=" btn btn-sm btn-warning" href="<?= base_url("datagereja/ubah/$g->id_gereja") ?>">
                           <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="<?= base_url("datagereja/hapus/$g->id_gereja") ?>">
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