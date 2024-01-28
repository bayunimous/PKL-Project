<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('head') ?>
<title>Statistik Peminjaman Berdasarkan Kategori Buku</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Data Kategori Buku Terlaris</h5>
        <table class="table table-hover table-striped">
            <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori Buku</th>
                    <th scope="col" class="text-center">Jumlah Peminjaman</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php if (empty($statistics)) : ?>
                    <tr>
                        <td class="text-center" colspan="3"><b>Tidak ada data</b></td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($statistics as $key => $statistic) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1; ?></th>
                            <td><?= $statistic['category'] ?? 'N/A'; ?></td>
                            <td class="text-center"><?= $statistic['total_loans'] ?? 0; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>