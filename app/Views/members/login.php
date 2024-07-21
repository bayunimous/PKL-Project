<!-- app/Views/members/login.php -->
<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Member Login</title>
<?= $this->endSection() ?>

<?= $this->section('back'); ?>
<a href="<?= base_url(); ?>" class="btn btn-outline-primary m-3 position-absolute">
    <i class="ti ti-arrow-left"></i>
    Kembali
</a>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center p-5">
    <div class="card col-12 col-md-5 shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-5">Member Login</h5>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php if (is_array(session()->getFlashdata('errors'))) : ?>
                        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                            <?= $error ?><br>
                        <?php endforeach ?>
                    <?php else : ?>
                        <?= session()->getFlashdata('errors') ?>
                    <?php endif ?>
                </div>
            <?php endif ?>

            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success" role="alert"><?= session()->getFlashdata('message') ?></div>
            <?php endif ?>

            <form action="<?= url_to('member/login') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Email -->
                <div class="mb-2">
                    <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="Email" value="<?= old('email') ?>" required />
                </div>

                <!-- Password -->
                <div class="mb-2">
                    <input type="password" class="form-control" name="password" inputmode="text" autocomplete="current-password" placeholder="Password (Phone Number)" required />
                </div>

                <div class="d-grid col-12 mx-auto m-3">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>