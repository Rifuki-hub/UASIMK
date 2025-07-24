<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Publik - Direktorat Jenderal Bea dan Cukai</title>
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
        <!-- Breadcrumb Section -->
        <section class="bg-gray-100 py-4 border-b">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 whitespace-nowrap">
                        <li><a href="dashboard.php" class="hover:text-gray-700 flex items-center gap-1"><i data-lucide="home" class="w-4 h-4"></i> Beranda</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li class="font-medium text-gray-700" aria-current="page">Informasi Publik</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Main Content Section dengan Layout 2 Kolom -->
        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row md:gap-8">

                <!-- Sidebar Media Center -->
                <aside class="w-full md:w-1/4 mb-8 md:mb-0 flex-shrink-0">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden">
                        <h3 class="bg-[#0A2351] text-white font-bold p-4 text-lg">Informasi Publik</h3>
                        <ul class="text-gray-700">
                            <li class="border-b"><a href="berita.php" class="block py-3 px-4 hover:bg-gray-50">Berita</a></li>
                            <li class="border-b"><a href="#" class="block py-3 px-4 hover:bg-gray-50">Kegiatan</a></li>
                            <li class="border-b"><a href="#" class="block py-3 px-4 hover:bg-gray-50">Pengumuman</a></li>
                            <li><a href="#" class="block py-3 px-4 hover:bg-gray-50">Download</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Konten Utama: Penjelasan Informasi Publik yang Diperbarui -->
                <div class="w-full md:w-3/4">
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-md border">
                        <div class="relative rounded-lg overflow-hidden mb-8">
                            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070&auto=format&fit=crop" alt="Pusat Media dan Berita" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <h1 class="absolute bottom-6 left-6 text-3xl font-bold text-white">Pusat Informasi Publik</h1>
                        </div>

                        <div class="prose max-w-none text-justify">
                            <p>
                                Selamat datang di Pusat Informasi Publik Direktorat Jenderal Bea dan Cukai. Halaman ini merupakan gerbang utama Anda untuk mengakses berbagai informasi resmi yang kami sediakan untuk publik, media, dan para pemangku kepentingan. Kami berkomitmen untuk menyediakan data dan berita yang akurat, transparan, dan mudah diakses.
                            </p>
                        </div>

                        <hr class="my-8">

                        <h2 class="text-2xl font-bold text-[#0A2351] mb-6">Jelajahi Kategori Informasi</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            
                            <a href="berita.php" class="card card-interactive flex items-start gap-4 p-4">
                                <div class="bg-blue-100 text-blue-600 rounded-lg p-3">
                                    <i data-lucide="newspaper" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Berita</h3>
                                    <p class="text-sm text-gray-500 mt-1">Ikuti perkembangan terbaru dan siaran pers resmi.</p>
                                </div>
                            </a>

                            <a href="#" class="card card-interactive flex items-start gap-4 p-4">
                                <div class="bg-green-100 text-green-600 rounded-lg p-3">
                                    <i data-lucide="calendar-days" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Kegiatan</h3>
                                    <p class="text-sm text-gray-500 mt-1">Informasi jadwal acara dan sosialisasi publik.</p>
                                </div>
                            </a>

                            <a href="#" class="card card-interactive flex items-start gap-4 p-4">
                                <div class="bg-yellow-100 text-yellow-600 rounded-lg p-3">
                                    <i data-lucide="megaphone" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Pengumuman</h3>
                                    <p class="text-sm text-gray-500 mt-1">Pengumuman resmi terkait layanan dan peraturan.</p>
                                </div>
                            </a>

                            <a href="#" class="card card-interactive flex items-start gap-4 p-4">
                                <div class="bg-purple-100 text-purple-600 rounded-lg p-3">
                                    <i data-lucide="download-cloud" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Download</h3>
                                    <p class="text-sm text-gray-500 mt-1">Unduh dokumen publik, formulir, dan materi lainnya.</p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
