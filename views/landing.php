<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Portal Kurikulum - SMKN 1 Probolinggo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white shadow-xl rounded-xl px-4 py-7 w-full max-w-xl mx-auto text-center sm:px-8 sm:py-8">
        <div class="flex flex-col items-center justify-center gap-2 mb-4 sm:flex-row sm:gap-3">
            <img src="assets/img/iconsmexa.png" alt="Logo SMKN 1 Probolinggo" class="w-12 h-12 mb-2 sm:mb-0">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 leading-tight">SMK NEGERI 1 PROBOLINGGO</h1>
        </div>

        <p class="text-xs sm:text-sm font-semibold text-blue-700 bg-blue-100 px-3 py-1 rounded-full inline-block mb-6 shadow-sm tracking-wide uppercase">
            Portal Kurikulum
        </p>

        <div class="space-y-3 sm:space-y-4 text-left">

            <!-- Aktif -->
            <a href="./?url=SuratIjin/inputForm"
                class="block bg-blue-600 text-white px-4 py-3 rounded-lg font-medium hover:bg-blue-700 transition-all text-center">
                📝 Buat Surat Ijin Siswa
            </a>

            <a href="./?url=SuratIjin/inputTokenForm"
                class="block bg-green-600 text-white px-4 py-3 rounded-lg font-medium hover:bg-green-700 transition-all text-center">
                🔑 Cetak Surat dengan Token
            </a>

            <!-- Coming soon -->
            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed text-center">
                📋 Upload Nilai Harian <span class="italic text-xs">(segera hadir)</span>
            </div>

            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed text-center">
                🧾 Cetak Kartu Ujian <span class="italic text-xs">(segera hadir)</span>
            </div>

            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed text-center">
                📚 Unduh Jadwal Kurikulum <span class="italic text-xs">(segera hadir)</span>
            </div>

        </div>

        <p class="text-xs text-gray-400 mt-6">Versi awal – lebih banyak fitur segera hadir.</p>
    </div>

</body>

</html>