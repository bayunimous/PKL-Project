<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <style>
        /* Define any additional styles for the PDF content */
        /* Example: */
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #dddddd;
        }

        .header img {
            max-width: 100px;
            /* Sesuaikan lebar maksimum logo */
            margin-bottom: 10px;
        }

        .header h1 {
            margin-bottom: 0;
        }

        .header p {
            margin-top: 0;
            font-size: 18px;
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
</head>

<body>
    <!-- Header -->
    <div class="header">
        <h1>Dinas Perpustakaan dan Kearsipan<br>Provinsi Kalimantan Selatan</h1>
        <p>Jl. A. Yani Km. 6,400 No. 6, Pemurus Luar<br>Kec. Banjarmasin Timur., Kota Banjarmasin<br>Kalimantan Selatan 70249</p>

    </div>

    <!-- Main content -->
    <h2 class="text-center mb-4">Laporan Data Kategori Buku Terlaris</h2>

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

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>