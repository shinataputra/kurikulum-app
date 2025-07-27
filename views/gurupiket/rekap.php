<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru Piket</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen p-6">
    <div class="max-w-6xl mx-auto space-y-6">
        <!-- Header -->
        <div class="bg-white shadow-md rounded-xl p-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <h1 class="text-2xl font-semibold text-gray-700">
                    Dashboard Guru Piket - <?= $_SESSION['nama'] ?? 'Tanpa Nama' ?>
                </h1>

                <p class="text-sm text-gray-500">Data surat ijin siswa</p>
            </div>
            <div class="flex flex-wrap items-center gap-2">
                <!-- Filter tanggal -->
                <form action="index.php" method="get" class="flex gap-2 items-center">
                    <input type="hidden" name="url" value="gurupiket/rekap">
                    <input type="date" name="tanggal" value="<?= $_GET['tanggal'] ?? '' ?>"
                        class="border px-3 py-2 rounded-md text-sm shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition duration-150">Filter</button>
                </form>
                <!-- Logout -->
                <form action="index.php?url=auth/logout" method="post">
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm transition duration-150">Logout</button>
                </form>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto bg-white shadow-md rounded-xl p-4">
            <table class="min-w-full table-auto border text-sm text-gray-700">
                <thead>
                    <tr class="bg-gray-100 text-center">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Nama</th>
                        <th class="p-3 border">Kelas</th>
                        <th class="p-3 border">Jam ke</th>
                        <th class="p-3 border">Keperluan</th>
                        <th class="p-3 border">WA</th>
                        <th class="p-3 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $i => $s): ?>
                        <tr class="hover:bg-gray-50 text-center">
                            <td class="p-3 border"><?= $i + 1 ?></td>
                            <td class="p-3 border text-left"><?= htmlspecialchars($s['nama']) ?></td>
                            <td class="p-3 border w-[100px]"><?= htmlspecialchars($s['kelas']) ?></td>
                            <td class="p-3 border"><?= htmlspecialchars($s['jam_ke']) ?></td>
                            <td class="p-3 border text-left break-words max-w-[500px]"><?= htmlspecialchars($s['keperluan']) ?></td>
                            <td class="p-1 border w-[100px] whitespace-nowrap">
                                <a href="https://wa.me/62<?= preg_replace('/[^0-9]/', '', $s['no_telp']) ?>" target="_blank"
                                    class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded block w-full text-center">WhatsApp</a>
                            </td>
                            <td class="p-1 border w-[100px] whitespace-nowrap">
                                <?php if ($s['status'] !== 'disetujui'): ?>
                                    <a href="index.php?url=gurupiket/konfirmasi&id=<?= $s['id'] ?>&tanggal=<?= $_GET['tanggal'] ?? '' ?>"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded block w-full text-center">Izinkan</a>
                                <?php else: ?>
                                    <span class="bg-gray-400 text-white px-2 py-1 rounded block w-full text-center break-words">Diizinkan</span>
                                <?php endif; ?>
                            </td>


                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>