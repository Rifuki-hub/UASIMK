<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Direktorat Jenderal Bea dan Cukai</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- File CSS Kustom Anda (tetap dimuat untuk style lain) -->
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
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="dashboard.php" class="hover:text-gray-700 flex items-center gap-1">
                                <i data-lucide="home" class="w-4 h-4"></i> Beranda
                            </a>
                        </li>
                        <li> <i data-lucide="chevron-right" class="w-4 h-4"></i> </li>
                        <li class="font-semibold text-gray-800" aria-current="page"> Berita </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-12 text-center">
                <h1 class="text-4xl font-bold text-[#0A2351] tracking-tight">Berita Terkini</h1>
                <p class="mt-4 text-lg text-gray-600">Informasi dan kegiatan terbaru dari Direktorat Jenderal Bea dan Cukai.</p>
            </div>

            <div id="news-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Kartu berita akan di-generate oleh JavaScript -->
            </div>

            <nav id="pagination-container" class="flex items-center justify-center mt-16" aria-label="Pagination">
                <!-- Tombol pagination akan di-generate oleh JavaScript -->
            </nav>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- Script untuk Header (Menu, Search) -->
    <script src="script.js"></script>
    
    <!-- Script untuk Logika Berita & Pagination -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            const allNews = [
                { tgl: '23 Jul 2025', kat: 'Nasional', color: 'blue', img: 'https://images.unsplash.com/photo-1579548122080-c35fd6820ecb?q=80&w=1000&auto=format&fit=crop', judul: 'Bea Cukai Gagalkan Penyelundupan Narkotika Senilai Miliaran Rupiah', desc: 'Tim penindakan Bea Cukai berhasil mengamankan upaya penyelundupan narkotika jenis sabu di Pelabuhan Tanjung Priok.' },
                { tgl: '22 Jul 2025', kat: 'Sosialisasi', color: 'green', img: 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1000&auto=format&fit=crop', judul: 'Sosialisasi Aturan IMEI untuk UMKM di Bidang Elektronik', desc: 'DJBC memberikan pemahaman kepada para pelaku UMKM mengenai pentingnya pendaftaran IMEI untuk perangkat elektronik.' },
                { tgl: '21 Jul 2025', kat: 'Ekspor', color: 'yellow', img: 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1000&auto=format&fit=crop', judul: 'Pelepasan Ekspor Perdana Produk Kopi Lokal ke Pasar Eropa', desc: 'Bea Cukai turut serta dalam memfasilitasi ekspor perdana produk kopi dari petani lokal di Jawa Tengah.' },
                { tgl: '20 Jul 2025', kat: 'Kerja Sama', color: 'purple', img: 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1000&auto=format&fit=crop', judul: 'Sinergi Bea Cukai dan BNN Perkuat Pengawasan di Perbatasan', desc: 'Kerja sama strategis antara DJBC dan BNN kembali diperkuat untuk menutup celah masuknya barang-barang terlarang.' },
                { tgl: '19 Jul 2025', kat: 'Penindakan', color: 'red', img: 'https://images.unsplash.com/photo-1543286386-713bdd548da4?q=80&w=1000&auto=format&fit=crop', judul: 'Pemusnahan Jutaan Batang Rokok Ilegal Hasil Operasi Gempur', desc: 'Barang hasil penindakan berupa rokok ilegal dimusnahkan sebagai bentuk transparansi dan penegakan hukum yang tegas.' },
                { tgl: '18 Jul 2025', kat: 'Teknologi', color: 'indigo', img: 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1000&auto=format&fit=crop', judul: 'Implementasi Autogate System Percepat Layanan di Bandara', desc: 'Sistem autogate baru di terminal kedatangan internasional diharapkan dapat memangkas waktu tunggu penumpang.' },
                { tgl: '17 Jul 2025', kat: 'Ekspor', color: 'yellow', img: 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?q=80&w=1000&auto=format&fit=crop', judul: 'Fasilitasi Ekspor Mebel Rotan ke Amerika Serikat', desc: 'Bea Cukai memberikan kemudahan prosedur bagi eksportir mebel rotan dari Cirebon.' },
                { tgl: '16 Jul 2025', kat: 'Nasional', color: 'blue', img: 'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1000&auto=format&fit=crop', judul: 'Operasi Pasar, Bea Cukai Temukan Peredaran Miras Ilegal', desc: 'Dalam operasi gabungan, tim berhasil menyita ratusan botol minuman keras tanpa pita cukai.' },
            ];
            
            let currentNews = [...allNews];
            let currentPage = 1;
            const itemsPerPage = 6;
            
            const newsGrid = document.getElementById('news-grid');
            const paginationContainer = document.getElementById('pagination-container');

            function renderNews(page) {
                newsGrid.innerHTML = ''; 
                const startIndex = (page - 1) * itemsPerPage;
                const newsForPage = currentNews.slice(startIndex, startIndex + itemsPerPage);

                newsForPage.forEach(news => {
                    const newsCard = `
                        <div class="card card-interactive overflow-hidden group">
                            <img class="w-full h-52 object-cover" src="${news.img}" alt="Gambar untuk ${news.judul}">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-sm text-gray-500">${news.tgl}</span>
                                    <span class="text-xs font-semibold bg-${news.color}-100 text-${news.color}-800 px-3 py-1 rounded-full">${news.kat}</span>
                                </div>
                                <h4 class="text-gray-800 group-hover:text-blue-600 transition-colors">${news.judul}</h4>
                                <p class="text-gray-600 line-clamp-3 mt-2">${news.desc}</p>
                                <a href="#" class="inline-block mt-4 font-semibold text-blue-700 hover:text-blue-900">Baca Selengkapnya &rarr;</a>
                            </div>
                        </div>`;
                    newsGrid.innerHTML += newsCard;
                });
                renderPagination();
            }
            
            function renderPagination() {
                const totalPages = Math.ceil(currentNews.length / itemsPerPage);
                paginationContainer.innerHTML = '';
                if (totalPages <= 1) return;

                // PERBAIKAN TOTAL: Menggunakan pola standar Tailwind UI untuk pagination
                let paginationHTML = '<div class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">';

                // Tombol Previous
                const isPrevDisabled = currentPage === 1;
                paginationHTML += `
                    <a href="#" data-page="${currentPage - 1}" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 ${isPrevDisabled ? 'opacity-50 cursor-not-allowed' : ''}">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>
                    </a>`;

                // Tombol Angka
                for (let i = 1; i <= totalPages; i++) {
                    if (i === currentPage) {
                        paginationHTML += `<a href="#" aria-current="page" data-page="${i}" class="relative z-10 inline-flex items-center bg-[#0A2351] px-4 py-2 text-sm font-semibold text-white focus:z-20">${i}</a>`;
                    } else {
                        paginationHTML += `<a href="#" data-page="${i}" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20">${i}</a>`;
                    }
                }
                
                // Tombol Next
                const isNextDisabled = currentPage === totalPages;
                paginationHTML += `
                    <a href="#" data-page="${currentPage + 1}" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 ${isNextDisabled ? 'opacity-50 cursor-not-allowed' : ''}">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                    </a>`;
                
                paginationHTML += '</div>';
                paginationContainer.innerHTML = paginationHTML;
            }
            
            paginationContainer.addEventListener('click', function(e) {
                e.preventDefault();
                const targetLink = e.target.closest('a');

                if (!targetLink || targetLink.classList.contains('cursor-not-allowed')) {
                    return;
                }
                
                const page = parseInt(targetLink.dataset.page);
                if (page && page !== currentPage) {
                    currentPage = page;
                    renderNews(currentPage);
                    window.scrollTo({ top: 400, behavior: 'smooth' });
                }
            });

            renderNews(currentPage);
        });
    </script>
</body>
</html>
