<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Surat Ijin Siswa</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-2">

    <div class="bg-white shadow-md rounded-xl w-full max-w-md px-3 py-5 sm:px-6 sm:py-6">
        <h2 class="text-xl sm:text-2xl font-bold mb-6 text-center text-gray-700">Form Surat Ijin Siswa</h2>
        <form id="form-ijin" method="post" action="./?url=SuratIjin/cetakPdf" class="space-y-5" target="_blank">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-base sm:text-sm">
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Contoh: Shinata Putra</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-base sm:text-sm">
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Contoh: X RPL 1</p>
            </div>

            <div>
                <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon (Whatsapp Aktif)</label>
                <input type="text" name="no_telp" id="no_telp" maxlength="15" pattern="[0-9]+" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-base sm:text-sm">
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Contoh: 081234567890 </p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="jam_ke">Jam Ke</label>
                <input type="text" name="jam_ke" id="jam_ke" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-base sm:text-sm">
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Contoh: 1–4</p>
            </div>

            <div>
                <label for="keperluan" class="block text-sm font-medium text-gray-700 mb-1">Keperluan</label>
                <textarea name="keperluan" id="keperluan" rows="3" maxlength="100"
                    oninput="handleKeperluanInput(this)"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-base sm:text-sm"></textarea>
                <div style="margin-top:4px;">
                    <p class="text-xs sm:text-sm text-gray-500 mb-1">Contoh: "Pergi ke puskesmas karena sakit kepala"</p>
                    <p class="text-xs sm:text-sm text-gray-500">Sisa karakter: <span id="countKeperluan">100</span></p>
                </div>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:gap-3 justify-between mt-4">
                <button type="submit"
                    class="w-full sm:flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-200 text-sm font-medium">
                    Cetak Surat
                </button>

                <button type="submit" name="get_token"
                    formaction="./?url=SuratIjin/storeWithToken"
                    class="w-full sm:flex-1 bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition-all duration-200 text-sm font-medium">
                    Dapatkan Token
                </button>

                <button type="button" disabled
                    class="w-full sm:flex-1 bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed text-sm font-medium">
                    Barcode (nonaktif)
                </button>
            </div>

        </form>
        <script>
            document.getElementById('save-barcode')?.addEventListener('click', function() {
                const form = document.getElementById('form-ijin');
                form.action = './?url=SuratIjin/saveWithQr';
                form.submit();
            });


            function handleKeperluanInput(el) {
                let max = 100;
                let val = el.value;
                if (val.length > max) el.value = val.substring(0, max);
                let sisa = max - el.value.length;
                document.getElementById('countKeperluan').textContent = sisa >= 0 ? sisa : 0;
            }
        </script>
    </div>

</body>

</html>