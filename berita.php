<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Informasi Publik</title>
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
                        <li><a href="media-center.php" class="hover:text-gray-700">Informasi Publik</a></li>
                        <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                        <li class="font-medium text-gray-700" aria-current="page">Berita</li>
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
                            <li class="border-b"><a href="berita.php" class="block py-3 px-4 bg-blue-50 text-blue-700 font-semibold">Berita</a></li>
                            <li class="border-b"><a href="#" class="block py-3 px-4 hover:bg-gray-50">Kegiatan</a></li>
                            <li class="border-b"><a href="#" class="block py-3 px-4 hover:bg-gray-50">Pengumuman</a></li>
                            <li><a href="#" class="block py-3 px-4 hover:bg-gray-50">Download</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Konten Utama: Daftar Berita -->
                <div class="w-full md:w-3/4">
                    <div id="news-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                        <!-- Kartu berita akan di-generate oleh JavaScript -->
                    </div>
                    <nav id="pagination-container" class="flex items-center justify-center mt-12" aria-label="Pagination">
                        <!-- Pagination akan di-generate oleh JavaScript -->
                    </nav>
                </div>

            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
    
    <!-- PERBAIKAN: Script di bawah ini sekarang sudah lengkap -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            const allNews = [
                { id: 1, tgl: '23 Jul 2025', kat: 'Nasional', color: 'blue', img: 'http://repository.beacukai.go.id/foto/2025/07/9c00417629786a6378786c43a55d20cc-whatsapp-image-2025-07-07-at-13-30-33.jpeg', judul: 'Bea Cukai Malang dan Banyuwangi Gencarkan Sosialisasi Cukai', desc: 'Melalui layanan keliling, talkshow, hingga pelatihan teknis, Bea Cukai di Malang dan Banyuwangi aktif mengedukasi masyarakat.' },
                { id: 2, tgl: '22 Jul 2025', kat: 'Sosialisasi', color: 'green', img: 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1000&auto=format&fit=crop', judul: 'Sosialisasi Aturan IMEI untuk UMKM di Bidang Elektronik', desc: 'DJBC memberikan pemahaman kepada para pelaku UMKM mengenai pentingnya pendaftaran IMEI untuk perangkat elektronik.' },
                { id: 3, tgl: '21 Jul 2025', kat: 'Ekspor', color: 'yellow', img: 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1000&auto=format&fit=crop', judul: 'Pelepasan Ekspor Perdana Produk Kopi Lokal ke Pasar Eropa', desc: 'Bea Cukai turut serta dalam memfasilitasi ekspor perdana produk kopi dari petani lokal di Jawa Tengah.' },
                { id: 4, tgl: '20 Jul 2025', kat: 'Kerja Sama', color: 'purple', img: 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1000&auto=format&fit=crop', judul: 'Sinergi Bea Cukai dan BNN Perkuat Pengawasan di Perbatasan', desc: 'Kerja sama strategis antara DJBC dan BNN kembali diperkuat untuk menutup celah masuknya barang-barang terlarang.' },
                { id: 5, tgl: '19 Jul 2025', kat: 'Penindakan', color: 'red', img: 'https://images.unsplash.com/photo-1543286386-713bdd548da4?q=80&w=1000&auto=format&fit=crop', judul: 'Pemusnahan Jutaan Batang Rokok Ilegal Hasil Operasi Gempur', desc: 'Barang hasil penindakan berupa rokok ilegal dimusnahkan sebagai bentuk transparansi dan penegakan hukum yang tegas.' },
                { id: 6, tgl: '18 Jul 2025', kat: 'Teknologi', color: 'indigo', img: 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1000&auto=format&fit=crop', judul: 'Implementasi Autogate System Percepat Layanan di Bandara', desc: 'Sistem autogate baru di terminal kedatangan internasional diharapkan dapat memangkas waktu tunggu penumpang.' },
                { id: 7, tgl: '17 Jul 2025', kat: 'Ekspor', color: 'yellow', img: 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?q=80&w=1000&auto=format&fit=crop', judul: 'Fasilitasi Ekspor Mebel Rotan ke Amerika Serikat', desc: 'Bea Cukai memberikan kemudahan prosedur bagi eksportir mebel rotan dari Cirebon.' },
                { id: 8, tgl: '16 Jul 2025', kat: 'Nasional', color: 'blue', img: 'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1000&auto=format&fit=crop', judul: 'Operasi Pasar, Bea Cukai Temukan Peredaran Miras Ilegal', desc: 'Dalam operasi gabungan, tim berhasil menyita ratusan botol minuman keras tanpa pita cukai.' },
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
                        <a href="berita-detail.php?id=${news.id}" class="card card-interactive overflow-hidden group block">
                            <img class="w-full h-48 object-cover" src="${news.img}" alt="Gambar untuk ${news.judul}">
                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm text-gray-500">${news.tgl}</span>
                                    <span class="text-xs font-semibold bg-${news.color}-100 text-${news.color}-800 px-3 py-1 rounded-full">${news.kat}</span>
                                </div>
                                <h4 class="text-gray-800 group-hover:text-blue-600 transition-colors font-semibold leading-tight">${news.judul}</h4>
                                <p class="text-gray-600 line-clamp-2 mt-2 text-sm">${news.desc}</p>
                            </div>
                        </a>`;
                    newsGrid.innerHTML += newsCard;
                });
                renderPagination();
            }
            
            function renderPagination() {
                const totalPages = Math.ceil(currentNews.length / itemsPerPage);
                paginationContainer.innerHTML = '';
                if (totalPages <= 1) return;

                let paginationHTML = '<div class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">';
                const isPrevDisabled = currentPage === 1;
                paginationHTML += `<a href="#" data-page="${currentPage - 1}" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 ${isPrevDisabled ? 'opacity-50 cursor-not-allowed' : ''}"><span class="sr-only">Previous</span><svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" /></svg></a>`;
                for (let i = 1; i <= totalPages; i++) {
                    paginationHTML += (i === currentPage)
                        ? `<a href="#" aria-current="page" data-page="${i}" class="relative z-10 inline-flex items-center bg-[#0A2351] px-4 py-2 text-sm font-semibold text-white focus:z-20">${i}</a>`
                        : `<a href="#" data-page="${i}" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20">${i}</a>`;
                }
                const isNextDisabled = currentPage === totalPages;
                paginationHTML += `<a href="#" data-page="${currentPage + 1}" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 ${isNextDisabled ? 'opacity-50 cursor-not-allowed' : ''}"><span class="sr-only">Next</span><svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg></a>`;
                paginationHTML += '</div>';
                paginationContainer.innerHTML = paginationHTML;
            }
            
            paginationContainer.addEventListener('click', function(e) {
                e.preventDefault();
                const targetLink = e.target.closest('a');
                if (!targetLink || targetLink.classList.contains('cursor-not-allowed')) return;
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