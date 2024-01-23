<!-- Views/loans/pdf/book_category_statistics.php -->

<style>
    /* Define any additional styles for the PDF content */
    /* Example: */
    body {
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<h2 class="text-center mb-4">Statistik Peminjaman Berdasarkan Kategori Buku</h2>

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