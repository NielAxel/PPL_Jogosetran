<div class="container-fluid mt-3">
      <div class="card">
         <div class="card-header bg-info text-white">
            <h3 class="card-title"> Tambah Warta</h3>
         </div>
         <div class="card-body">
            <form id="form-add-warta" action="<?= site_url('warta/insert')?>" method="post">
               <div class="form-group">
                  <label for="">Judul Warta</label>
                  <input required class="form-control col-5" name="judul_warta" placeholder="Masukan Judul Warta "
                     type="text">
               </div>
               <div class="form-group">
                  <label for="">Jenis Warta</label> 
                  <!-- <input required class="form-control col-5" name="jenis_warta" placeholder="Masukan Jenis Warta"
                     type="text"> -->
                     <select class="form-select" name="jenis_warta" aria-label="Floating label select example">
                           <option selected disabled>Masukan Jenis Warta</option>
                           <option value="Laporan Persembahan dan Keuangan">LPK</option>
                           <option value="Informasi Duka">DUKA</option>
                           <option value="Informasi Suka">SUKA</option>
                           <option value="Informasi Khotbah">KHOTBAH</option>
                     </select>
               </div>
               <div class="form-group">
                  <label for="">Tanggal Warta</label>
                  <input required class="form-control col-5" name="tgl_warta" placeholder="Masukan Tanggal Warta"
                     type="date">
               </div>
         </div>
         <div class="card-footer">
            <a class="btn btn-primary" href="<?= site_url('warta/index')?>">Kembali</a>
            <button class="btn btn-success" id="btn-save-warta">
               <i class="fa fa-save"></i>
               Simpan Data Warta
            </button>
         </div>
         </form>
      </div>
   </div>