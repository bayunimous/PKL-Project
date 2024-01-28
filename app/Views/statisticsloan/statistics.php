<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('head') ?>
<title>Statistik Peminjaman</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Data Anggota Teraktif</h5>

        <?php if (!empty($topBorrowers)) : ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama peminjam</th>
                            <th scope="col" class="text-center">Jumlah Peminjaman</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($topBorrowers as $key => $borrower) : ?>
                            <tr>
                                <th scope="row"><?= $key + 1; ?></th>
                                <td><?= $borrower['first_name'] . ' ' . $borrower['last_name']; ?></td>
                                <td class="text-center"><?= $borrower['total_loans']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <p>Tidak ada data statistik peminjaman yang tersedia.</p>
        <?php endif; ?>

    </div>
</div>
<?= $this->endSection() ?>