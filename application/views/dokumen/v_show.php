<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Data Dokumen</h3>
        </div>
        <div class="card-footer">
            <a href="<?= site_url('dokumen/create') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>Tambah Dokumen
            </a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Dokumen</th>
                        <th>Jenis Dokumen</th>
                        <th>Deskripsi Dokumen</th>
                        <th>Tanggal Dokumen</th>
                        <th>Dokumen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dokumen as $d) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d->nama_dokumen  ?></td>
                            <td><?= $d->jns_dokumen ?></td>
                            <td><?= $d->deskripsi ?></td>
                            <td><?= $d->tgl_dokumen ?></td>
                            <td><?= $d->file ?></td>
                            <td a href="https://www.bukalapak.com/products/s/wallpaper-gambar-tuhan-yesus" a></td>
                            <td>
                                <a href="<?= site_url("dokumen/edit/$d->no_dokumen") ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" data-id="<?= $d->no_dokumen ?>" class="btn btn-danger btn-sm btn-delete-dokumen">
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