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
            margin-bottom: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px 8px;
            vertical-align: top;
            /* penting */
            word-wrap: break-word;
            /* DomPDF butuh ini */
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px 8px;
            vertical-align: top;
            word-wrap: break-word;
        }

        .center {
            text-align: center;
        }


        td.center {
            text-align: center;
        }

        td.right {
            text-align: right;
        }
    </style>

</head>

<body>
    <h2>Rekap Surat Izin</h2>
    <p>Periode: <?= htmlspecialchars($dari) ?> s.d. <?= htmlspecialchars($sampai) ?></p>

    <table>
        <thead>
            <tr>
                <th style="width:5%; text-align:center;">No</th>
                <th style="width:20%; text-align:left;">Nama</th>
                <th style="width:8%; text-align:center;">Kelas</th>
                <th style="width:12%; text-align:center;">Tanggal</th>
                <th style="width:30%; text-align:left;">Keterangan</th>
                <th style="width:10%; text-align:center;">Status</th>
                <th style="width:15%; text-align:left;">Diizinkan oleh</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data)) : ?>
                <?php foreach ($data as $i => $row): ?>
                    <tr>
                        <td class="center"><?= $i + 1 ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td class="center"><?= htmlspecialchars($row['kelas']) ?></td>
                        <td class="center"><?= htmlspecialchars($row['tanggal']) ?></td>
                        <td><?= htmlspecialchars($row['keperluan']) ?></td>
                        <td class="center"><?= htmlspecialchars($row['status']) ?></td>
                        <td><?= htmlspecialchars($row['guru_piket'] ?? '') ?></td>
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