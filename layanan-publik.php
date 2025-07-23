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
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-bold text-[#0A2351] tracking-tight">Standar Layanan Publik Kami</h1>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Temukan informasi rinci mengenai berbagai layanan di bidang impor, ekspor, fasilitas kepabeanan, dan cukai yang kami sediakan.</p>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="py-16 sm:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <a href="#" class="service-card">
                        <div class="service-icon bg-blue-100 text-blue-600"><i data-lucide="arrow-down-left"></i></div>
                        <h3 class="service-title">Layanan Importasi</h3>
                        <p class="service-description">Prosedur dan panduan untuk mengimpor barang ke Indonesia.</p>
                    </a>
                    <a href="#" class="service-card">
                        <div class="service-icon bg-green-100 text-green-600"><i data-lucide="arrow-up-right"></i></div>
                        <h3 class="service-title">Layanan Ekspor</h3>
                        <p class="service-description">Prosedur dan panduan untuk mengekspor barang dari Indonesia.</p>
                    </a>
                    <a href="#" class="service-card">
                        <div class="service-icon bg-purple-100 text-purple-600"><i data-lucide="building-2"></i></div>
                        <h3 class="service-title">Fasilitas Kepabeanan</h3>
                        <p class="service-description">Informasi tentang fasilitas seperti KITE, Kawasan Berikat, dll.</p>
                    </a>
                    <a href="#" class="service-card">
                        <div class="service-icon bg-amber-100 text-amber-600"><i data-lucide="stamp"></i></div>
                        <h3 class="service-title">Layanan Cukai</h3>
                        <p class="service-description">Informasi tentang barang kena cukai dan prosedurnya.</p>
                    </a>
                </div>

                <!-- Maklumat Pelayanan -->
                <div class="mt-20">
                    <div class="info-card-maklumat">
                        <div class="info-icon bg-white/20 text-white"><i data-lucide="file-text"></i></div>
                        <div>
                            <h2 class="info-title-maklumat">Maklumat Pelayanan</h2>
                            <p class="info-text-maklumat">"Dengan ini, kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai peraturan perundang-undangan yang berlaku."</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js" defer></script>
    <script src="layanan.js" defer></script>
</body>
</html>
