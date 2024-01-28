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

    <!-- Main container -->
    <div class="container mt-5">
        <!-- Card for the report -->
        <div class="card">
            <div class="card-body">
                <!-- Report title -->
                <h2 class="card-title fw-bold mb-4 text-center">Laporan Data Peminjaman Buku</h2>

                <!-- Table for displaying data -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <!-- Table header -->
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tenggat</th>
                                <th scope="col">Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <!-- Table body with dynamic data -->
                        <tbody>
                            <?php
                            // Loop through the loans data
                            foreach ($loans as $key => $loan) :
                            ?>
                                <tr>
                                    <!-- Display loan details in each row -->
                                    <th scope="row"><?= $key + 1; ?></th>
                                    <td><?= "{$loan['first_name']} {$loan['last_name']}"; ?></td>
                                    <td><?= "{$loan['title']} ({$loan['year']})"; ?></td>
                                    <td><?= $loan['quantity']; ?></td>
                                    <td><?= $loan['loan_date']; ?></td>
                                    <td><?= $loan['due_date']; ?></td>
                                    <td><?= $loan['return_date'] ?? '-'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- End of table-responsive -->
            </div>
        </div>
        <!-- End of card -->
    </div>
    <!-- End of main container -->

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>