<html>

<head>
    <title>Form Pengumuman</title>
    <!-- CSS only CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- JQuery and Javascript CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
    <!-- JQuery Validation CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h3>Form Add Pengumuman</h3>
        </div>
        <div class="card-body">
            <form id="form-tambah-pengumuman" method="post" action="<?= site_url('pengumuman/update') ?>" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label class="form-label">Isi Pengumuman</label>
                    <input require type="text" value = <?= $pengumuman->isi_pengumuman ?> class="form-control" name="isi_pengumuman">
                </div>
                <div class="form-group">
                    <label class="form-label">Tanggal Pengumuman</label>
                    <input require type="date" value = <?= $pengumuman->tgl_pengumuman ?> class="form-control" name="tgl_pengumuman">
                </div>
               
                <input type="hidden" name="id_pengumuman" value="<?= $pengumuman->id_pengumuman ?>">
            </form>
        </div>
        <div class="card-footer">
            <button type="button" id="btn-save-pengumuman" class="btn btn-warning btn-sm">
                <i class="fa fa-edit"></i> Simpan
            </button>
            <a href="<?= site_url('pengumuman') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-reply"></i> Kembali
            </a>
        </div>
    </div>
</body>

</html>

<script>
    $(function (){
        $("#btn-save-pengumuman").on("click", function() {
            let validate = $("#form-tambah-pengumuman").valid()
            if (validate) {
                $("#form-tambah-pengumuman").submit()
            }
        })
        $("#form-tambah-pengumuman").validates({
            rules: {
                harga_pengumuman: {
                    digits: true
                },
                jumlah_pengumuman: {
                    digits: true
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            }
        })
    })
</script>
