<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Surat Ijin Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* padding: 25px 20px 20px 20px; */
            font-size: 13px;
            box-sizing: border-box;
            /* max-width: 800px; */
            /* margin: 0 auto; */
            padding: 20px 8px 18px 8px;
            max-width: 700px;
            margin: 0 auto;
        }

        .kop {
            text-align: center;
            margin-bottom: 10px;
        }

        .kop h2 {
            margin: 0;
            font-size: 20px;
        }

        .kop p {
            margin: 2px 0;
            font-size: 12px;
        }

        .main-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 15px 0;
            margin-bottom: 10px;
        }

        .main-td {
            vertical-align: top;
            background: #fff;
            border: 1px solid #aaa;
            padding: 12px 10px;
            font-size: 13px;
        }

        h3 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .ttd {
            margin-top: 24px;
        }

        .ttd table {
            width: 100%;
            text-align: center;
        }

        .ttd .label {
            font-weight: bold;
            padding-bottom: 8px;
        }

        .garis-ttd {
            border-bottom: 1px dashed #333;
            width: 90%;
            margin: 18px auto 4px auto;
            height: 30px;
        }

        ul {
            padding-left: 18px;
            margin-top: 0;
        }

        .split {
            border-top: 2px dashed #333;
            margin: 28px 0 12px 0;
        }

        table {
            border-collapse: collapse;
            margin-bottom: 0;
        }

        td {
            padding: 2px 8px 2px 0;
        }
    </style>
</head>

<body>
    <!-- Surat Guru Piket -->
    <div class="kop">
        <h2>SURAT KETERANGAN</h2>
        <h2>IZIN KELUAR SEKOLAH</h2>
    </div>
    <table class="main-table">
        <tr>
            <!-- Identitas -->
            <td class="main-td" style="width:60%">
                <h3>Identitas Siswa</h3>
                <table style="width:100%;">
                    <tr>
                        <td style="width:75px; padding-right:2px;">Nama</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['nama']) ?></td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">Kelas</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['kelas']) ?></td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">No. Telp</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['no_telp']) ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Izin meninggalkan sekolah pada:</td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">Hari/Tanggal</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= $hari . ', ' . $tanggal ?></td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px; vertical-align:top;">Keperluan</td>
                        <td style="width:10px; text-align:right; padding-right:2px; vertical-align:top;">:</td>
                        <td style="vertical-align:top;">
                            <?= nl2br(htmlspecialchars($surat['keperluan'])) ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Mohon diijinkan meninggalkan KBM pada :</td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">Jam ke</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['jam_ke']) ?></td>
                    </tr>
                </table>
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
            </td>
            <!-- Peraturan -->
            <td class="main-td" style="width:40%">
                <h3>Peraturan Saat Izin</h3>
                <ul>
                    <li>Siswa wajib melapor kepada guru piket sebelum meninggalkan sekolah.</li>
                    <li>Surat izin ini hanya berlaku pada tanggal yang tertera.</li>
                    <li>Siswa diharapkan kembali ke sekolah setelah keperluan selesai (jika memungkinkan).</li>
                    <li>Penggunaan surat ini harus sesuai dengan keperluan yang ditulis.</li>
                    <li>Setiap pelanggaran terhadap ketentuan ini dapat dikenai sanksi sesuai aturan sekolah.</li>
                </ul>

            </td>
        </tr>
    </table>
    <div style="font-size:13px;margin-bottom:6px;text-align:center;">
        <strong>Keterangan:</strong> Bagian ini untuk Siswa - harap dibawah selama izin meninggalkan sekolah.
    </div>

    <div class="split"></div>

    <!-- Surat Satpam -->
    <div class="kop">
        <h2>SURAT KETERANGAN</h2>
        <h2>IZIN KELUAR SEKOLAH</h2>

    </div>
    <table class="main-table">
        <tr>
            <!-- Identitas -->
            <td class="main-td" style="width:60%">
                <h3>Identitas Siswa</h3>
                <table style="width:100%;">
                    <tr>
                        <td style="width:75px; padding-right:2px;">Nama</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['nama']) ?></td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">Kelas</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['kelas']) ?></td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">No. Telp</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['no_telp']) ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Izin meninggalkan sekolah pada:</td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">Hari/Tanggal</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= $hari . ', ' . $tanggal ?></td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px; vertical-align:top;">Keperluan</td>
                        <td style="width:10px; text-align:right; padding-right:2px; vertical-align:top;">:</td>
                        <td style="vertical-align:top;">
                            <?= nl2br(htmlspecialchars($surat['keperluan'])) ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Mohon diijinkan meninggalkan KBM pada :</td>
                    </tr>
                    <tr>
                        <td style="width:75px; padding-right:2px;">Jam ke</td>
                        <td style="width:10px; text-align:right; padding-right:2px;">:</td>
                        <td><?= htmlspecialchars($surat['jam_ke']) ?></td>
                    </tr>
                </table>
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
            </td>
            <!-- Peraturan -->
            <td class="main-td" style="width:40%">
                <h3>Peraturan Saat Izin</h3>
                <ul>
                    <li>Siswa wajib melapor kepada guru piket sebelum meninggalkan sekolah.</li>
                    <li>Surat izin ini hanya berlaku pada tanggal yang tertera.</li>
                    <li>Siswa diharapkan kembali ke sekolah setelah keperluan selesai.</li>
                    <li>Penggunaan surat ini harus sesuai dengan keperluan yang ditulis.</li>
                    <li>Setiap pelanggaran terhadap ketentuan ini dapat dikenai sanksi sesuai aturan sekolah.</li>
                </ul>

            </td>
        </tr>
    </table>
    <div style="font-size:13px;margin-bottom:6px;text-align:center;">
        <strong>Keterangan:</strong> Bagian ini untuk Satpam - harap diserahkan saat meninggalkan sekolah.
    </div>
</body>

</html>