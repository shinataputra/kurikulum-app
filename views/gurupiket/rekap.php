<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru Piket</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Data Surat Ijin</h2>

            <div class="flex items-center gap-2">
                <!-- Form filter tanggal -->
                <form action="index.php" method="get" class="flex items-center gap-2">
                    <input type="hidden" name="url" value="gurupiket/rekap">
                    <input type="date" name="tanggal" value="<?= $_GET['tanggal'] ?? '' ?>"
                        class="border px-3 py-2 rounded text-sm">
                    <button class="bg-blue-500 text-white px-3 py-2 rounded text-sm">Filter</button>
                </form>

                <!-- Tombol logout -->
                <form action="index.php?url=auth/logout" method="post">
                    <button class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
                </form>
            </div>
        </div>
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-2 border">No</th>
                    <th class="p-2 border">Nama</th>
                    <th class="p-2 border">Kelas</th>
                    <th class="p-2 border">Jam ke</th>
                    <th class="p-2 border">Keperluan</th>
                    <th class="p-2 border">WA</th>
                    <th class="p-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $s): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="p-2 border"><?= $i + 1 ?></td>
                        <td class="p-2 border"><?= htmlspecialchars($s['nama']) ?></td>
                        <td class="p-2 border"><?= htmlspecialchars($s['kelas']) ?></td>
                        <td class="p-2 border"><?= htmlspecialchars($s['jam_ke']) ?></td>
                        <td class="p-2 border"><?= htmlspecialchars($s['keperluan']) ?></td>
                        <td class="p-2 border">
                            <a href="https://wa.me/62<?= preg_replace('/[^0-9]/', '', $s['no_telp']) ?>" target="_blank" class="bg-green-500 text-white px-3 py-1 rounded text-sm">WhatsApp</a>
                        </td>
                        <td class="p-2 border">
                            <?php if ($s['status'] !== 'disetujui'): ?>
                                <a href="index.php?url=gurupiket/konfirmasi&id=<?= $s['id'] ?>"
                                    class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                                    Izinkan
                                </a>
                            <?php else: ?>
                                <span class="bg-green-600 text-white px-3 py-1 rounded text-sm">Sudah Diizinkan</span>
                            <?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>