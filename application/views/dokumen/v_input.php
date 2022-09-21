<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Form Add Dokumen</h3>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('dokumen/create_action') ?>
            <div class="form-group">
                <label class="form-label">Nomor Dokumen</label>
                <input require type="text" class="form-control" name="no_dokumen" required="">
            </div>
            <div class="form-group">
                <label class="form-label">Nama dokumen</label>
                <input require type="text" class="form-control" name="nama_dokumen" required="">
            </div>
            <div class="form-group">
                <label class="form-label">Jenis dokumen</label>
                <input require type="text" class="form-control" name="jns_dokumen" required="">
            </div>
            <div class="form-group">
                <label class="form-label">Tanggal dokumen</label>
                <input require type="date" class="form-control" name="tgl_dokumen" required="">
            </div>
            <div class="form-group">
                <label class="form-label">Deskripsi dokumen</label>
                <input require type="text" class="form-control" name="deskripsi" required="">
            </div>
            <div class="form-group">
                <label class="form-label">File Dokumen</label>
                <input require type="file" class="form-control" name="file" size="20" required="">
            </div>
            <button type="submit" id="btn-save-dokumen" class="btn btn-success btn-sm">
                <i class="fa fa-save"></i> Simpan
            </button>
            <a href="<?= site_url('dokumen') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-reply"></i> Kembali </a>
            <?php echo form_close() ?>
        </div>

        <div class="card-footer">

        </div>
    </div>
</div>