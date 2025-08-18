<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru Piket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/iconsmexa.png">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen font-sans p-6">

    <div class="bg-white shadow-xl rounded-2xl w-full max-w-4xl p-6 space-y-6 mx-auto">

        <!-- Header: Tanggal & Waktu -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-800"><?= $title ?></h1>
                <p id="tanggal" class="text-sm text-gray-500"></p>
            </div>
            <div id="jam" class="text-xl font-bold text-gray-700"></div>
        </div>

        <!-- Kata Motivasi -->
        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-4 rounded-xl shadow">
            <p id="motivasi" class="text-center italic">"Mengajar itu investasi masa depan."</p>
        </div>

        <!-- Login -->
        <div id="loginForm" class="flex gap-2">
            <input type="text" placeholder="Masukkan Nama" id="namaGuru"
                class="flex-1 border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            <button onclick="loginGuru()"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-4 py-2 rounded-lg">Login</button>
        </div>

        <div id="guruAktif" class="hidden">
            <p class="text-gray-700">Login sebagai: <span id="namaAktif" class="font-bold"></span></p>
            <button onclick="logoutGuru()" class="text-sm text-red-500 hover:underline">Logout</button>
        </div>

        <!-- List Siswa Belum Diizinkan -->
        <div>
            <h2 class="font-semibold text-lg text-gray-700 mb-2">Belum Diizinkan</h2>
            <ul id="belumIzin" class="space-y-2">
                <?php if (!empty($belumIzin)) : ?>
                    <?php foreach ($belumIzin as $siswa) : ?>
                        <li class="flex justify-between items-center bg-gray-50 p-2 rounded-lg">
                            <span><?= htmlspecialchars($siswa['nama']) ?></span>
                            <button onclick="izinkan(<?= $siswa['id'] ?>)"
                                class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-sm">Izinkan</button>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li class="text-gray-500 italic">Tidak ada data</li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- List Siswa Sudah Diizinkan -->
        <div>
            <h2 class="font-semibold text-lg text-gray-700 mb-2">Sudah Diizinkan</h2>
            <ul id="sudahIzin" class="space-y-2 text-green-600">
                <?php if (!empty($sudahIzin)) : ?>
                    <?php foreach ($sudahIzin as $siswa) : ?>
                        <li class="bg-gray-50 p-3 rounded-lg">
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-800"><?= htmlspecialchars($siswa['nama']) ?></span>
                                <span class="text-xs text-gray-500">Di izinkan oleh: <?= htmlspecialchars($siswa['guru_piket']) ?></span>
                            </div>
                            <div class="text-sm text-gray-600 mt-1">
                                Keperluan: <?= htmlspecialchars($siswa['keperluan']) ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li class="text-gray-500 italic">Belum ada siswa diizinkan</li>
                <?php endif; ?>
            </ul>
        </div>



    </div>


    <script>
        let guruAktif = null; // penanda login

        // Jam & Tanggal
        function updateWaktu() {
            const now = new Date();
            document.getElementById("tanggal").innerText = now.toLocaleDateString("id-ID", {
                weekday: "long",
                year: "numeric",
                month: "long",
                day: "numeric"
            });
            document.getElementById("jam").innerText = now.toLocaleTimeString("id-ID");
        }
        setInterval(updateWaktu, 1000);
        updateWaktu();

        // Kata motivasi acak
        const motivasiList = [
            "Mengajar itu investasi masa depan.",
            "Sabar itu separuh dari ilmu.",
            "Guru hebat melahirkan murid hebat.",
            "Setiap hari adalah kesempatan belajar baru."
        ];
        document.getElementById("motivasi").innerText = motivasiList[Math.floor(Math.random() * motivasiList.length)];

        // Login Guru
        function loginGuru() {
            let nama = document.getElementById("namaGuru").value.trim();
            if (!nama) return alert("Nama tidak boleh kosong!");
            guruAktif = nama; // simpan siapa yang login
            document.getElementById("namaAktif").innerText = nama;
            document.getElementById("loginForm").classList.add("hidden");
            document.getElementById("guruAktif").classList.remove("hidden");
        }

        function logoutGuru() {
            guruAktif = null; // reset login
            document.getElementById("namaGuru").value = "";
            document.getElementById("loginForm").classList.remove("hidden");
            document.getElementById("guruAktif").classList.add("hidden");
        }


        function izinkan(id) {
            if (!guruAktif) {
                alert("Silakan login sebagai guru piket terlebih dahulu!");
                return;
            }

            fetch("Dashboard/konfirmasi", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "id=" + id + "&guru=" + encodeURIComponent(guruAktif)
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert("Izin berhasil diberikan oleh " + guruAktif);
                        location.reload(); // refresh data biar sinkron sama DB
                    } else {
                        alert("Gagal konfirmasi: " + (data.msg || ""));
                    }
                });
        }
    </script>

</body>

</html>