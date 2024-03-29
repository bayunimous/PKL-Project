<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <style>
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

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title fw-bold mb-4 text-center">Laporan Data Anggota E-PERPUSJAR Teraktif</h2>

                <?php if (!empty($topBorrowers)) : ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Peminjam</th>
                                    <th scope="col" class="text-center">Jumlah Peminjaman</th>
                                </tr>
                            </thead>
                            <tbody>
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
                    <p class="text-center">Tidak ada data statistik peminjaman yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>