<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Portal Kurikulum - SMKN 1 Probolinggo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-xl text-center">
        <div class="flex items-center justify-center gap-3 mb-4">
            <img src="assets/img/iconsmexa.png" alt="Logo SMKN 1 Probolinggo" class="w-10 h-10">
            <h1 class="text-2xl font-bold text-gray-800">SMK NEGERI 1 PROBOLINGGO</h1>
        </div>

        <p class="text-sm font-semibold text-blue-700 bg-blue-100 px-3 py-1 rounded-full inline-block mb-6 shadow-sm tracking-wide uppercase">
            Portal Kurikulum
        </p>

        <div class="space-y-4 text-left">

            <!-- Aktif -->
            <a href="./?url=SuratIjin/inputForm"
                class="block bg-blue-600 text-white px-4 py-3 rounded-lg font-medium hover:bg-blue-700 transition-all">
                📝 Buat Surat Ijin Siswa
            </a>

            <a href="./?url=SuratIjin/inputTokenForm"
                class="block bg-green-600 text-white px-4 py-3 rounded-lg font-medium hover:bg-green-700 transition-all">
                🔑 Cetak Surat dengan Token
            </a>

            <!-- Coming soon -->
            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed">
                📋 Upload Nilai Harian <span class="italic text-xs">(segera hadir)</span>
            </div>

            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed">
                🧾 Cetak Kartu Ujian <span class="italic text-xs">(segera hadir)</span>
            </div>

            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed">
                📚 Unduh Jadwal Kurikulum <span class="italic text-xs">(segera hadir)</span>
            </div>

        </div>

        <p class="text-xs text-gray-400 mt-6">Versi awal – lebih banyak fitur segera hadir.</p>
    </div>

</body>

</html>