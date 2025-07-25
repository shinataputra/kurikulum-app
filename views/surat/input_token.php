<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Masukkan Token</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
    <div class="bg-white shadow-md rounded-xl p-6 w-full max-w-sm text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">🔑 Masukkan Token</h1>
        <p class="text-sm text-gray-600 mb-6">Masukkan token surat ijin dari siswa untuk mencetak.</p>

        <form method="get" action="./" class="space-y-4" target="_blank">
            <input type="hidden" name="url" value="SuratIjin/CetakPdfbyToken">

            <input
                type="text"
                name="token"
                required
                maxlength="32"
                placeholder="Contoh: 9A2X3"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-center font-mono tracking-widest uppercase">

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all">
                Cetak Surat
            </button>
        </form>
    </div>
</body>

</html>