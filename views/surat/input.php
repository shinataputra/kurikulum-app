<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Surat Ijin Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white shadow-md rounded-xl w-full max-w-md p-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Form Surat Ijin Siswa</h2>
        <form method="post" action="./?url=SuratIjin/store" class="space-y-4">

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1" for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1" for="jam_ke">Jam Ke</label>
                <input type="text" name="jam_ke" id="jam_ke" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1" for="keperluan">Keperluan</label>
                <textarea name="keperluan" id="keperluan" rows="3" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-200">
                    Cetak Surat
                </button>
            </div>

        </form>
    </div>

</body>

</html>