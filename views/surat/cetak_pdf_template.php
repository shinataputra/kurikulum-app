<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Surat Ijin Siswa</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <style>
        body {
            font-family: "Arial", "Helvetica", sans-serif;
            font-size: 13px;
            color: #222;
            padding: 18px 10px;
            max-width: 720px;
            margin: 0 auto;
        }

        .kop {
            text-align: center;
            margin-bottom: 12px;
        }

        .kop h2 {
            margin: 0;
            font-size: 18px;
            letter-spacing: 0.5px;
        }

        .kop h2:last-child {
            font-size: 16px;
            font-weight: normal;
            margin-top: 2px;
        }

        .main-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px;
            margin-bottom: 8px;
        }

        .main-td {
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px 14px;
            vertical-align: top;
        }

        h3 {
            margin: 0 0 8px 0;
            font-size: 14px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 4px;
        }

        table td {
            padding: 3px 4px;
        }

        ul {
            padding-left: 18px;
            margin: 6px 0 0 0;
        }

        ul li {
            margin-bottom: 6px;
        }

        .ttd {
            margin-top: 18px;
        }

        .ttd table {
            width: 100%;
            text-align: center;
        }

        .ttd .label {
            font-size: 12px;
            color: #555;
            padding-bottom: 6px;
        }

        .garis-ttd {
            border-bottom: 1px solid #999;
            width: 85%;
            margin: 20px auto 0 auto;
            height: 22px;
        }

        .split {
            border-top: 2px dashed #ccc;
            margin: 22px 0 14px 0;
        }

        .keterangan {
            font-size: 12px;
            text-align: center;
            color: #444;
            margin-top: 4px;
        }
    </style>

</head>

<body>

    <!-- ================= SURAT UNTUK SISWA ================= -->
    <div class="kop" style="text-align:center; margin-bottom:10px;">
        <div style="font-size:14px; font-weight:bold;">
            SMK NEGERI 1 PROBOLINGGO
        </div>
        <div style="font-size:12px;">
            Jalan Mastrip Nomor 357, Telepon (0335) 421121 Probolinggo (67239)<br>
            Laman: smkn1probolinggo.sch.id Pos-el: smkn1_probolinggo@yahoo.co.id

        </div>


        <hr style="border:1px solid #444; margin:8px 0;">

        <div style="margin-top:6px;">
            <div style="font-size:14px; font-weight:bold; letter-spacing:0.5px;">
                SURAT KETERANGAN
            </div>
            <div style="font-size:12px; margin-top:2px;">
                IZIN KELUAR SEKOLAH
            </div>
        </div>
    </div>


    <table class="main-table">
        <tr>
            <!-- IDENTITAS -->
            <td class="main-td" style="width:60%">
                <h3>Identitas Siswa</h3>

                <table style="width:100%;">
                    <tr>
                        <td style="width:90px;">Nama</td>
                        <td style="width:10px;">:</td>
                        <td><?= htmlspecialchars($surat['nama']) ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['kelas']) ?></td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['no_telp']) ?></td>
                    </tr>

                    <tr>
                        <td colspan="3" style="padding-top:10px;">
                            Diberikan izin meninggalkan sekolah pada:
                        </td>
                    </tr>

                    <tr>
                        <td>Hari / Tanggal</td>
                        <td>:</td>
                        <td><?= $hari . ', ' . $tanggal ?></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top;">Keperluan</td>
                        <td style="vertical-align:top;">:</td>
                        <td><?= nl2br(htmlspecialchars($surat['keperluan'])) ?></td>
                    </tr>

                    <tr>
                        <td colspan="3" style="padding-top:10px;">
                            Izin meninggalkan KBM pada:
                        </td>
                    </tr>

                    <tr>
                        <td>Jam ke</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['jam_ke']) ?></td>
                    </tr>
                </table>

                <div class="ttd">
                    <table>
                        <tr>
                            <td class="label">Guru Piket</td>
                            <td class="label">Guru Mata Pelajaran</td>
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

            <!-- PERATURAN -->
            <td class="main-td" style="width:40%">
                <h3>Ketentuan Izin</h3>
                <ul>
                    <li>Siswa wajib melapor kepada guru piket sebelum meninggalkan sekolah.</li>
                    <li>Surat izin hanya berlaku pada tanggal yang tertera.</li>
                    <li>Siswa wajib kembali ke sekolah setelah keperluan selesai.</li>
                    <li>Surat digunakan sesuai keperluan yang dituliskan.</li>
                    <li>Pelanggaran dikenakan sanksi sesuai aturan sekolah.</li>
                </ul>
            </td>
        </tr>
    </table>

    <div style="font-size:12px;text-align:center;margin-top:6px;">
        <strong>Keterangan:</strong> Bagian ini dibawa oleh siswa selama izin keluar sekolah.
    </div>

    <div class="split"></div>

    <!-- ================= SURAT UNTUK SATPAM ================= -->
    <div class="kop">
        <h2>SURAT KETERANGAN</h2>
        <h2>IZIN KELUAR SEKOLAH</h2>
    </div>

    <table class="main-table">
        <tr>
            <!-- IDENTITAS -->
            <td class="main-td" style="width:60%">
                <h3>Identitas Siswa</h3>

                <table style="width:100%;">
                    <tr>
                        <td style="width:90px;">Nama</td>
                        <td style="width:10px;">:</td>
                        <td><?= htmlspecialchars($surat['nama']) ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['kelas']) ?></td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['no_telp']) ?></td>
                    </tr>
                    <tr>
                        <td>Hari / Tanggal</td>
                        <td>:</td>
                        <td><?= $hari . ', ' . $tanggal ?></td>
                    </tr>
                    <tr>
                        <td>Jam ke</td>
                        <td>:</td>
                        <td><?= htmlspecialchars($surat['jam_ke']) ?></td>
                    </tr>
                </table>

                <div class="ttd">
                    <table>
                        <tr>
                            <td class="label">Guru Piket</td>
                            <td class="label">Guru Mata Pelajaran</td>
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

            <!-- PERATURAN -->
            <td class="main-td" style="width:40%">
                <h3>Ketentuan Izin</h3>
                <ul>
                    <li>Siswa telah memperoleh izin resmi dari sekolah.</li>
                    <li>Surat ini menjadi bukti izin keluar sekolah.</li>
                    <li>Wajib diserahkan kepada petugas.</li>
                </ul>
            </td>
        </tr>
    </table>

    <div style="font-size:12px;text-align:center;margin-top:6px;">
        <strong>Keterangan:</strong> Bagian ini diserahkan kepada satpam saat keluar sekolah.
    </div>

</body>


</html>