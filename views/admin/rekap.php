<?php
$namaUser = $_SESSION['nama'] ?? 'Admin';
$logoutUrl = 'index.php?url=auth/logout';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rekap Surat Ijin</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen p-6">
    <div class="max-w-6xl mx-auto space-y-6">
        <!-- Header -->
        <div class="bg-white shadow-md rounded-xl p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-2xl font-semibold text-gray-700">Rekap Surat Ijin - <?= htmlspecialchars($namaUser) ?></h1>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <!-- Filter tanggal -->
                <form method="get" class="filter-form flex flex-wrap items-center gap-2">
                    <input type="hidden" name="url" value="admin/rekapfilter">
                    <label class="flex items-center gap-2 text-sm">
                        Dari:
                        <input type="date" name="dari" value="<?= $_GET['dari'] ?? '' ?>" class="border border-gray-300 rounded px-2 py-1 text-sm">
                    </label>
                    <label class="flex items-center gap-2 text-sm">
                        Sampai:
                        <input type="date" name="sampai" value="<?= $_GET['sampai'] ?? '' ?>" class="border border-gray-300 rounded px-2 py-1 text-sm">
                    </label>

                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition duration-150">
                        Filter
                    </button>


                    <a class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm transition duration-150"
                        href="index.php?url=admin/cetak&dari=<?= $_GET['dari'] ?? '' ?>&sampai=<?= $_GET['sampai'] ?? '' ?>" target="_blank">
                        Cetak PDF
                    </a>

                </form>

                <!-- Logout -->
                <form action="index.php?url=auth/logout" method="post">
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm transition duration-150">
                        Logout
                    </button>
                </form>
            </div>
        </div>


        <!-- Table -->
        <div class="overflow-x-auto bg-white shadow-md rounded-xl p-4">
            <table class=" min-w-full table-auto border text-sm text-gray-700">
                <thead>
                    <tr class="bg-gray-100 text-center">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Nama</th>
                        <th class="p-3 border">Kelas</th>
                        <th class="p-3 border">Jam ke</th>
                        <th class="p-3 border">Keperluan</th>
                        <th class="p-3 border">Tanggal</th>
                        <th class="p-3 border">Status</th>
                        <th class="p-3 border">Diizinkan oleh</th>
                    </tr>
                </thead>
                <?php foreach ($data as $i => $surat): ?>
                    <tr class="hover:bg-gray-50 text-center">
                        <td class="p-3 border"><?= $i + 1 ?></td>
                        <td class="p-3 border text-left"><?= htmlspecialchars($surat['nama']) ?></td>
                        <td class="p-3 border"><?= htmlspecialchars($surat['kelas']) ?></td>
                        <td class="p-3 border"><?= htmlspecialchars($surat['jam_ke']) ?></td>
                        <td class="p-3 border text-left break-words max-w-[500px]"><?= htmlspecialchars($surat['keperluan']) ?></td>
                        <td class="p-3 border"><?= $surat['tanggal'] ?></td>
                        <td class="p-3 border">
                            <?php if ($surat['status'] === 'disetujui'): ?>
                                <span class="text-green-600 font-semibold">Disetujui</span>
                            <?php elseif ($surat['status'] === 'pending'): ?>
                                <span class="text-red-600 font-semibold">Belum disetujui</span>
                            <?php else: ?>
                                <span class="text-gray-600 font-semibold">Tidak ada</span>
                            <?php endif; ?>
                        <td class="p-3 border"><?= $surat['guru_piket'] ?? '' ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>