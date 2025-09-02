<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Portal Kurikulum - SMKN 1 Probolinggo</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white shadow-xl rounded-xl px-4 py-7 w-full max-w-xl mx-auto text-center sm:px-8 sm:py-8">
        <div class="flex flex-col items-center justify-center gap-2 mb-4 sm:flex-row sm:gap-3">
            <img src="assets/img/iconsmexa.png" alt="Logo SMKN 1 Probolinggo" class="w-12 h-12 mb-2 sm:mb-0">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 leading-tight">SMK NEGERI 1 PROBOLINGGO</h1>
        </div>

        <p class="text-xs sm:text-sm font-semibold text-blue-700 bg-blue-100 px-3 py-1 rounded-full inline-flex items-center gap-1 mb-6 shadow-sm tracking-wide uppercase">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path fill="currentColor" d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z" />
                <path fill="#fff" d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z" />
            </svg>
            Portal Kurikulum

        </p>


        <div class="space-y-3 sm:space-y-4 text-left">

            <!-- Aktif -->
            <a href="./?url=SuratIjin/inputForm"
                class="block bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 text-white px-4 py-3 rounded-lg font-medium transition-all text-center">
                📝 Buat Surat Ijin Siswa
            </a>

            <a href="./?url=SuratIjin/inputTokenForm"
                class="block bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 text-white px-4 py-3 rounded-lg font-medium transition-all text-center">
                🔑 Cetak Surat dengan Token
            </a>

            <a href="https://lookerstudio.google.com/reporting/b9893283-7d39-4252-9c03-359abad8bce0"
                class="block bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 text-white px-4 py-3 rounded-lg font-medium transition-all text-center">
                🔍 Cek Guru Wali
            </a>


            <a href="http://36.92.104.129:8154/"
                class="flex items-center justify-center gap-2 bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 text-white px-4 py-3 rounded-lg font-medium transition-all text-center">
                <img src="assets/img/logoerapor.png" class="w-5 h-5">
                E-Rapor
            </a>


            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed text-center">
                🧾 Asisten Guru Cerdas - smexAI <span class="italic text-xs">(segera hadir)</span>
            </div>

            <!-- Coming soon -->
            <div class="block bg-gray-200 text-gray-500 px-4 py-3 rounded-lg font-medium cursor-not-allowed text-center">
                📚 Unduh Jadwal Kurikulum <span class="italic text-xs">(segera hadir)</span>
            </div>

        </div>

        <p class="text-xs text-gray-400 mt-6">Versi awal – lebih banyak fitur segera hadir.</p>
    </div>

</body>

</html>