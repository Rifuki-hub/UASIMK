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
                <div class="max-w-4xl mx-auto space-y-4">
                    
                    <!-- Accordion: Layanan Importasi -->
                    <details class="service-accordion-item group">
                        <summary class="service-accordion-summary">
                            <div class="flex items-center gap-4">
                                <div class="service-icon bg-blue-100 text-blue-600"><i data-lucide="arrow-down-left"></i></div>
                                <h2 class="service-title">Layanan Importasi</h2>
                            </div>
                            <i data-lucide="chevron-down" class="accordion-icon"></i>
                        </summary>
                        <div class="service-accordion-content">
                            <details class="nested-accordion">
                                <summary class="nested-summary">Pemberitahuan Pengangkutan RKSP</summary>
                                <div class="nested-content">
                                    <ol>
                                        <li>Penyerahan dan Penatausahaan Pemberitahuan RKSP untuk Sarana Pengangkut melalui Laut dan Udara melalui Tulisan di Atas Formulir</li>
                                        <li>Penyerahan dan Penatausahaan Pemberitahuan RKSP untuk Sarana Pengangkut melalui Laut dan Udara melalui Media Penyimpan Data Elektronik</li>
                                        <li>Penyerahan dan Penatausahaan Pemberitahuan RKSP untuk Sarana Pengangkut melalui Laut dan Udara Melalui Sistem PDE</li>
                                        <li>Perbaikan RKSP (dengan Persetujuan Kepala Kantor)</li>
                                        <li>Perbaikan RKSP (tanpa Persetujuan Kepala Kantor)</li>
                                        <li>Pembatalan RKSP</li>
                                    </ol>
                                    <p class="download-link">Rincian komponen standar pelayanan diatas dapat dilihat <a href="#">disini (download)</a></p>
                                </div>
                            </details>
                            <details class="nested-accordion"><summary class="nested-summary">Pemberitahuan Pengangkutan Manifest</summary><div class="nested-content"><p>Konten detail akan ditambahkan.</p></div></details>
                            <details class="nested-accordion"><summary class="nested-summary">Operasional Kawasan Pabean dan TPS</summary><div class="nested-content"><p>Konten detail akan ditambahkan.</p></div></details>
                        </div>
                    </details>

                    <!-- Accordion Lainnya -->
                    <details class="service-accordion-item group"><summary class="service-accordion-summary"><div class="flex items-center gap-4"><div class="service-icon bg-green-100 text-green-600"><i data-lucide="arrow-up-right"></i></div><h2 class="service-title">Layanan Ekspor</h2></div><i data-lucide="chevron-down" class="accordion-icon"></i></summary><div class="service-accordion-content"><p class="text-gray-600">Informasi detail untuk layanan ekspor akan segera tersedia.</p></div></details>
                    <details class="service-accordion-item group"><summary class="service-accordion-summary"><div class="flex items-center gap-4"><div class="service-icon bg-purple-100 text-purple-600"><i data-lucide="building-2"></i></div><h2 class="service-title">Layanan Fasilitas Kepabeanan</h2></div><i data-lucide="chevron-down" class="accordion-icon"></i></summary><div class="service-accordion-content"><p class="text-gray-600">Informasi detail untuk layanan fasilitas kepabeanan akan segera tersedia.</p></div></details>
                    <details class="service-accordion-item group"><summary class="service-accordion-summary"><div class="flex items-center gap-4"><div class="service-icon bg-amber-100 text-amber-600"><i data-lucide="stamp"></i></div><h2 class="service-title">Layanan Cukai</h2></div><i data-lucide="chevron-down" class="accordion-icon"></i></summary><div class="service-accordion-content"><p class="text-gray-600">Informasi detail untuk layanan cukai akan segera tersedia.</p></div></details>
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