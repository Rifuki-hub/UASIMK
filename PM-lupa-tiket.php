<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketentuan Impor Barang PMI - FAQ</title>

    <!-- ... (Link ke Font, Tailwind, dan Lucide Icons) ... -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Memuat CSS utama dan CSS khusus FAQ -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="theme.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <main class="mt-2">
        <div id="content" class="content bg-gray-50">
            <div class="container mx-auto px-4 py-4 bg-[#0A2351] text-white rounded-lg shadow-md mt-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-[22px] font-semibold">Pengaduan Masyarakat</h1>
                    <ul class="breadcrumb flex space-x-3 text-sm text-white/80">
                        <li>
                            <a href="dashboard.php" class="hover:underline flex items-center gap-1">
                                <i class="fa fa-home"></i> Home
                            </a>
                        </li>
                        <li>
                            <a href="PM-halaman-utama.php" class="hover:underline">Pengaduan</a>
                        </li>
                        <li class="text-white">Lupa Tiket</li>
                    </ul>
                </div>
            </div>

            <div class="container mx-auto px-4 py-8">
                <div class="flex flex-col md:flex-row md:gap-6">
                    <aside class="w-full md:w-1/4">
                        <ul class="rounded-lg overflow-hidden shadow-sm">
                            <li class="bg-[#0A2351] text-white font-semibold">
                                <a href="PM-halaman-utama.php" class="block py-3 px-4">Pengaduan Masyarakat</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50 border-b border-gray-200">
                                <a href="PM-halaman-utama.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Halaman Utama</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50 border-b border-gray-200">
                                <a href="PM-rekam-pengaduan.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Rekam Pengaduan</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50 border-b border-gray-200">
                                <a href="PM-lupa-tiket.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Kehilangan Nomor Tiket</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50">
                                <a href="PM-tracking.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Tracking Pengaduan</a>
                            </li>
                        </ul>
                    </aside>

                    <section class="w-full md:w-3/4">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h2 class="text-2xl font-bold text-[#0A2351] mb-4">
                                <a href="PM-lupa-tiket.php" class="block py-3 px-0 text-[#0A2351] hover:underline">Kehilangan Nomor Tiket</a>
                            </h2>

                            <form id="recovery-form" data-confirm="true" data-confirm-message="Anda yakin ingin mengirim permintaan ini?" data-submit-delay="1000" data-success-message="Nomor tiket berhasil dikirim lewat email!" class="prose prose-blue max-w-none text-gray-800 space-y-6">
                                <p class="text-base">
                                    Silahkan masukkan alamat email yang dulu pernah Anda gunakan untuk membackup data pengaduan yang Anda kirim.
                                    <br>Syaratnya: jika email Anda terdaftar dalam sistem kami, maka kami akan mengirimkan nomor tiket pengaduan Anda.
                                    <br>Contoh: <span class="font-mono">user@system.com</span>
                                </p>

                                <div class="space-y-4">
                                    <div>
                                        <label for="txtEmailPengadu" class="block text-sm font-medium">Email *</label>
                                        <input type="email" id="txtEmailPengadu" name="txtEmailPengadu" required maxlength="35"
                                            oninput="this.value = this.value.toLowerCase()"
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    </div>

                                    <div class="flex flex-col md:flex-row items-center gap-4">
                                        <img id="image" src="https://www.beacukai.go.id/images/captcha/captcha.png" alt="Captcha"
                                            width="100" height="32"
                                            class="border rounded cursor-pointer w-24 h-12"
                                            onclick="reloadCaptcha()" />

                                        <input type="text" id="txtCaptcha" name="txtCaptcha" maxlength="6"
                                            placeholder="Isikan key code"
                                            class="mt-1 flex-1 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    </div>
                                </div>

                                <button type="submit"
                                    id="btnEmailRecovery"
                                    class="mt-6 bg-[#0A2351] text-white px-6 py-2 rounded hover:bg-[#082a49] transition">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js" defer></script>
    <script src="submit-form.js" defer></script>
</body>

</html>