<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik - Direktorat Jenderal Bea dan Cukai</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- ApexCharts for Data Visualization -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="perbaikan.css">
</head>
<body class="bg-gray-50">

    <?php include 'header.php'; ?>

    <main>
        <!-- Breadcrumb Section -->
        <section class="bg-gray-100 py-4 border-b">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li><a href="#" class="hover:text-gray-700 flex items-center gap-1"><i data-lucide="home" class="w-4 h-4"></i> Beranda</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li class="font-semibold text-gray-800" aria-current="page">Statistik</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Page Header -->
        <section class="bg-white pt-12 pb-8">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-bold text-[#0A2351] tracking-tight">Pusat Data & Statistik</h1>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Jelajahi data interaktif mengenai penerimaan negara, perdagangan internasional, dan hasil penindakan yang dilakukan oleh Bea Cukai.</p>
            </div>
        </section>

        <!-- Main Dashboard Content -->
        <section class="py-12">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Filters -->
                <div class="mb-8 flex justify-center">
                    <div class="inline-flex bg-gray-200 rounded-lg p-1">
                        <button class="px-4 py-2 text-sm font-semibold rounded-md bg-white text-[#0A2351] shadow">Tahunan</button>
                        <button class="px-4 py-2 text-sm font-semibold text-gray-600">Bulanan</button>
                    </div>
                </div>

                <!-- KPI Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div class="kpi-card">
                        <div class="flex items-center gap-4">
                            <div class="kpi-icon bg-blue-100 text-blue-600"><i data-lucide="landmark"></i></div>
                            <div>
                                <p class="kpi-title">Total Penerimaan Negara</p>
                                <p class="kpi-value">Rp 275,3 T</p>
                            </div>
                        </div>
                    </div>
                    <div class="kpi-card">
                        <div class="flex items-center gap-4">
                            <div class="kpi-icon bg-green-100 text-green-600"><i data-lucide="arrow-up-right"></i></div>
                            <div>
                                <p class="kpi-title">Nilai Ekspor</p>
                                <p class="kpi-value">Rp 3.980 T</p>
                            </div>
                        </div>
                    </div>
                    <div class="kpi-card">
                        <div class="flex items-center gap-4">
                            <div class="kpi-icon bg-red-100 text-red-600"><i data-lucide="arrow-down-left"></i></div>
                            <div>
                                <p class="kpi-title">Nilai Impor</p>
                                <p class="kpi-value">Rp 3.450 T</p>
                            </div>
                        </div>
                    </div>
                    <div class="kpi-card">
                        <div class="flex items-center gap-4">
                            <div class="kpi-icon bg-orange-100 text-orange-600"><i data-lucide="shield-x"></i></div>
                            <div>
                                <p class="kpi-title">Jumlah Penindakan</p>
                                <p class="kpi-value">25.123 Kasus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Chart: Penerimaan Negara -->
                    <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-md border">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Grafik Penerimaan Negara (Dalam Triliun Rupiah)</h3>
                        <div id="penerimaan-chart"></div>
                    </div>

                    <!-- Donut Chart: Komoditas Ekspor -->
                    <div class="bg-white p-6 rounded-xl shadow-md border">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">5 Komoditas Ekspor Utama</h3>
                        <div id="komoditas-chart"></div>
                    </div>

                    <!-- Line Chart: Tren Perdagangan -->
                    <div class="lg:col-span-3 bg-white p-6 rounded-xl shadow-md border">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Tren Perdagangan Internasional (Dalam Triliun Rupiah)</h3>
                        <div id="perdagangan-chart"></div>
                    </div>
                </div>

                 <!-- Help & Documentation Section -->
                <div class="mt-16 text-center bg-gray-100 p-8 rounded-lg">
                    <h2 class="text-2xl font-bold text-gray-800">Butuh Data Lebih Rinci?</h2>
                    <p class="mt-2 text-gray-600">Akses laporan dan publikasi statistik lengkap kami atau hubungi petugas informasi kami untuk permintaan data spesifik.</p>
                    <div class="mt-6 flex justify-center gap-4">
                        <a href="#" class="px-6 py-3 bg-white border border-gray-300 rounded-lg text-gray-800 hover:bg-gray-200 font-semibold transition-colors flex items-center gap-2">
                            <i data-lucide="book-marked" class="w-5 h-5"></i> Lihat Publikasi
                        </a>
                        <a href="#" class="px-6 py-3 bg-[#0A2351] text-white font-bold rounded-lg hover:bg-opacity-90 transition-all flex items-center gap-2">
                            <i data-lucide="phone" class="w-5 h-5"></i> Hubungi PPID
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    
    <script src="script.js" defer></script>
    <script src="statistik.js" defer></script>
</body>
</html>