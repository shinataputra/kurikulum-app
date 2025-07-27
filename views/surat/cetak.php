<!DOCTYPE html>
<html>

<head>
    <title>Cetak Surat Ijin</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
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

        .kolom-identitas,
        .kolom-verifikasi,
        .kolom-peraturan {
            border: 1px solid #aaa;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            background: #fff;
        }

        .kolom-identitas {
            flex: 1.6;
        }

        .kolom-verifikasi {
            flex: 1.2;
        }

        .kolom-peraturan {
            flex: 0.9;
        }

        h3 {
            margin-top: 0;
        }

        .ttd {
            margin-top: 30px;
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
            margin: 25px auto 5px auto;
            height: 0;
        }

        .tanggal {
            text-align: right;
            margin-top: 20px;
            font-size: 14px;
        }

        ul {
            padding-left: 20px;
            margin-top: 0;
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
            <h2>SURAT KETERANGAN</h2>
            <H2>IZIN KELUAR SEKOLAH</H2>
            <!-- <p>Jl. Mastrip No.357, Kademangan, Jrebeng Wetan, Kec. Kedopok, Kota Probolinggo, Jawa Timur 67239</p> -->
        </div>

        <div class="row">
            <!-- Identitas -->
            <div class="kolom-identitas">
                <h3>Identitas Siswa</h3>
                <table>
                    <?php
                    // Konversi hari ke Bahasa Indonesia
                    $hari_en = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                    $hari_id = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                    $hari = str_replace($hari_en, $hari_id, date('l'));
                    $tanggal = date('d-m-Y');
                    ?>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['nama']) ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['kelas']) ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Izin meninggalkan sekolah pada:</td>
                    </tr>
                    <tr>
                        <td>Hari/Tanggal</td>
                        <td>:</td>
                        <td><?= $hari . ', ' . $tanggal ?></td>
                    </tr>
                    <tr>
                        <td>Keperluan</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['keperluan']) ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Mohon diijinkan meninggalkan KBM pada jam ke:</td>
                    </tr>
                    <tr>
                        <td>Jam ke</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['jam_ke']) ?></td>
                    </tr>
                </table>
                <!-- Tanda Tangan di bawah identitas -->
                <div class="ttd" style="margin-top:30px;">
                    <table style="width:100%; text-align:center;">
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
            <!-- Peraturan (lebih kecil) -->
            <div class="kolom-peraturan">
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
        <!-- KOP -->
        <div class="kop">
            <h2>SURAT KETERANGAN</h2>
            <H2>IZIN KELUAR SEKOLAH</H2>
            <!-- <p>Jl. Mastrip No.357, Kademangan, Jrebeng Wetan, Kec. Kedopok, Kota Probolinggo, Jawa Timur 67239</p> -->
        </div>

        <div class="row">
            <!-- Identitas -->
            <div class="kolom-identitas">
                <h3>Identitas Siswa</h3>
                <table>
                    <?php
                    // Konversi hari ke Bahasa Indonesia
                    $hari_en = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                    $hari_id = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                    $hari = str_replace($hari_en, $hari_id, date('l'));
                    $tanggal = date('d-m-Y');
                    ?>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['nama']) ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['kelas']) ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Izin meninggalkan sekolah pada:</td>
                    </tr>
                    <tr>
                        <td>Hari/Tanggal</td>
                        <td>:</td>
                        <td><?= $hari . ', ' . $tanggal ?></td>
                    </tr>
                    <tr>
                        <td>Keperluan</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['keperluan']) ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br>Mohon diijinkan meninggalkan KBM pada jam ke:</td>
                    </tr>
                    <tr>
                        <td>Jam ke</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['jam_ke']) ?></td>
                    </tr>
                </table>
                <!-- Tanda Tangan di bawah identitas -->
                <div class="ttd" style="margin-top:30px;">
                    <table style="width:100%; text-align:center;">
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
            <!-- Peraturan (lebih kecil) -->
            <div class="kolom-peraturan">
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