<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Direktorat Jenderal Bea dan Cukai</title>

    <!-- Fonts & Icons -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="theme.css">
</head>
<body class="bg-gray-50 font-inter">

    <?php include 'header.php'; ?>

    <main>
        <!-- Breadcrumb -->
        <section class="bg-[#0A2351] py-4 shadow-md">
            <div class="container mx-auto px-4 flex items-center text-white text-sm">
                <a href="#" class="inline-flex items-center gap-1 hover:underline">
                    <i data-lucide="home" class="w-4 h-4"></i> Beranda
                </a>
                <svg class="mx-2 w-4 h-4 fill-current text-white" viewBox="0 0 20 20">
                    <path d="M7.05 4.05a1 1 0 011.41 0L13 8.59a1 1 0 010 1.41l-4.54 4.54a1 1 0 01-1.41-1.41L10.59 10 7.05 6.46a1 1 0 010-1.41z"/>
                </svg>
                <span class="font-medium text-[#FACC15]">Tanya Jawab (FAQ)</span>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="bg-[#0A2351] py-10 text-white text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">Pusat Bantuan & Informasi</h1>
            <p class="text-sm sm:text-base">Punya pertanyaan? Cari jawaban yang Anda butuhkan di sini.</p>

            <!-- Search Bar -->
            <div class="mt-6 max-w-2xl mx-auto">
                <div class="relative">
                    <input
                    type="text"
                    placeholder="Ketik pertanyaan Anda, misal 'impor barang PMI'"
                    class="w-full py-3 pr-12 pl-5 rounded-full shadow-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                    />
                    <svg
                    class="absolute right-4 top-3 w-5 h-5 text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z"
                    />
                    </svg>
                </div>
                </div>
                    <p class="text-sm text-gray-300 mt-2">Masukkan pertanyaan Anda untuk mencari jawaban yang relevan.</p>  
                </div>
        </section>

        <!-- FAQ Content -->
        <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0A2351] mb-3">Pertanyaan Populer</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-10">
            Berikut adalah beberapa pertanyaan yang paling sering diajukan oleh masyarakat terkait layanan kepabeanan dan cukai.
            </p>
        </div>

                <div class="max-w-3xl mx-auto space-y-4" id="faq-list">
                    <!-- FAQ Item -->
                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Bagaimana ketentuan impor barang untuk Pekerja Migran Indonesia (PMI)?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>PMI mendapatkan pembebasan bea masuk atas barang kiriman dengan nilai maksimal FOB USD 500 per pengiriman, hingga 3 kali setahun. Info lengkap tersedia pada halaman detail kami.</p>
                            <a href="faq-detail.php" class="font-semibold text-blue-600 hover:underline mt-2 inline-block">Baca selengkapnya...</a>
                        </div>
                    </details>

                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Apa itu IMEI dan mengapa saya harus mendaftarkannya?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>IMEI adalah identitas unik perangkat telekomunikasi. Pendaftaran diperlukan agar perangkat dari luar negeri dapat digunakan di jaringan seluler Indonesia.</p>
                        </div>
                    </details>

                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Berapa batas nilai barang pribadi penumpang yang bebas bea masuk?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Pembebasan bea masuk untuk barang pribadi penumpang berlaku hingga FOB USD 500 per orang setiap kedatangan.</p>
                        </div>
                    </details>

                    <details class="faq-item group">
                        <summary class="faq-question">
                            <span>Bagaimana cara menghitung bea masuk dan pajak impor?</span>
                            <i data-lucide="chevron-down" class="faq-icon"></i>
                        </summary>
                        <div class="faq-answer">
                            <p>Perhitungan bea masuk dan PDRI berdasarkan Nilai Pabean (CIF):</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li><strong>Bea Masuk</strong> = Tarif x Nilai Pabean</li>
                                <li><strong>PPN</strong> = 11% x (Nilai Pabean + Bea Masuk)</li>
                                <li><strong>PPh Pasal 22</strong> = Tarif x (Nilai Pabean + Bea Masuk)</li>
                            </ul>
                            <p class="mt-2">Gunakan Kalkulator Pabean kami untuk simulasi perhitungan.</p>
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