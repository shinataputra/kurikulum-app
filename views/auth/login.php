<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Portal Kurikulum - SMKN 1 Probolinggo</title>
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">

    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg w-full max-w-md">

        <!-- Header SMK -->
        <div class="flex flex-col items-center justify-center mb-4 text-center gap-2">
            <img src="assets/img/iconsmexa.png" alt="Logo SMKN 1 Probolinggo" class="w-12 h-12">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 leading-tight">
                SMK NEGERI 1 PROBOLINGGO
            </h1>
        </div>



        <!-- Subheading -->
        <div class="flex justify-center">
            <p class="text-xs sm:text-sm font-semibold text-blue-700 bg-blue-100 px-3 py-1 rounded-full inline-flex items-center gap-1 mb-6 shadow-sm tracking-wide uppercase justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path fill="currentColor"
                        d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z" />
                    <path fill="#fff"
                        d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z" />
                </svg>
                Portal Kurikulum
            </p>
        </div>


        <!-- Judul -->
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-700">Login Pengguna</h2>

        <!-- Error -->
        <?php if (!empty($_SESSION['login_error'])): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                <?= $_SESSION['login_error'] ?>
            </div>
            <?php unset($_SESSION['login_error']); ?>
        <?php endif; ?>

        <!-- Form -->
        <form method="POST" action="index.php?url=auth/doLogin" class="space-y-4">

            <input type="text" name="username" placeholder="Username" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm shadow-sm" />

            <input type="password" name="password" placeholder="Password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm shadow-sm" />

            <div id="namaGuru" class="hidden">
                <input type="text" name="nama" placeholder="Nama Guru Piket"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm shadow-sm" />
            </div>

            <!-- Tombol login -->
            <button type="submit"
                class="flex items-center justify-center gap-2 bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-cyan-300 text-white px-4 py-3 rounded-lg font-medium transition-all text-md w-full">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3H5.25A2.25 2.25 0 003 5.25v13.5A2.25 2.25 0 005.25 21H13.5a2.25 2.25 0 002.25-2.25V15M21 12h-9m0 0l3-3m-3 3l3 3" />
                </svg>
                Login
            </button>

        </form>
    </div>

    <script>
        document.querySelector('input[name="username"]').addEventListener('input', function() {
            const namaDiv = document.getElementById('namaGuru');
            if (this.value.trim().toLowerCase() === 'guru') {
                namaDiv.classList.remove('hidden');
            } else {
                namaDiv.classList.add('hidden');
            }
        });
    </script>

</body>


</html>