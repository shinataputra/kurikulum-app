<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rekap Surat Izin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <h2>Rekap Surat Izin</h2>
    <p>Periode: <?= htmlspecialchars($dari) ?> s.d. <?= htmlspecialchars($sampai) ?></p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th style="width:50px; text-align:center;">Kelas</th>
                <th style="text-align: center;">Tanggal</th>
                <th>Keterangan</th>
                <th style="text-align:center;">Status</th>
                <th style="text-align:center;">Diizinkan oleh</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data)) : ?>
                <?php foreach ($data as $i => $row): ?>
                    <tr>
                        <td style="text-align: center;"><?= $i + 1 ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td style="text-align: center;"><?= htmlspecialchars($row['kelas']) ?></td>
                        <td style="text-align: center;"><?= htmlspecialchars($row['tanggal']) ?></td>
                        <td><?= htmlspecialchars($row['keperluan']) ?></td>
                        <td style="text-align: center;"><?= $row['status'] ?></td>
                        <td style="text-align: center;"><?= htmlspecialchars($row['guru_piket']) ?></td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Tidak ada data.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</body>

</html>