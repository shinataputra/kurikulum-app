<!DOCTYPE html>
<html>

<head>
    <title>Rekap Surat Ijin</title>
</head>

<body>
    <h2>Rekap Surat Ijin Siswa</h2>
    <table border="1" cellpadding="5">
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
</body>

</html>