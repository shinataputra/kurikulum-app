<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">

    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Login Pengguna</h2>

        <?php if (!empty($_SESSION['login_error'])): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                <?= $_SESSION['login_error'] ?>
            </div>
            <?php unset($_SESSION['login_error']); ?>
        <?php endif; ?>

        <form method="POST" action="index.php?url=auth/doLogin" class="space-y-4">
            <input type="text" name="username" placeholder="Username" required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-200 text-sm" />

            <input type="password" name="password" placeholder="Password" required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-200 text-sm" />

            <div id="namaGuru" class="hidden">
                <input type="text" name="nama" placeholder="Nama Guru Piket"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-200 text-sm" />
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition text-sm">
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