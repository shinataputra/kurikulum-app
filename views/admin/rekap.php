<?php
$namaUser = $_SESSION['nama'] ?? 'Admin';
$logoutUrl = 'index.php?url=auth/logout';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rekap Surat Ijin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: auto;
        }

        h2 {
            margin-top: 0;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logout-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: #222;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="top-bar">
            <h2>Rekap Surat Ijin - <?= htmlspecialchars($namaUser) ?></h2>
            <form action="<?= $logoutUrl ?>" method="post" style="margin:0;">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jam ke</th>
                <th>Keperluan</th>
                <th>Tanggal</th>
            </tr>
            <?php foreach ($data as $i => $surat): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= htmlspecialchars($surat['nama']) ?></td>
                    <td><?= htmlspecialchars($surat['kelas']) ?></td>
                    <td><?= htmlspecialchars($surat['jam_ke']) ?></td>
                    <td><?= htmlspecialchars($surat['keperluan']) ?></td>
                    <td><?= $surat['tanggal'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>