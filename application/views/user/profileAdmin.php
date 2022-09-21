<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-8 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->set_flashdata('massage'); ?>
        </div>
    </div>


    <div class="card md-3" >
        <div class="row g-0">
            <div class="col-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">HI, <?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p>Semangat Revisi Data <?= $user['name']; ?> </p>

                </div>

                <card class="footer">
                    <a class=" btn btn-warning btn-sm" href="<?= base_url('user/editProfile') ?>">
                        <i class="fa fa-fw fa-user-edit"></i>
                        edit Profile
                    </a>
                </card>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->