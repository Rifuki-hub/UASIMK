<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita - Bea Cukai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-50">

    <?php include 'header.php'; ?>

    <main>
        <section class="bg-gray-100 py-4 border-b">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 whitespace-nowrap">
                        <li><a href="dashboard.php" class="hover:text-gray-700 flex items-center gap-1"><i data-lucide="home" class="w-4 h-4"></i> Beranda</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li><a href="media-center.php" class="hover:text-gray-700">Informasi Publik</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li><a href="berita.php" class="hover:text-gray-700">Berita</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li class="font-medium text-gray-700 truncate" aria-current="page">Detail Berita</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row md:gap-8">
                <aside class="w-full md:w-1/4 mb-8 md:mb-0 flex-shrink-0">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden">
                        <h3 class="bg-[#0A2351] text-white font-bold p-4 text-lg">Informasi Publik</h3>
                        <ul class="text-gray-700">
                            <li class="border-b"><a href="berita.php" class="block py-3 px-4 bg-blue-50 text-blue-700 font-semibold">Berita</a></li>
                            <li class="border-b"><a href="#" class="block py-3 px-4 hover:bg-gray-50">Kegiatan</a></li>
                            <li class="border-b"><a href="#" class="block py-3 px-4 hover:bg-gray-50">Pengumuman</a></li>
                            <li><a href="#" class="block py-3 px-4 hover:bg-gray-50">Download</a></li>
                        </ul>
                    </div>
                </aside>

                <div class="w-full md:w-3/4">
                    <article class="bg-white p-6 sm:p-8 rounded-lg shadow-md border">
                        <h1 class="text-3xl md:text-4xl font-bold text-[#0A2351] mb-4 leading-tight">
                            Bea Cukai Malang dan Banyuwangi Gencarkan Sosialisasi Cukai dan Gempur Rokok Ilegal
                        </h1>
                        <div class="flex flex-wrap items-center text-sm text-gray-500 gap-x-4 gap-y-2 mb-6 pb-6 border-b">
                            <div class="flex items-center gap-1.5"><i data-lucide="calendar" class="w-4 h-4"></i><span>07 Juli 2025, 14:38</span></div>
                            <div class="flex items-center gap-1.5"><i data-lucide="user" class="w-4 h-4"></i><span>Admin Web Bea dan Cukai</span></div>
                            <div class="flex items-center gap-4 ml-auto">
                                <span class="text-sm font-medium">Bagikan:</span>
                                <a href="#" class="text-gray-400 hover:text-blue-600" title="Bagikan ke Facebook"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                                <a href="#" class="text-gray-400 hover:text-sky-500" title="Bagikan ke Twitter"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                                <a href="#" class="text-gray-400 hover:text-green-600" title="Bagikan ke WhatsApp"><i data-lucide="message-square" class="w-5 h-5"></i></a>
                            </div>
                        </div>
                        <figure class="mb-8">
                            <img src="http://repository.beacukai.go.id/foto/2025/07/9c00417629786a6378786c43a55d20cc-whatsapp-image-2025-07-07-at-13-30-33.jpeg" alt="Petugas Bea Cukai sedang melakukan sosialisasi kepada pedagang." class="w-full h-auto rounded-lg shadow-lg">
                            <figcaption class="text-center text-sm text-gray-500 mt-2">Petugas Bea Cukai memberikan edukasi mengenai ciri rokok ilegal di Kecamatan Kromengan.</figcaption>
                        </figure>

                        <div class="prose prose-lg max-w-none text-justify">
                            <p><strong>Jakarta, 07-07-2025</strong> - Tekan peredaran rokok ilegal dan tingkatkan pemahaman masyarakat terhadap ketentuan cukai, Bea Cukai Malang dan Bea Cukai Banyuwangi gelar edukasi secara masif di berbagai wilayah Jawa Timur. Kegiatan ini dilakukan melalui berbagai metode, mulai dari layanan informasi keliling, talkshow, podcast, hingga pelatihan teknis kepada aparat penegak hukum.</p>
                            <p>Bea Cukai Malang secara konsisten melaksanakan kegiatan Layanan Informasi Keliling sebagai inovasi penyuluhan cukai yang menyasar langsung para pedagang hasil tembakau. Pada Rabu (25/06), kegiatan ini dilakukan di Kecamatan Kromengan, Kabupaten Malang, dengan menyasar delapan toko yang menjual hasil tembakau. Petugas memberikan informasi tentang ciri-ciri rokok ilegal serta pentingnya mendukung pemberantasan rokok ilegal.</p>
                            <blockquote>
                                <p>“Pemberantasan rokok ilegal membutuhkan partisipasi aktif masyarakat. Edukasi semacam ini diharapkan dapat memperkuat sinergi pengawasan antara pemerintah dan warga,”</p>
                                <footer>— Kepala Subdirektorat Humas dan Penyuluhan Bea Cukai, Budi Prasetiyo.</footer>
                            </blockquote>
                            <p>Sebelumnya, dalam sebuah talkshow di Batu TV Bea Cukai Malang bersama DPRD, Kejaksaan, dan Satpol PP Kabupaten Malang membahas pentingnya pemanfaatan DBH CHT untuk mendukung penegakan hukum di bidang cukai (23/06). Bea Cukai Malang juga berkolaborasi dengan berbagai pihak, seperti Dinas Komunikasi dan Informasi, Kejaksaan Negeri, dan DPRD Kabupaten Malang dalam sebuah podcast edukatif bertajuk Ruang Tamu RRI Malang (24/06). Para narasumber menekankan pentingnya edukasi sejak usia sekolah serta penggunaan dana bagi hasil cukai hasil tembakau (DBH CHT) untuk kesejahteraan masyarakat.</p>
                            <p>Bea Cukai Malang juga aktif memperkuat koordinasi dengan Satpol PP, seperti yang dilakukan dalam Bimbingan Teknis dan Sosialisasi Peraturan Cukai pada Kamis (26/06). Dalam kegiatan ini, para peserta dari Satpol PP Kota Malang mendapatkan pelatihan teknis, termasuk cara mengenali pita cukai asli dan penggunaan aplikasi SIROLEG (Sistem Informasi Rokok Ilegal).</p>
                            <p>Sementara itu, Bea Cukai Banyuwangi turut mengintensifkan upaya edukasi melalui kegiatan sosialisasi yang digelar di Kantor Desa Watukebo, Kecamatan Blimbingsari, Kabupaten Banyuwangi (18/06). Kegiatan ini diikuti oleh para kepala desa, perangkat desa, dan tokoh masyarakat se-Kecamatan Blimbingsari. Materi yang diberikan mencakup jenis-jenis rokok ilegal, ciri pita cukai palsu, serta ancaman hukum bagi pelanggar.</p>
                            <p>“Kami terus mendorong edukasi berkelanjutan, sinergi dengan aparat penegak hukum, serta pemberdayaan masyarakat agar Indonesia bisa bebas dari rokok ilegal. Ini tanggung jawab bersama,” tutup Budi.</p>
                        </div>
                    </article>
                    <section class="mt-16 pt-8 border-t">
                        <h2 class="text-2xl font-bold text-[#0A2351] mb-6">Anda Mungkin Juga Suka</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <a href="berita-detail.php" class="card card-interactive overflow-hidden group block">
                                <img class="w-full h-40 object-cover" src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1000&auto=format&fit=crop" alt="Gambar ilustrasi sosialisasi">
                                <div class="p-4">
                                    <span class="text-sm text-gray-500">Sosialisasi</span>
                                    <h4 class="mt-1 font-semibold text-gray-800 group-hover:text-blue-600 transition-colors leading-tight">Sosialisasi Aturan IMEI untuk UMKM</h4>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>