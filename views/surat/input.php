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

            <!-- <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-base sm:text-sm">
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Contoh: X RPL 1</p>
            </div> -->

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="kelas">Kelas</label>
                <div class="relative">
                    <select name="kelas" id="kelas" required
                        class="appearance-none w-full border border-gray-300 rounded-lg px-3 py-2 pr-10 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base sm:text-sm">
                        <option value="" disabled selected>Pilih kelas</option>
                        <option value="X RPL 1">X RPL 1</option>
                        <option value="X RPL 2">X RPL 2</option>
                        <option value="X AK 1">X AK 1</option>
                        <option value="X AK 2">X AK 2</option>
                        <option value="X AK 3">X AK 3</option>
                        <option value="X BD 1">X BD 1</option>
                        <option value="X BD 2">X BD 2</option>
                        <option value="X BD 3">X BD 3</option>
                        <option value="X BD 4">X BD 4</option>
                        <option value="X LP 1">X LP 1</option>
                        <option value="X LP 2">X LP 2</option>
                        <option value="X MP 1">X MP 1</option>
                        <option value="X MP 2">X MP 2</option>
                        <option value="X MP 3">X MP 3</option>
                        <option value="X MP 4">X MP 4</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI AK 1">XI AK 1</option>
                        <option value="XI AK 2">XI AK 2</option>
                        <option value="XI AK 3">XI AK 3</option>
                        <option value="XI BD 1">XI BD 1</option>
                        <option value="XI BD 2">XI BD 2</option>
                        <option value="XI BD 3">XI BD 3</option>
                        <option value="XI BD 4">XI BD 4</option>
                        <option value="XI LP 1">XI LP 1</option>
                        <option value="XI LP 2">XI LP 2</option>
                        <option value="XI MP 1">XI MP 1</option>
                        <option value="XI MP 2">XI MP 2</option>
                        <option value="XI MP 3">XI MP 3</option>
                        <option value="XI MP 4">XI MP 4</option>
                        <option value="XII RPL 1">XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                        <option value="XII AK 1">XII AK 1</option>
                        <option value="XII AK 2">XII AK 2</option>
                        <option value="XII AK 3">XII AK 3</option>
                        <option value="XII BD 1">XII BD 1</option>
                        <option value="XII BD 2">XII BD 2</option>
                        <option value="XII BD 3">XII BD 3</option>
                        <option value="XII BD 4">XII BD 4</option>
                        <option value="XII LP 1">XII LP 1</option>
                        <option value="XII LP 2">XII LP 2</option>
                        <option value="XII MP 1">XII MP 1</option>
                        <option value="XII MP 2">XII MP 2</option>
                        <option value="XII MP 3">XII MP 3</option>
                        <option value="XII MP 4">XII MP 4</option>
                    </select>
                    <!-- icon panah bawah -->
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Pilih kelas dari daftar</p>
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
            <a href="./" class="block mt-3 text-xs sm:text-sm text-gray-500 hover:text-blue-500 transition">
                ⬅️ Kembali ke Home Page
            </a>

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