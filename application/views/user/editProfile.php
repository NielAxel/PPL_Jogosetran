<div class="container-fluid">

    <h1 class="h3 mb-4"> <?= $title ?></h1>



    <div class="row">
        <div class="col-lg-8">

            <form action="<?= base_url('user/editProfile') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="name" name="name" placeholder="Inputkan Nama Anda" value="<?= $user['name'] ?>">
                        <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') .
                                                $user['image'];
                                            ?>" class="img-thumbnail">
                            </div>
                            <input type="file" id="image" name="image">
                        </div>
                    </div>
                </div>
                
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>





    </div>

</div>

</div>