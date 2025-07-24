<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pencarian - Bea Cukai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com  "></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400  ;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest  "></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

        <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com  "></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com  ">
    <link rel="preconnect" href="https://fonts.gstatic.com  " crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400  ;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest  "></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="perbaikan.css">
    <script src="script.js"></script>
</head>

<body class="bg-slate-100 text-slate-800">

    <?php include 'header.php'; ?>

    <main class="max-w-4xl mx-auto py-12 px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Pencarian Informasi</h2>
            <p class="mt-2 text-lg text-slate-600">Temukan peraturan, kurs pajak, dan berita terbaru.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg mb-10">
            <form id="search-form" class="flex flex-col sm:flex-row items-center gap-4">
                <div class="relative w-full flex-grow">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i data-lucide="search" class="w-5 h-5 text-slate-400"></i>
                    </div>
                    <input type="text" id="page-search-input" name="q" placeholder="Ketik kata kunci..." class="w-full pl-10 pr-4 py-2.5 border border-slate-300 rounded-lg bg-slate-50 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                </div>
                <select id="search-category" name="category" class="w-full sm:w-auto border border-slate-300 rounded-lg px-4 py-2.5 bg-slate-50 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                    <option value="semua">Semua Kategori</option>
                    <option value="peraturan">Peraturan</option>
                    <option value="kurs">Kurs Pajak</option>
                    <option value="berita">Berita</option>
                </select>
                <button type="submit" class="w-full sm:w-auto flex-shrink-0 bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-semibold hover:bg-indigo-700 transition-colors flex items-center justify-center gap-2">
                    <i data-lucide="search" class="w-4 h-4"></i>
                    <span>Cari</span>
                </button>
            </form>
        </div>
        
        <div id="loader" class="hidden text-center py-10">
            <div class="w-8 h-8 border-4 border-slate-200 border-t-indigo-600 rounded-full animate-spin mx-auto"></div>
            <p class="mt-4 text-slate-500">Mencari hasil...</p>
        </div>

        <div id="search-results-container">
            <div id="search-results-header"></div>
            <div id="search-results" class="space-y-4"></div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        const mockData = {
            peraturan: [ { title: "Peraturan Menteri Keuangan No. 123/2025", url: "#", snippet: "Tentang penetapan tarif bea masuk atas barang impor dalam rangka skema Perjanjian Perdagangan Bebas." }, { title: "Peraturan Dirjen Bea Cukai No. 45/2025", url: "#", snippet: "Petunjuk teknis pelaksanaan dan pelaporan barang kiriman dari luar negeri untuk individu." } ],
            kurs: [ { title: "Kurs Pajak Mingguan USD 15,485.00", url: "#", snippet: "Berlaku untuk periode tanggal 19 Juli sampai dengan 25 Juli 2025." }, { title: "Kurs Pajak Mingguan EUR 16,892.50", url: "#", snippet: "Berlaku untuk periode tanggal 19 Juli sampai dengan 25 Juli 2025." } ],
            berita: [ { title: "Bea Cukai Sukses Terapkan Implementasi CEISA 4.0", url: "#", snippet: "Sistem baru ini berhasil meningkatkan efisiensi dan kecepatan proses customs clearance barang impor." }, { title: "Kerjasama Bea Cukai Indonesia dengan APEC Ditingkatkan", url: "#", snippet: "Fokus kerjasama adalah untuk mendorong fasilitasi perdagangan digital yang aman dan transparan lintas batas." } ]
        };
        const iconMap = { peraturan: `<div class="flex-shrink-0 w-12 h-12 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center"><i data-lucide="file-text"></i></div>`, kurs: `<div class="flex-shrink-0 w-12 h-12 rounded-lg bg-green-100 text-green-600 flex items-center justify-center"><i data-lucide="dollar-sign"></i></div>`, berita: `<div class="flex-shrink-0 w-12 h-12 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center"><i data-lucide="newspaper"></i></div>`, };
        const categoryNames = { peraturan: 'Peraturan', kurs: 'Kurs Pajak', berita: 'Berita' };
        
        // ==========================================================
        // === SCRIPT YANG DIRANCANG ULANG UNTUK EFEKTIVITAS      ===
        // ==========================================================

        // Ambil referensi elemen DOM sekali saja
        const loader = document.getElementById('loader');
        const resultsContainer = document.getElementById('search-results-container');
        const resultsHeader = document.getElementById('search-results-header');
        const resultsDiv = document.getElementById('search-results');
        const searchForm = document.getElementById('search-form');
        const searchInput = document.getElementById('page-search-input');
        const categorySelect = document.getElementById('search-category');

        /**
         * FUNGSI 1: Melakukan pencarian (simulasi async)
         * Mengembalikan sebuah Promise yang berisi hasil filter.
         */
        function performSearch(query, category) {
            return new Promise(resolve => {
                // Simulasi jeda waktu (misal: 750ms) seperti mengambil data dari server
                setTimeout(() => {
                    let initialList = [];
                    
                    // NEW: Jika query kosong, ambil semua item dari semua kategori.
                    if (!query || query.trim() === '') {
                        Object.keys(mockData).forEach(cat => {
                            mockData[cat].forEach(item => initialList.push({ ...item, category: cat }));
                        });
                        resolve(initialList);
                        return; // Selesai lebih awal
                    }
                    
                    // Jika query TIDAK kosong, lanjutkan logika filter seperti biasa.
                    if (category === "semua") {
                        Object.keys(mockData).forEach(cat => {
                            mockData[cat].forEach(item => initialList.push({ ...item, category: cat }));
                        });
                    } else if (mockData[category]) {
                        mockData[category].forEach(item => initialList.push({ ...item, category: category }));
                    }
                    
                    const filteredResults = initialList.filter(item => 
                        item.title.toLowerCase().includes(query.toLowerCase()) ||
                        item.snippet.toLowerCase().includes(query.toLowerCase())
                    );
                    
                    resolve(filteredResults);
                }, 750);
            });
        }

        /**
         * FUNGSI 2: Menampilkan hasil ke layar
         * Fungsi ini hanya bertugas merender HTML dari data yang sudah siap.
         */
        function displayResults(results, query) {
            resultsHeader.innerHTML = "";
            resultsDiv.innerHTML = "";

            // NEW: Logika header yang disesuaikan untuk query kosong
            if (!query || query.trim() === '') {
                resultsHeader.innerHTML = `<h3 class="text-lg font-medium text-slate-700 mb-2">Menampilkan <strong>${results.length}</strong> item yang tersedia.</h3>`;
            } else if (results.length > 0) {
                resultsHeader.innerHTML = `<h3 class="text-lg font-medium text-slate-700 mb-2">Menampilkan <strong>${results.length}</strong> hasil untuk "<strong>${query}</strong>"</h3>`;
            } else { // results.length === 0
                resultsDiv.innerHTML = `<div class="text-center bg-white rounded-lg p-12 shadow-md"><i data-lucide="search-x" class="w-16 h-16 mx-auto mb-4 text-slate-400"></i><h3 class="text-xl font-semibold text-slate-700">Tidak Ada Hasil</h3><p class="text-slate-500 mt-2">Kami tidak dapat menemukan hasil untuk "<strong>${query}</strong>".</p><p class="text-sm text-slate-400 mt-1">Coba gunakan kata kunci lain.</p></div>`;
            }

            results.forEach(item => {
                const div = document.createElement("div");
                div.className = "bg-white border border-slate-200 rounded-xl p-5 shadow-sm hover:shadow-lg hover:border-indigo-300 transition-all duration-300";
                const categoryName = categoryNames[item.category] || 'Lainnya';
                const categoryBadgeClass = { peraturan: 'bg-blue-100 text-blue-800', kurs: 'bg-green-100 text-green-800', berita: 'bg-orange-100 text-orange-800' }[item.category];
                div.innerHTML = `<div class="flex items-start gap-4">${iconMap[item.category] || ''}<div class="flex-grow"><div class="flex justify-between items-start"><h3 class="text-lg font-semibold text-indigo-700 leading-tight"><a href="${item.url}" class="hover:underline">${item.title}</a></h3><span class="text-xs font-medium px-2 py-1 rounded-full ${categoryBadgeClass}">${categoryName}</span></div><p class="text-sm text-slate-600 mt-1">${item.snippet}</p></div></div>`;
                resultsDiv.appendChild(div);
            });
            lucide.createIcons();
        }

        /**
         * FUNGSI 3: Fungsi utama yang mengontrol alur pencarian
         */
        async function handleSearch(query, category) {
            // 1. Tampilkan loader dan sembunyikan hasil sebelumnya
            loader.style.display = 'block';
            resultsContainer.style.display = 'none';

            // 2. Lakukan pencarian dan tunggu hasilnya (await)
            const results = await performSearch(query, category);
            
            // 3. Sembunyikan loader dan tampilkan kembali kontainer hasil
            loader.style.display = 'none';
            resultsContainer.style.display = 'block';

            // 4. Tampilkan hasil yang sudah didapat
            displayResults(results, query);
        }

        // Ambil parameter dari URL
        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            return { q: params.get("q") || "", category: params.get("category") || "semua" };
        }

        // Inisialisasi halaman
        window.addEventListener("DOMContentLoaded", () => {
            lucide.createIcons();
            const { q, category } = getQueryParams();
            searchInput.value = q;
            categorySelect.value = category;

            // NEW: Jika tidak ada query di URL, tampilkan semua hasil.
            if (!q || q.trim() === '') {
                handleSearch('', category); 
            } else {
                handleSearch(q, category);
            }
        });

        // Handle form submit
        searchForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const query = searchInput.value.trim();
            const category = categorySelect.value;
            
            const url = new URL(window.location);
            url.searchParams.set("q", query);
            url.searchParams.set("category", category);
            window.history.pushState({}, "", url);
            
            handleSearch(query, category);
        });

        // Handle back/forward button di browser
        window.addEventListener('popstate', () => {
            const { q, category } = getQueryParams();
            searchInput.value = q;
            categorySelect.value = category;
            
            // NEW: Logika yang sama seperti DOMContentLoaded
            if (!q || q.trim() === '') {
                handleSearch('', category);

            } else {
                handleSearch(q, category);
            }
        });
    </script>

</body>
</html>