<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya Jawab (FAQ) - Direktorat Jenderal Bea dan Cukai</title>

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
        <section class="bg-[#0A2351] py-4 shadow-md">
            <div class="container mx-auto px-4 flex items-center text-white text-sm">
                <a href="#" class="hover:underline">Beranda</a>
                <svg class="mx-2 w-4 h-4 fill-current text-white" viewBox="0 0 20 20">
                    <path d="M7.05 4.05a1 1 0 011.41 0L13 8.59a1 1 0 010 1.41l-4.54 4.54a1 1 0 01-1.41-1.41L10.59 10 7.05 6.46a1 1 0 010-1.41z"/>
                </svg>
                <span class="font-medium text-[#FACC15]">Tanya Jawab (FAQ)</span>
            </div>
        </section>

        <!-- Hero Section with Search -->
        <section class="faq-hero py-12">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-bold text-white tracking-tight">Pusat Bantuan & Informasi</h1>
                <p class="mt-4 text-lg text-white/80 max-w-2xl mx-auto">Punya pertanyaan? Cari jawaban yang Anda butuhkan di sini.</p>
                <div class="mt-8 max-w-2xl mx-auto">
                    <div class="relative">
                        <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                        <input type="text" id="faq-search-input" placeholder="Ketik pertanyaan Anda, misal 'impor barang PMI'" class="w-full h-14 pl-12 pr-4 rounded-full shadow-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Content Section -->
        <section class="py-8 sm:py-12">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-[#0A2351]">Pertanyaan Populer</h2>
                    <p class="mt-2 text-gray-600">Berikut adalah beberapa pertanyaan yang paling sering diajukan.</p>
                </div>

                <!-- Accordion FAQ -->
                <div class="max-w-3xl mx-auto space-y-4" id="faq-list">
                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Bagaimana ketentuan impor barang untuk Pekerja Migran Indonesia (PMI)?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Pekerja Migran Indonesia (PMI) mendapatkan fasilitas pembebasan bea masuk atas impor barang kiriman dengan nilai pabean paling banyak FOB USD 500 untuk setiap pengiriman, dan paling banyak 3 kali pengiriman dalam 1 tahun. Untuk detail selengkapnya, Anda dapat mengunjungi halaman detail kami.</p>
                            <a href="faq-detail.php" class="font-semibold text-blue-600 hover:underline mt-2 inline-block">Baca selengkapnya...</a>
                        </div>
                    </details>
                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Apa itu IMEI dan mengapa saya harus mendaftarkannya?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>IMEI (International Mobile Equipment Identity) adalah nomor identitas khusus yang dikeluarkan oleh asosiasi GSM (GSMA) untuk tiap slot kartu GSM yang dikeluarkan oleh produsen ponsel. Pendaftaran IMEI diperlukan untuk perangkat telekomunikasi yang dibawa dari luar negeri agar dapat menggunakan jaringan seluler di Indonesia.</p>
                        </div>
                    </details>
                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Berapa batas nilai barang pribadi penumpang yang bebas bea masuk?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Setiap penumpang perorangan diberikan pembebasan bea masuk atas impor barang pribadi dengan nilai pabean paling banyak FOB USD 500 per orang untuk setiap kedatangan.</p>
                        </div>
                    </details>
                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Bagaimana cara menghitung bea masuk dan pajak impor?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Perhitungan bea masuk dan pajak dalam rangka impor (PDRI) didasarkan pada Nilai Pabean (CIF: Cost, Insurance, Freight) dikalikan tarifnya. Secara umum, rumusnya adalah:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li><strong>Bea Masuk</strong> = Tarif Bea Masuk x Nilai Pabean</li>
                                <li><strong>PPN</strong> = 11% x (Nilai Pabean + Bea Masuk)</li>
                                <li><strong>PPh Pasal 22</strong> = Tarif PPh x (Nilai Pabean + Bea Masuk)</li>
                            </ul>
                            <p class="mt-2">Untuk mempermudah, Anda dapat menggunakan fitur Kalkulator Pabean yang tersedia di situs kami.</p>
                        </div>
                    </details>
                </div>
                 <div id="no-results" class="hidden text-center text-gray-500 mt-8">
                    <p>Maaf, tidak ada pertanyaan yang cocok dengan pencarian Anda.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js" defer></script>
    <script src="faq.js" defer></script>
</body>
</html>
