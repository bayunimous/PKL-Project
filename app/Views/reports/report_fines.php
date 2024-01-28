<!-- views/fines/report_fines.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan */
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

        .card {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .table th {
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

    <!-- Content -->
    <div class="card">
        <div class="card-body">
            <h2 class="card-title fw-bold mb-4 text-center">Laporan Denda Anggota</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Peminjam</th>
                            <th>Judul Buku</th>
                            <th>Denda Dibayar</th>
                            <th>Jumlah Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fines as $fine) : ?>
                            <tr>
                                <td><?= $fine['first_name'] . ' ' . $fine['last_name'] ?></td>
                                <td><?= $fine['title'] ?></td>
                                <td>Rp<?= $fine['amount_paid'] ?? 0 ?></td>
                                <td>Rp<?= $fine['fine_amount'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>