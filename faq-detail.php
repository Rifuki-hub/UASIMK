<!DOCTYPE html>
<html lang="id">
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
<body class="bg-gray-50">

    <?php include 'header.php'; ?>

    <main>
        <!-- Breadcrumb -->
        <section class="bg-white py-4 border-b border-gray-200">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="#" class="hover:text-gray-700 flex items-center gap-1">
                                <i data-lucide="home" class="w-4 h-4"></i> Beranda
                            </a>
                        </li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i></li>
                        <li><a href="faq.php" class="hover:text-gray-700">Tanya Jawab (FAQ)</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i></li>
                        <li class="font-semibold text-gray-800 truncate" aria-current="page">Ketentuan Impor Barang PMI</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Article Content -->
        <section class="py-12 sm:py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row gap-12">
                    <!-- Main Article -->
                    <article class="w-full lg:w-2/3 max-w-none">
                        <div class="mb-6 flex items-center gap-3">
                            <span class="text-sm font-semibold text-blue-600 bg-blue-100 px-3 py-1 rounded-full flex items-center gap-1">
                                <i data-lucide="package" class="w-4 h-4"></i> Barang Kiriman
                            </span>
                            <span class="text-gray-500 text-sm flex items-center gap-1">
                                <i data-lucide="clock" class="w-4 h-4"></i> Terakhir diperbarui: 22 Juli 2025
                            </span>
                        </div>

                        <h1 class="text-2xl font-bold text-gray-900 mb-6">Bagaimana ketentuan impor barang untuk Pekerja Migran Indonesia (PMI)?</h1>

                        <div class="space-y-10 text-base text-gray-700 leading-relaxed">
                            <div class="border-b pb-6">
                                <h2 class="font-semibold text-xl mb-2">Pembebasan Bea Masuk</h2>
                                <p>PMI mendapatkan fasilitas pembebasan bea masuk atas impor barang kiriman dengan rincian sebagai berikut:</p>
                                <ul class="list-disc ml-6 mt-2 space-y-1">
                                    <li>Nilai pabean paling banyak <strong>FOB USD 500</strong> untuk setiap pengiriman.</li>
                                    <li>Diberikan untuk paling banyak <strong>3 kali pengiriman</strong> dalam periode 1 tahun.</li>
                                    <li>Hanya berlaku untuk PMI yang terdata secara resmi di badan terkait.</li>
                                </ul>
                            </div>

                            <div class="border-b pb-6">
                                <h2 class="font-semibold text-xl mb-2">Barang Larangan dan Pembatasan (Lartas)</h2>
                                <p>Perlu diingat bahwa fasilitas ini tidak berlaku untuk barang yang termasuk dalam kategori larangan dan pembatasan (lartas), seperti narkotika, psikotropika, senjata api, dan barang-barang lain yang diatur dalam peraturan perundang-undangan.</p>
                            </div>

                            <div>
                                <h2 class="font-semibold text-xl mb-2">Prosedur Pendaftaran</h2>
                                <p>Untuk dapat memanfaatkan fasilitas ini, PMI atau perwakilannya harus mendaftarkan pengiriman melalui sistem yang telah disediakan dan melampirkan dokumen-dokumen yang diperlukan, seperti paspor dan bukti kerja yang sah.</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <a href="faq.php" class="inline-flex items-center text-blue-600 hover:underline font-medium text-sm">
                                <i data-lucide="arrow-left" class="w-4 h-4 mr-1"></i> Kembali ke daftar FAQ
                            </a>
                        </div>
                    </article>

                    <!-- Sidebar -->
                    <aside class="w-full lg:w-1/3">
                        <div class="sticky top-28 bg-white rounded-lg shadow p-6">
                            <h3 class="font-semibold text-lg text-gray-800 mb-4 flex items-center gap-2">
                                <i data-lucide="help-circle" class="w-5 h-5"></i> Pertanyaan Terkait
                            </h3>
                            <ul class="space-y-3 text-sm">
                                <li><a href="#" class="block hover:text-blue-600">Apa itu IMEI dan mengapa saya harus mendaftarkannya?</a></li>
                                <li><a href="#" class="block hover:text-blue-600">Berapa batas nilai barang pribadi penumpang yang bebas bea masuk?</a></li>
                                <li><a href="#" class="block hover:text-blue-600">Bagaimana cara menghitung bea masuk dan pajak impor?</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js" defer></script>
    <script src="faq.js" defer></script>
</body>
</html>