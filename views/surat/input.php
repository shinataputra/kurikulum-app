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
        <form id="form-ijin" method="post" action="./?url=SuratIjin/store" class="space-y-5" target="_blank">


            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-sm text-gray-500 mt-1">Contoh: Shinata Putra</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-sm text-gray-500 mt-1">Contoh: X RPL 1</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="jam_ke">Jam Ke</label>
                <input type="text" name="jam_ke" id="jam_ke" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-sm text-gray-500 mt-1">Contoh: 1–4</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="keperluan">Keperluan</label>
                <textarea name="keperluan" id="keperluan" rows="3" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                <p class="text-sm text-gray-500 mt-1">Jelaskan dengan detail, misal: "Pergi ke puskesmas karena sakit kepala"</p>
            </div>

            <!-- <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-200">
                    Cetak Surat
                </button>
            </div> -->

            <div class="flex flex-row gap-3 justify-between mt-4">
                <button type="submit"
                    class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-200 text-sm">
                    Cetak Surat
                </button>

                <button type="submit" name="get_token"
                    formaction="./?url=SuratIjin/storeWithToken"
                    class="flex-1 bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition-all duration-200 text-sm">
                    Dapatkan Token
                </button>

                <button type="button" disabled
                    class="flex-1 bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed text-sm">
                    Barcode (nonaktif)
                </button>
            </div>



        </form>
        <script>
            document.getElementById('save-barcode').addEventListener('click', function() {
                const form = document.getElementById('form-ijin');
                form.action = './?url=SuratIjin/saveWithQr'; // Arahkan ke controller yg handle QR
                form.submit();
            });
        </script>
    </div>

</body>

</html>