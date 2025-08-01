<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Token Surat Ijin</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 p-2">

    <div class="bg-white px-3 py-4 sm:px-6 sm:py-6 rounded-lg shadow-md w-full max-w-md text-center">
        <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-4">Token Cetak Surat Ijin</h2>
        <p class="text-xs sm:text-sm text-gray-600 mb-2">Berikan token ini ke guru piket untuk mencetak surat:</p>
        <div class="text-3xl sm:text-4xl font-mono font-extrabold tracking-widest text-blue-700 bg-blue-50 border border-blue-200 rounded-md px-4 py-3 my-4 shadow-sm">
            <?= $token ?>
        </div>
        <p class="text-xs sm:text-sm text-gray-400">Jangan sampai lupa ya!</p>
        <a href="./?url=SuratIjin/inputForm" class="block mt-3 text-xs sm:text-sm text-gray-500 hover:text-blue-500 transition">
            ⬅️ Surat Ijin Baru
        </a>
    </div>

</body>

</html>