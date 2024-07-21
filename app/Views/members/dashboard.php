<!DOCTYPE html>
<html>

<head>
    <title>Member Dashboard</title>
</head>

<body>
    <h1>Welcome to your Dashboard</h1>

    <?php if (!empty($notifications)) : ?>
        <div class="notifications">
            <?php foreach ($notifications as $notification) : ?>
                <div class="notification"><?= $notification ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Jumlah</th>
                <th>Tgl Pinjam</th>
                <th>Tenggat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loans as $index => $loan) : ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $member['first_name'] . ' ' . $member['last_name'] ?></td>
                    <td><?= $loan['title'] ?></td>
                    <td><?= $loan['quantity'] ?></td>
                    <td><?= $loan['loan_date'] ?></td>
                    <td><?= $loan['due_date'] ?></td>
                    <td><?= $loan['return_date'] ? 'Returned' : 'Not Returned' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>