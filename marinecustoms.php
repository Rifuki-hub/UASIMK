<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ... (Link ke Font, Tailwind, dan Lucide Icons) ... -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Memuat CSS utama dan CSS khusus halaman ini -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="theme.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> -->
    
    <title>Marine Customs</title>
</head>
<body>
<?php include 'header.php'; ?>

    <main class="bg-white font-sans">
        <!-- Bagian Breadcrumb -->
        <section class="bg-gray-100 py-4 border-b">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li><a href="#" class="hover:text-gray-700 flex items-center gap-1"><i data-lucide="home" class="w-4 h-4"></i> Beranda</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li class="font-semibold text-gray-800" aria-current="page">Marine Customs</li>
                    </ol>
                </nav>
            </div>
        </section>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <!-- Judul Halaman -->
            <section>
                <h1 class="mt-4 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Marine Customs</h1>
                <p class="mt-2 text-lg text-gray-600">Pengawasan lalu lintas barang melalui jalur laut dan pelabuhan.</p>
            </section>
            
            <div class="my-10 border-t border-gray-200"></div>

            <!-- Sejarah -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-800">Marine Customs: Sejarah Panjang Pengawalan Laut Nusantara</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Sebagai negara maritim, pengawasan laut menjadi kunci utama kedaulatan. Marine Customs (Patroli Laut Bea Cukai) memiliki sejarah panjang dalam mengamankan perairan Indonesia dari berbagai ancaman penyelundupan dan kegiatan ilegal yang merugikan negara.
                </p>
            </section>

            <!-- Info Boxes Section -->
            <section class="mt-12 space-y-8">
                <!-- Dasar Hukum -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 flex items-start space-x-4">
                    <i data-lucide="book-marked" class="w-7 h-7 text-indigo-700 flex-shrink-0 mt-1"></i>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Dasar Hukum Tugas: Penugasan Nasional & Operasi Militer</h3>
                        <p class="mt-2 text-gray-700">Undang-Undang Kepabeanan memberikan mandat penuh kepada Bea Cukai untuk melakukan patroli laut dalam rangka pencegahan dan penindakan pelanggaran kepabeanan.</p>
                    </div>
                </div>
                <!-- Visi Misi -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 flex items-start space-x-4">
                    <i data-lucide="shield-check" class="w-7 h-7 text-indigo-700 flex-shrink-0 mt-1"></i>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Visi, Misi, Kemampuan, dan Tugas Bersama Instansi</h3>
                        <p class="mt-2 text-gray-700">Menjadi garda terdepan dalam pengawasan laut, bersinergi dengan TNI AL, Polairud, dan Bakamla untuk menjaga kedaulatan dan keamanan maritim Indonesia.</p>
                    </div>
                </div>
                 <!-- In Memoriam -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 flex items-start space-x-4">
                    <i data-lucide="user-x" class="w-7 h-7 text-indigo-700 flex-shrink-0 mt-1"></i>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Mengenal Pahlawan Laut DJBC (In Memoriam)</h3>
                        <p class="mt-2 text-gray-700">Mengenang para pahlawan yang gugur dalam tugas, yang dedikasinya menjadi inspirasi bagi seluruh insan Bea Cukai.</p>
                    </div>
                </div>
            </section>

            <!-- Tugas dan Kewenangan -->
            <section class="mt-12">
                 <div class="bg-gray-50 border border-gray-200 rounded-lg p-8">
                    <div class="flex items-start space-x-6">
                         <div class="flex-shrink-0">
                            <i data-lucide="gavel" class="w-8 h-8 text-indigo-700"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Tugas dan Kewenangan</h3>
                            <!-- Dasar Hukum Box -->
                            <div class="mt-4 bg-yellow-50 border border-yellow-300 rounded-lg p-6">
                                <div class="flex items-center space-x-3">
                                    <i data-lucide="scale" class="w-6 h-6 text-yellow-700"></i>
                                    <h5 class="text-lg font-semibold text-yellow-800">Dasar Hukum</h5>
                                </div>
                                <p class="mt-2 text-gray-700">Pasal 90 UU No. 17 Tahun 2006 tentang Kepabeanan.</p>
                            </div>
                            <!-- Lingkup Tugas Box -->
                            <div class="mt-4 bg-red-50 border border-red-300 rounded-lg p-6">
                                <div class="flex items-center space-x-3">
                                    <i data-lucide="list-checks" class="w-6 h-6 text-red-700"></i>
                                    <h5 class="text-lg font-semibold text-red-800">Lingkup Tugas</h5>
                                </div>
                                <p class="mt-2 text-gray-700">Melakukan patroli, pengejaran, penghentian, dan pemeriksaan kapal di perairan Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
             <!-- Kekuatan Armada -->
            <section class="my-12">
                 <div class="bg-gray-50 border border-gray-200 rounded-lg p-8">
                    <div class="flex items-start space-x-6">
                         <div class="flex-shrink-0">
                            <i data-lucide="anchor" class="w-8 h-8 text-indigo-700"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Kekuatan Armada dan Pangkalan</h3>
                            <div class="mt-6 space-y-4">
                                <div class="bg-green-50 border border-green-300 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-800">Fast Patrol Boat (FPB) - Tulang Punggung Patroli Jarak Jauh</h4>
                                </div>
                                <div class="bg-green-50 border border-green-300 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-800">Very Slender Vessel (VSV) - Pengejar Berkecepatan Tinggi</h4>
                                </div>
                                <div class="bg-green-50 border border-green-300 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-800">Speedboat - Penjangkau Pesisir dan Sungai</h4>
                                </div>
                                <div class="bg-green-50 border border-green-300 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-800">5 Pangkalan Sarana Operasi (PSO) Utama</h4>
                                </div>
                                <div class="bg-green-50 border border-green-300 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-800">83 Satuan Kerja (Satker)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

<?php include 'footer.php'; ?>
<script> lucide.createIcons(); </script>
<script src="script.js"></script>
</body>
</html>