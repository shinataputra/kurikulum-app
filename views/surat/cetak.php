<!DOCTYPE html>
<html>

<head>
    <title>Cetak Surat Ijin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .kop {
            text-align: center;
            margin-bottom: 20px;
        }

        .kop h2 {
            margin: 0;
            font-size: 22px;
        }

        .kop p {
            margin: 2px 0;
            font-size: 12px;
        }

        .row {
            display: flex;
            gap: 15px;
        }

        .kolom-surat {
            flex: 2.5;
            border: 1px solid #aaa;
            padding: 18px;
            box-sizing: border-box;
        }

        .kolom-info {
            flex: 1.2;
            border: 1px solid #aaa;
            padding: 15px;
            box-sizing: border-box;
            font-size: 13px;
        }

        h3 {
            margin-top: 0;
        }

        .ttd {
            margin-top: 40px;
        }

        .ttd table {
            width: 100%;
            text-align: center;
        }

        .ttd .label {
            font-weight: bold;
            padding-bottom: 10px;
        }

        .garis-ttd {
            border-bottom: 1px dashed #333;
            width: 90%;
            margin: 35px auto 5px auto;
            height: 0;
        }

        .tanggal {
            text-align: right;
            margin-top: 20px;
            font-size: 14px;
        }

        ul {
            padding-left: 20px;
        }

        .split {
            border-top: 2px dashed #333;
            margin: 40px 0;
        }

        @media print {
            body {
                margin: 0;
                padding: 10mm;
            }
        }
    </style>
</head>

<body onload="window.print()">

    <?php if (isset($surat) && $surat): ?>

        <!-- KOP -->
        <div class="kop">
            <h2>SMK NEGERI 1 PROBOLINGGO</h2>
            <p>Jl. Mastrip No.357, Kademangan, Jrebeng Wetan, Kec. Kedopok, Kota Probolinggo, Jawa Timur 67239</p>
        </div>

        <div class="row">
            <!-- Surat -->
            <div class="kolom-surat">
                <h3>Surat Ijin Siswa</h3>
                <p>Nama: <?= htmlspecialchars($surat['nama']) ?></p>
                <p>Kelas: <?= htmlspecialchars($surat['kelas']) ?></p>
                <p>Jam ke: <?= htmlspecialchars($surat['jam_ke']) ?></p>
                <p>Keperluan: <?= htmlspecialchars($surat['keperluan']) ?></p>

                <div class="tanggal">Probolinggo, <?= date('d-m-Y') ?></div>

                <div class="ttd">
                    <table>
                        <tr>
                            <td class="label">Guru Piket</td>
                            <td class="label">Guru Mapel</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="garis-ttd"></div>
                            </td>
                            <td>
                                <div class="garis-ttd"></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Himbauan -->
            <div class="kolom-info">
                <h3>Peraturan Saat Ijin</h3>
                <ul>
                    <li>Wajib lapor ke guru piket sebelum keluar.</li>
                    <li>Hanya berlaku hari ini.</li>
                    <li>Kembali setelah keperluan selesai.</li>
                    <li>Dilarang disalahgunakan.</li>
                    <li>Pelanggaran akan diberi sanksi.</li>
                </ul>

                <h3>Catatan</h3>
                <ul>
                    <li>Bawa surat ini saat keluar gerbang.</li>
                    <li>Serahkan ke satpam.</li>
                </ul>
            </div>
        </div>

        <div class="split"></div>

        <!-- Untuk Satpam -->
        <div class="kop">
            <h2>SMK NEGERI 1 PROBOLINGGO</h2>
            <p>Jl. Mastrip No.357, Kademangan, Jrebeng Wetan, Kec. Kedopok, Kota Probolinggo, Jawa Timur 67239</p>
        </div>

        <div class="row">
            <div class="kolom-surat">
                <h3>Surat Ijin Siswa (Untuk Satpam)</h3>
                <p>Nama: <?= htmlspecialchars($surat['nama']) ?></p>
                <p>Kelas: <?= htmlspecialchars($surat['kelas']) ?></p>
                <p>Jam ke: <?= htmlspecialchars($surat['jam_ke']) ?></p>
                <p>Keperluan: <?= htmlspecialchars($surat['keperluan']) ?></p>

                <div class="tanggal">Probolinggo, <?= date('d-m-Y') ?></div>

                <div class="ttd">
                    <table>
                        <tr>
                            <td class="label">Guru Piket</td>
                            <td class="label">Guru Mapel</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="garis-ttd"></div>
                            </td>
                            <td>
                                <div class="garis-ttd"></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="kolom-info">
                <h3>Peraturan Saat Ijin</h3>
                <ul>
                    <li>Wajib lapor ke guru piket sebelum keluar.</li>
                    <li>Hanya berlaku hari ini.</li>
                    <li>Kembali setelah keperluan selesai.</li>
                    <li>Dilarang disalahgunakan.</li>
                    <li>Pelanggaran akan diberi sanksi.</li>
                </ul>

                <h3>Catatan</h3>
                <ul>
                    <li>Bawa surat ini saat keluar gerbang.</li>
                    <li>Serahkan ke satpam.</li>
                </ul>
            </div>
        </div>

    <?php else: ?>
        <p><strong>Data surat tidak ditemukan.</strong></p>
    <?php endif; ?>

</body>

</html>