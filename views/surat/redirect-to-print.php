<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Mengalihkan...</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">
    <script>
        window.onload = function() {
            const url = './?url=SuratIjin/print&id=<?= $lastId ?>';
            window.open(url, '_blank'); // buka halaman cetak di tab baru
            window.location.href = './?url=SuratIjin/inputForm'; // kembali ke form
        };
    </script>
</head>

<body>
    <p>Mengalihkan ke halaman cetak...</p>
</body>

</html>