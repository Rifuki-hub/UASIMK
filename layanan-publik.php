<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Publik - Direktorat Jenderal Bea dan Cukai</title>

    <!-- ... (Link ke Font, Tailwind, dan Lucide Icons) ... -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Memuat CSS utama dan CSS khusus halaman ini -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="layanan.css">
    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="perbaikan.css">
</head>
<body class="bg-gray-50">

    <?php include 'header.php'; ?>

    <main>
        <!-- Breadcrumb -->
        <section class="bg-gray-100 py-4 border-b">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li><a href="#" class="hover:text-gray-700 flex items-center gap-1"><i data-lucide="home" class="w-4 h-4"></i> Beranda</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li class="font-semibold text-gray-800" aria-current="page">Layanan Publik</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Page Header -->
        <section class="page-header">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center pt-10">
                <h1 class="text-4xl font-bold text-[#0A2351] tracking-tight">Standar Layanan Publik Kami</h1>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Temukan informasi rinci mengenai berbagai layanan di bidang impor, ekspor, fasilitas kepabeanan, dan cukai yang kami sediakan.</p>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="py-12 sm:py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <a href="#" class="service-card group">
                        <div class="service-card-icon bg-blue-100 text-blue-600">
                            <i data-lucide="arrow-down-left"></i>
                        </div>
                        <h3 class="service-card-title">Layanan Importasi</h3>
                        <p class="service-card-description">Prosedur dan ketentuan untuk impor barang.</p>
                    </a>
                    <a href="#" class="service-card group">
                        <div class="service-card-icon bg-green-100 text-green-600">
                            <i data-lucide="arrow-up-right"></i>
                        </div>
                        <h3 class="service-card-title">Layanan Ekspor</h3>
                        <p class="service-card-description">Prosedur dan ketentuan untuk ekspor barang.</p>
                    </a>
                    <a href="#" class="service-card group">
                        <div class="service-card-icon bg-purple-100 text-purple-600">
                            <i data-lucide="building-2"></i>
                        </div>
                        <h3 class="service-card-title">Fasilitas Kepabeanan</h3>
                        <p class="service-card-description">Informasi tentang KITE, Kawasan Berikat, dll.</p>
                    </a>
                    <a href="#" class="service-card group">
                        <div class="service-card-icon bg-amber-100 text-amber-600">
                            <i data-lucide="stamp"></i>
                        </div>
                        <h3 class="service-card-title">Layanan Cukai</h3>
                        <p class="service-card-description">Ketentuan terkait barang kena cukai.</p>
                    </a>
                </div>

                <!-- Maklumat Pelayanan -->
                <div class="mt-20">
                    <div class="info-card-maklumat">
                        <div class="info-icon bg-white/20 text-white"><i data-lucide="file-text"></i></div>
                        <div>
                            <h2 class="info-title-maklumat !text-3xl font-bold text-[#0A2351] tracking-tight">Maklumat Pelayanan</h2>
                            <p class="info-text-maklumat mt-4">"Dengan ini, kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai peraturan perundang-undangan yang berlaku."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <div id="service-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl p-6 relative">
            <button id="close-modal-button" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            <h2 id="modal-title" class="text-2xl font-bold text-gray-800 mb-4"></h2>
            <div id="modal-content" class="text-gray-600"></div>
        </div>
    </div>

    <script src="script.js" defer></script>
    <script src="layanan.js" defer></script>
</body>
</html>
