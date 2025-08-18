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
            <input type="text" placeholder="Masukkan Nama Guru Piket" id="namaGuru"
                class="flex-1 border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            <button onclick="loginGuru()"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-4 py-2 rounded-lg">Login</button>
        </div>

        <div id="guruAktif" class="hidden">
            <p class="text-gray-700">Login sebagai: <span id="namaAktif" class="font-bold"></span></p>
            <button onclick="logoutGuru()" class="text-sm text-red-500 hover:underline">Logout</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card Belum Diizinkan -->
            <div class="bg-white rounded-xl shadow p-4 flex flex-col">
                <h2 class="font-semibold text-lg text-gray-700 mb-3 border-b pb-2">Belum Diizinkan</h2>
                <div class="flex-1 overflow-y-auto pr-2 max-h-96">
                    <ul class="space-y-2">
                        <?php if (!empty($belumIzin)) : ?>
                            <?php foreach ($belumIzin as $siswa) : ?>
                                <li class="flex justify-between items-center bg-gray-50 p-3 rounded-lg shadow-sm">
                                    <div>
                                        <p class="font-medium text-gray-800"><?= htmlspecialchars($siswa['nama']) ?></p>
                                        <p class="text-sm text-gray-500"><?= htmlspecialchars($siswa['kelas']) ?></p>
                                        <p class="text-xs text-gray-500 mt-1">Keperluan: <?= htmlspecialchars($siswa['keperluan']) ?></p>
                                    </div>
                                    <button onclick="izinkan(<?= $siswa['id'] ?>)"
                                        class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-sm">
                                        Izinkan
                                    </button>
                                </li>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <li class="text-gray-500 italic">Tidak ada data</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <!-- Card Sudah Diizinkan -->
            <div class="bg-white rounded-xl shadow p-4 flex flex-col">
                <h2 class="font-semibold text-lg text-gray-700 mb-3 border-b pb-2">Sudah Diizinkan</h2>
                <div class="flex-1 overflow-y-auto pr-2 max-h-96">
                    <ul class="space-y-2">
                        <?php if (!empty($sudahIzin)) : ?>
                            <?php foreach ($sudahIzin as $siswa) : ?>
                                <li class="bg-gray-50 p-3 rounded-lg shadow-sm">
                                    <div class="flex justify-between items-start">
                                        <!-- Bagian Nama & Kelas -->
                                        <div>
                                            <span class="block font-semibold text-gray-800"><?= htmlspecialchars($siswa['nama']) ?></span>
                                            <span class="text-sm text-gray-600"><?= htmlspecialchars($siswa['kelas']) ?></span>
                                        </div>

                                        <!-- Tombol WhatsApp -->
                                        <?php if (!empty($siswa['no_telp'])) : ?>
                                            <a href="https://wa.me/62<?= preg_replace('/[^0-9]/', '', $siswa['no_telp']) ?>" target="_blank"
                                                class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white text-xs font-medium px-3 py-1.5 rounded-lg shadow">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M20 3.5A10.46 10.46 0 0012 2a10.46 10.46 0 00-8 18.5L2 22l2.5-2A10.46 10.46 0 0012 22a10.5 10.5 0 008-18.5zM12 20a8.41 8.41 0 01-4.29-1.16l-.31-.19-2.55.66.68-2.48-.21-.33A8.48 8.48 0 1120.5 12 8.5 8.5 0 0112 20zm4.32-6.26c-.24-.12-1.41-.7-1.62-.78s-.38-.12-.55.12-.63.78-.77.94-.28.17-.52.05a6.88 6.88 0 01-2-1.23 7.38 7.38 0 01-1.38-1.71c-.14-.24 0-.37.1-.5.09-.1.24-.28.35-.42a1.72 1.72 0 00.23-.39.44.44 0 00-.02-.42c-.06-.12-.55-1.32-.76-1.8s-.41-.42-.55-.43h-.47a.91.91 0 00-.66.31 2.77 2.77 0 00-.87 2.06 4.83 4.83 0 001 2.53 11 11 0 004.75 4.07 16.2 16.2 0 001.6.59 3.84 3.84 0 001.76.11 2.86 2.86 0 001.87-1.33 2.35 2.35 0 00.16-1.34c-.07-.12-.21-.17-.45-.29z" />
                                                </svg>
                                                WhatsApp
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Info tambahan -->
                                    <p class="text-xs text-gray-500 mt-2">
                                        Keperluan: <?= htmlspecialchars($siswa['keperluan']) ?>
                                    </p>
                                    <p class="text-xs text-gray-400">
                                        Di izinkan oleh: <?= htmlspecialchars($siswa['guru_piket']) ?>
                                    </p>
                                </li>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <li class="text-gray-500 italic">Belum ada siswa diizinkan</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>


        </div>







    </div>


    <script>
        // let guruAktif = null; // penanda login

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

        let guruAktif = localStorage.getItem("guruAktif") || null;

        // update tampilan awal kalau sudah login sebelumnya
        if (guruAktif) {
            document.getElementById("namaAktif").innerText = guruAktif;
            document.getElementById("loginForm").classList.add("hidden");
            document.getElementById("guruAktif").classList.remove("hidden");
        }

        // Login Guru
        function loginGuru() {
            let nama = document.getElementById("namaGuru").value.trim();
            if (!nama) return alert("Nama tidak boleh kosong!");

            guruAktif = nama;
            localStorage.setItem("guruAktif", nama); // simpan di localStorage

            document.getElementById("namaAktif").innerText = nama;
            document.getElementById("loginForm").classList.add("hidden");
            document.getElementById("guruAktif").classList.remove("hidden");
        }

        function logoutGuru() {
            guruAktif = null;
            localStorage.removeItem("guruAktif"); // hapus dari localStorage

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