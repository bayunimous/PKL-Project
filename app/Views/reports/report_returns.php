<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengembalian</title>
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

    <h2 class="card-title fw-bold mb-4 text-center">Laporan Data Pengembalian Buku</h2>

    <?php if (!empty($loans)) : ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loans as $key => $loan) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $loan['first_name'] . ' ' . $loan['last_name']; ?></td>
                        <td><?= $loan['title']; ?></td>
                        <td><?= $loan['quantity']; ?></td>
                        <td><?= $loan['loan_date']; ?></td>
                        <td><?= $loan['return_date']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Tidak ada data pengembalian.</p>
    <?php endif; ?>

</body>

</html>