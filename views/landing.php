<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Kurikulum - SMKN 1 Probolinggo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-4">

<div class="max-w-5xl mx-auto">
    <!-- Header -->
    <div class="bg-white rounded-xl shadow p-6 text-center mb-6">
        <div class="flex items-center justify-center gap-3 mb-2">
            <img src="assets/img/iconsmexa.png" class="w-12 h-12">
            <h1 class="text-2xl font-bold text-gray-800">
                PORTAL KURIKULUM
            </h1>
        </div>
        <p class="text-sm text-gray-500 font-medium">
            SMK Negeri 1 Probolinggo – Pusat layanan kurikulum & administrasi guru
        </p>
    </div>

    <!-- Grid Kategori -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Layanan Harian -->
        <div class="bg-white rounded-xl shadow p-5">
            <h2 class="text-lg font-semibold text-blue-600 mb-4">
                🟦 Layanan Harian Guru
            </h2>
            <div class="space-y-3">
                <a href="./?url=SuratIjin/inputForm" class="block bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-medium text-center">
                    📝 Buat Surat Izin Siswa
                </a>
                <a href="./?url=SuratIjin/inputTokenForm" class="block bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-medium text-center">
                    🔑 Cetak Surat via Token
                </a>
                <a href="./?url=GuruPiket/index" class="block bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-medium text-center">
                    📒 Jurnal Guru Piket
                </a>
            </div>
        </div>

        <!-- Administrasi Kurikulum -->
        <div class="bg-white rounded-xl shadow p-5">
            <h2 class="text-lg font-semibold text-orange-600 mb-4">
                🟧 Administrasi & Kurikulum
            </h2>
            <ul class="space-y-3 text-sm">
                <li>
                    <a href="#" class="flex justify-between items-center bg-orange-50 hover:bg-orange-100 px-4 py-3 rounded-lg">
                        <span>📄 SK Personalia</span>
                        <span class="text-xs text-gray-500">PDF</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex justify-between items-center bg-orange-50 hover:bg-orange-100 px-4 py-3 rounded-lg">
                        <span>📅 Jadwal Mengajar</span>
                        <span class="text-xs text-gray-500">PDF</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex justify-between items-center bg-orange-50 hover:bg-orange-100 px-4 py-3 rounded-lg">
                        <span>🗓️ Kalender Akademik</span>
                        <span class="text-xs text-gray-500">PDF</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Sistem Terintegrasi -->
        <div class="bg-white rounded-xl shadow p-5">
            <h2 class="text-lg font-semibold text-purple-600 mb-4">
                🟪 Sistem Akademik Terintegrasi
            </h2>
            <div class="space-y-3">
                <a href="http://36.92.104.129:8154/" target="_blank"
                   class="block bg-purple-500 hover:bg-purple-600 text-white px-4 py-3 rounded-lg font-medium text-center">
                    📘 E-Rapor ↗
                </a>
                <a href="https://lookerstudio.google.com/reporting/b9893283-7d39-4252-9c03-359abad8bce0"
                   target="_blank"
                   class="block bg-purple-500 hover:bg-purple-600 text-white px-4 py-3 rounded-lg font-medium text-center">
                    🔍 Cek Guru Wali ↗
                </a>
            </div>
        </div>

        <!-- Informasi & Bantuan -->
        <div class="bg-white rounded-xl shadow p-5">
            <h2 class="text-lg font-semibold text-green-600 mb-4">
                🟫 Informasi & Bantuan
            </h2>
            <ul class="space-y-3 text-sm">
                <li class="bg-green-50 px-4 py-3 rounded-lg">
                    📢 Pengumuman Kurikulum
                </li>
                <li class="bg-green-50 px-4 py-3 rounded-lg">
                    📘 Panduan Penggunaan Portal
                </li>
                <li class="bg-green-50 px-4 py-3 rounded-lg">
                    ☎️ Kontak Operator Kurikulum
                </li>
            </ul>
        </div>

        <!-- Eksperimen -->
        <div class="bg-gray-200 rounded-xl p-5 md:col-span-2">
            <h2 class="text-lg font-semibold text-gray-600 mb-3">
                ⚫ Eksperimen / Coming Soon
            </h2>
            <div class="flex flex-col md:flex-row gap-3">
                <div class="flex-1 bg-gray-300 text-gray-600 px-4 py-3 rounded-lg text-center cursor-not-allowed">
                    🤖 smexAI – Asisten Guru (segera hadir)
                </div>
                <div class="flex-1 bg-gray-300 text-gray-600 px-4 py-3 rounded-lg text-center cursor-not-allowed">
                    🧪 Fitur Baru Lainnya
                </div>
            </div>
        </div>

    </div>

    <p class="text-center text-xs text-gray-400 mt-8">
        Versi awal portal kurikulum • dikembangkan bertahap
    </p>
</div>

</body>
</html>
