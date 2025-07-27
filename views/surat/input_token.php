<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Token</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
    <div class="bg-white shadow-md rounded-xl p-6 w-full max-w-sm text-center">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">🔑 Masukkan Token</h1>
        <p class="text-sm md:text-base text-gray-600 mb-6">Masukkan token surat ijin dari siswa untuk mencetak surat izin.</p>

        <form method="get" action="./" class="space-y-4" target="_blank">
            <input type="hidden" name="url" value="SuratIjin/CetakPdfbyToken">

            <input
                type="text"
                name="token"
                required
                maxlength="32"
                placeholder="Contoh: 9A2X3"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-center font-mono tracking-widest uppercase text-lg">

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-all text-lg font-semibold">
                Cetak Surat
            </button>
        </form>
    </div>
</body>

</html>