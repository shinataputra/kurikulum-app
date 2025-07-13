<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>QR Surat Ijin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-md text-center">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">QR Code Surat Ijin</h2>

        <?php if (isset($surat) && $surat['qr_token']): ?>
            <p class="mb-3 text-sm text-gray-600">Tunjukkan QR ini ke guru piket untuk dicetak.</p>

            <?php
                $link = 'http://localhost/kurikulum-app/public/?url=SuratIjin/printByToken&token=' . $surat['qr_token'];
                $encodedLink = urlencode($link);
            ?>

            <div class="border rounded-lg p-4 bg-gray-50 inline-block">
                <img
                    src="https://chart.googleapis.com/chart?chs=220x220&cht=qr&chl=<?= $encodedLink ?>"
                    alt="QR Code" class="mx-auto">
            </div>

            <p class="text-xs text-gray-500 mt-4 break-all"><?= $link ?></p>

        <?php else: ?>
            <p class="text-red-500">Token tidak ditemukan.</p>
        <?php endif; ?>
    </div>

</body>

</html>
