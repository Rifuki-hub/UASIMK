<html>

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

<body>
    <?php include 'header.php'; ?>

    <main class="mt-2">
        <div id="content" class="content bg-gray-50">
            <div class="container mx-auto px-4 py-4 bg-[#0A2351] text-white rounded-lg shadow-md mt-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-[22px] font-semibold">Pengaduan Masyarakat</h1>
                    <ul class="breadcrumb flex space-x-3 text-sm text-white/80">
                        <li>
                            <a href="<!-- LINK: Homepage -->" class="hover:underline flex items-center gap-1">
                                <i class="fa fa-home"></i> Home
                            </a>
                        </li>
                        <li>
                            <a href="<!-- LINK: Berita Page -->" class="hover:underline">Pengaduan</a>
                        </li>
                        <li class="text-white">Rekam</li>
                    </ul>
                </div>
            </div>

            <div class="container mx-auto px-4 py-8">
                <div class="flex flex-col md:flex-row md:gap-6">
                    <aside class="w-full md:w-1/4">
                        <ul class="rounded-lg overflow-hidden shadow-sm">
                            <li class="bg-[#0A2351] text-white font-semibold">
                                <a href="#" class="block py-3 px-4">Pengaduan Masyarakat</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50 border-b border-gray-200">
                                <a href="PM-halaman-utama.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Halaman Utama</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50 border-b border-gray-200">
                                <a href="PM-rekam-pengaduan.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Rekam Pengaduan</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50 border-b border-gray-200">
                                <a href="PM-lupa-tiket.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Kehilangan Nomor Tiket</a>
                            </li>
                            <li class="bg-white hover:bg-blue-50">
                                <a href="PM-tracking.php" class="block py-3 px-4 text-[#0A2351] hover:underline">Tracking Pengaduan</a>
                            </li>
                        </ul>
                    </aside>

                    <section class="w-full md:w-3/4">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h2 class="text-2xl font-bold text-[#0A2351] mb-4">
                                <a href="#" class="hover:underline">Perekaman Data Pengaduan</a>
                            </h2>

                            <form id="pengaduan-form" class="prose prose-blue max-w-none text-gray-800 space-y-6">
                                <!-- Section: Data Anda -->
                                <h3 class="text-xl font-semibold text-[#0A2351]">Data Anda (Sebagai Pengadu)</h3>
                                <p>Isikan nama dan alamat Anda sebagai identitas. Tidak harus menggunakan nama/alamat asli!</p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium">Nama *</label>
                                        <input type="text" id="txtNamaPengadu" name="txtNamaPengadu" minlength="3" maxlength="30" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Alamat *</label>
                                        <input type="text" id="txtAlamatPengadu" name="txtAlamatPengadu" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Email *</label>
                                        <input type="email" id="txtEmailPengadu" name="txtEmailPengadu" maxlength="35" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Telephone *</label>
                                        <input type="text" id="txtTeleponPengadu" name="txtTeleponPengadu" maxlength="18" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                </div>

                                <div class="bg-green-50 border border-green-200 text-green-800 p-3 rounded">
                                    KAMI AKAN MERAHASIAKAN DATA EMAIL DAN TELEPON ANDA!
                                </div>

                                <!-- Section: Isi Pengaduan -->
                                <h3 class="text-xl font-semibold text-[#0A2351]">Isi Pengaduan</h3>
                                <p>Isikan data pengaduan dengan lengkap dan detail:</p>
                                <ul class="list-disc ml-6 space-y-1">
                                    <li>What (hal apa yang diadukan)</li>
                                    <li>Where (dimana lokasi kejadian)</li>
                                    <li>When (perkiraan waktu kejadian)</li>
                                    <li>Who (siapa yang melakukan)</li>
                                    <li>How (uraian pengaduan)</li>
                                </ul>
                                <p class="font-semibold">Kolom isian di bawah ini wajib diisi!</p>

                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium">Ditujukan Kepada *</label>
                                        <input type="text" id="txtKepadaPengaduan" name="txtKepadaPengaduan" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Judul Pengaduan (What) *</label>
                                        <input type="text" id="txtJudulPengaduan" name="txtJudulPengaduan" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Lokasi Kejadian (Where) *</label>
                                        <!-- Replace with custom select component as needed -->
                                        <select id="txtListLokasi" name="txtListLokasi" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option value="">Pilih Provinsi…</option>
                                            <!-- other options -->
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Kota *</label>
                                        <select id="txtListKota" name="txtListKota" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option value="">Pilih Kota…</option>
                                            <!-- dynamic options -->
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Waktu Kejadian (When) *</label>
                                        <input type="text" id="txtWaktuKejadianUraian" name="txtWaktuKejadianUraian" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Tanggal</label>
                                        <input type="date" id="txtTgl" name="txtTgl"
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                        <p class="text-xs text-gray-500 italic mt-1">Isi salah satu: uraian waktu atau tanggal.</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Terlapor (Who) *</label>
                                        <input type="text" id="terlapor" name="terlapor" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Uraian Kejadian (How) *</label>
                                        <textarea id="uraian" name="uraian" rows="6" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                    </div>
                                </div>

                                <!-- Section: Konfirmasi Pengiriman -->
                                <h3 class="text-xl font-semibold text-[#0A2351]">Konfirmasi Pengiriman</h3>
                                <p>Setelah melengkapi data, Anda dapat mengirimkan pengaduan. Anda juga bisa menambahkan:</p>
                                <ul class="list-disc ml-6 space-y-1">
                                    <li>Lampiran file (foto/bukti soft copy),</li>
                                    <li>Informasi tambahan lainnya,</li>
                                    <li>Data petugas Bea Cukai terlapor.</li>
                                </ul>

                                <div class="flex flex-col md:flex-row items-center gap-4 mt-4">
                                    <img id="image" src="https://www.beacukai.go.id/images/captcha/captcha.png" alt="Captcha"
                                        class="border rounded cursor-pointer w-24 h-12" onclick="reloadCaptcha()" />
                                    <input type="text" id="txtCaptcha" name="txtCaptcha" maxlength="6" placeholder="Isikan key code"
                                        class="mt-1 flex-1 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>

                                <button type="submit"
                                    class="mt-6 bg-[#0A2351] text-white px-6 py-2 rounded hover:bg-[#082a49] transition">
                                    Kirim Data Pengaduan
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>

</html>