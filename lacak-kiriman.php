<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lacak Barang Kiriman - Direktorat Jenderal Bea dan Cukai</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="theme.css">
    <script src="script.js" defer></script>
    <script src="lacak-kiriman.js" defer></script>
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
                            <a href="#" class="hover:text-gray-700 flex items-center gap-1">
                                <i data-lucide="home" class="w-4 h-4"></i>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </li>
                        <li class="font-semibold text-gray-800" aria-current="page">
                            Lacak Kiriman
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="py-16 sm:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <!-- Page Header -->
                    <div class="text-center mb-12">
                        <h1 class="text-4xl font-bold text-[#0A2351] tracking-tight">Lacak Status Barang Kiriman Anda</h1>
                        <p class="mt-4 text-lg text-gray-600">Masukkan nomor pelacakan (AWB/Resi) untuk melihat status terbaru dari barang kiriman Anda.</p>
                    </div>

                    <!-- Tracking Form Card -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
                        <form id="tracking-form">
                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <label for="tracking_number" class="block text-sm font-medium text-gray-700 mb-2">Nomor Pelacakan (AWB/Resi/Dokumen)</label>
                                    <input type="text" name="tracking_number" id="tracking_number" class="w-full h-12 px-4 border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 text-lg" placeholder="Contoh: 898812345678">
                                </div>
                                <div>
                                    <label for="captcha" class="block text-sm font-medium text-gray-700 mb-2">Verifikasi Keamanan</label>
                                    <div class="flex items-center gap-4">
                                        <img src="https://placehold.co/150x50/E2E8F0/4A5568?text=A7B4C" alt="Kode Captcha" class="rounded-lg">
                                        <input type="text" name="captcha" id="captcha" class="w-full h-12 px-4 border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500" placeholder="Masukkan kode di samping">
                                        <button type="button" class="p-3 text-gray-500 hover:text-[#0A2351]"><i data-lucide="refresh-cw" class="w-5 h-5"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 flex flex-col sm:flex-row items-center justify-end gap-4">
                                <button type="button" id="clear-button" class="btn btn-outline w-full sm:w-auto">
                                    Bersihkan
                                </button>
                                <button type="submit" class="btn btn-secondary w-full sm:w-auto flex items-center justify-center gap-2">
                                    <i data-lucide="search" class="w-5 h-5"></i>
                                    Lacak Kiriman
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Results Section -->
                <div id="results-section" class="max-w-4xl mx-auto mt-16">
                    <!-- Initial State -->
                    <div id="initial-state" class="text-center py-12">
                        <i data-lucide="archive" class="w-16 h-16 mx-auto text-gray-300"></i>
                        <h3 class="mt-4 text-xl font-semibold text-gray-700">Hasil pelacakan akan muncul di sini</h3>
                        <p class="mt-2 text-gray-500">Silakan masukkan nomor pelacakan Anda pada form di atas.</p>
                    </div>

                    <!-- Loading State (hidden by default) -->
                    <div id="loading-state" class="hidden text-center py-12">
                         <div role="status">
                            <svg aria-hidden="true" class="inline w-10 h-10 text-gray-200 animate-spin dark:text-gray-600 fill-yellow-400" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0492C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <p class="mt-4 text-gray-600">Mencari data kiriman...</p>
                    </div>

                    <!-- Error State: Tracking Number Not Found (hidden by default) -->
                    <div id="tracking-error-state" class="hidden text-center py-12 bg-red-50 border-l-4 border-red-400 rounded-r-lg p-6">
                        <i data-lucide="alert-triangle" class="w-16 h-16 mx-auto text-red-400"></i>
                        <h3 class="mt-4 text-xl font-semibold text-red-800">Kiriman Tidak Ditemukan</h3>
                        <p class="mt-2 text-red-700">Nomor pelacakan yang Anda masukkan tidak ditemukan. Mohon periksa kembali nomor Anda atau hubungi layanan pelanggan jika masalah berlanjut.</p>
                    </div>

                    <!-- Error State: Invalid Captcha (hidden by default) -->
                    <div id="captcha-error-state" class="hidden text-center py-12 bg-red-50 border-l-4 border-red-400 rounded-r-lg p-6">
                        <i data-lucide="shield-alert" class="w-16 h-16 mx-auto text-red-400"></i>
                        <h3 class="mt-4 text-xl font-semibold text-red-800">Verifikasi Gagal</h3>
                        <p class="mt-2 text-red-700">Kode verifikasi (captcha) yang Anda masukkan tidak valid. Silakan coba lagi.</p>
                    </div>
                    
                    <!-- Success State (hidden by default) -->
                    <div id="success-state" class="hidden">
                        <!-- Result Summary -->
                        <div class="bg-white p-6 rounded-xl shadow-md border mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Hasil Pelacakan</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Nomor Resi</p>
                                    <p class="font-semibold text-gray-900" id="result-awb">898812345678</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Status Terkini</p>
                                    <p class="font-semibold text-green-600" id="result-status">Selesai Proses Bea Cukai</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Perkiraan Tanggal</p>
                                    <p class="font-semibold text-gray-900" id="result-date">22 Juli 2025</p>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline -->
                        <ol class="relative border-l border-gray-200 dark:border-gray-700 ml-4">                  
                            <li class="mb-10 ml-6">            
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full -left-3 ring-8 ring-white">
                                    <i data-lucide="check" class="w-4 h-4 text-green-600"></i>
                                </span>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">Selesai Proses Bea Cukai</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400">22 Juli 2025, 14:30 WIB</time>
                                <p class="mb-4 text-base font-normal text-gray-500">Dokumen telah disetujui dan barang kiriman dapat melanjutkan proses pengiriman oleh jasa kirim.</p>
                            </li>
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white">
                                    <i data-lucide="file-check-2" class="w-4 h-4 text-blue-600"></i>
                                </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">Pemeriksaan Dokumen</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400">21 Juli 2025, 18:00 WIB</time>
                                <p class="text-base font-normal text-gray-500">Dokumen impor sedang dalam proses verifikasi oleh petugas Bea Cukai.</p>
                            </li>
                            <li class="ml-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white">
                                    <i data-lucide="box" class="w-4 h-4 text-blue-600"></i>
                                </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">Barang Tiba di Gudang</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400">21 Juli 2025, 09:15 WIB</time>
                                <p class="text-base font-normal text-gray-500">Barang kiriman telah tiba di gudang dan menunggu proses kepabeanan.</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html>