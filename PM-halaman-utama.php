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
                        <li class="text-white">Pengaduan</li>
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
                                <a href="PM-halaman-utama.php" class="hover:underline">
                                    Pusat Pengaduan Masyarakat
                                </a>
                            </h2>

                            <div class="prose prose-blue max-w-none text-gray-800">
                                <p>Terima kasih telah mengunjungi layanan pengaduan masyarakat DJBC</p>
                                <p>Apabila Anda:</p>
                                <ol class="list-decimal ml-6 space-y-2">
                                    <li><strong>Mempunyai keluhan terkait pelayanan kepabeanan dan cukai;</strong></li>
                                    <li><strong>Mengetahui informasi dugaan pelanggaran di bidang kepabeanan dan cukai; dan</strong></li>
                                    <li><strong>Mengetahui adanya sikap dan perilaku Pegawai Bea dan Cukai yang diduga melanggar ketentuan disiplin dan/atau kode etik</strong></li>
                                </ol>
                                <p>Silakan sampaikan pengaduan Anda kepada kami melalui saluran pengaduan DJBC.</p>

                                <div class="border-b border-gray-300 font-bold bg-[#f0f5f9] px-4 py-2 mt-6">A. Sistem Aplikasi Pengaduan Online</div>
                                <div class="mt-2 space-y-2 text-justify">
                                    <p>
                                        Anda dapat menyampaikan pengaduan secara online melalui website DJBC
                                        <a href="PM-rekam-pengaduan.php" class="text-blue-600 underline" target="_blank">
                                            http://www.beacukai.go.id/pengaduan.html
                                        </a>
                                    </p>
                                    <p>
                                        Setiap pengaduan yang Anda sampaikan akan mendapatkan nomor tiket. Nomor tiket dapat digunakan untuk menelusuri perkembangan tindak lanjut penanganan pengaduan, menambahkan data/informasi yang diperlukan, membuat data pengaduan baru, dan <em>browsing</em> daftar pengaduan yang pernah Anda buat.
                                    </p>
                                    <p>
                                        Penggunaan nomor tiket sebagai upaya menjaga kerahasiaan informasi dan identitas pengadu. Sampaikan informasi pengaduan Anda dengan lengkap dan jelas, agar kami dapat menindaklanjuti pengaduan dengan efektif.
                                    </p>
                                </div>

                                <div class="border-b border-gray-300 font-bold bg-[#f0f5f9] px-4 py-2 mt-6">B. Saluran Pengaduan Lainnya</div>
                                <div class="mt-2 space-y-2 text-justify">
                                    <p>
                                        Apabila Anda mengalami kesulitan untuk menyampaikan pengaduan melalui sistem aplikasi pengaduan <em>online</em>, Anda dapat menyampaikan pengaduan melalui saluran di bawah ini dengan tetap mendapatkan nomor tiket untuk dapat mengakses sistem pengaduan <em>online</em>.
                                    </p>

                                    <div class="overflow-auto">
                                        <table class="table-auto w-full text-sm text-left mt-4">
                                            <tbody>
                                                <tr>
                                                    <td class="font-semibold w-1/4">Telepon</td>
                                                    <td class="w-1/12">:</td>
                                                    <td>(021) 1500 225 (Bravo Bea Cukai)</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-semibold">Faksimile</td>
                                                    <td>:</td>
                                                    <td>(021) 4890966</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-semibold">E-mail</td>
                                                    <td>:</td>
                                                    <td>pengaduan.beacukai@customs.go.id</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-semibold">Surat</td>
                                                    <td>:</td>
                                                    <td>
                                                        d.a. Direktur Kepatuhan Internal Direktorat Jenderal Bea dan Cukai<br>
                                                        Jl. Ahmad Yani By Pass - Rawamangun, Jakarta Timur<br>
                                                        Jakarta - 13230
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        Menyampaikan secara langsung melalui Unit Kepatuhan Internal di setiap Kantor Bea Cukai
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <p class="mt-6 italic font-semibold">
                                        Partisipasi dan peran serta Anda sangat penting dalam mewujudkan Bea Cukai makin baik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js" defer></script>
</body>

</html>