<?php
include 'header.php';

// Simulate search results
$all_data = [
    ["title" => "Berita 1", "content" => "Ini adalah konten dari berita 1.", "url" => "berita-detail.php"],
    ["title" => "Berita 2", "content" => "Ini adalah konten dari berita 2.", "url" => "berita-detail.php"],
    ["title" => "Layanan Publik", "content" => "Informasi mengenai layanan publik.", "url" => "layanan-publik.php"],
    ["title" => "FAQ", "content" => "Pertanyaan yang sering diajukan.", "url" => "faq.php"],
];

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$results = [];

if (!empty($keyword)) {
    foreach ($all_data as $data) {
        if (stripos($data['title'], $keyword) !== false || stripos($data['content'], $keyword) !== false) {
            $results[] = $data;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian - Direktorat Jenderal Bea dan Cukai</title>

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
</head>
<body class="bg-gray-50">

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white p-8 rounded-xl shadow-md border">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Hasil Pencarian</h1>
            <p class="text-lg text-gray-600 mb-8">
                Menampilkan hasil untuk: <span class="font-semibold text-[#0A2351]"><?php echo htmlspecialchars($keyword); ?></span>
            </p>

            <?php if (!empty($results)): ?>
                <div class="space-y-6">
                    <?php foreach ($results as $result): ?>
                        <a href="<?php echo $result['url']; ?>" class="block p-6 rounded-lg border hover:bg-gray-50 hover:shadow-sm transition-all">
                            <h2 class="text-xl font-bold text-[#0A2351] group-hover:text-yellow-500"><?php echo $result['title']; ?></h2>
                            <p class="mt-2 text-gray-600"><?php echo $result['content']; ?></p>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-16 border-t mt-8">
                    <i data-lucide="search-x" class="w-16 h-16 mx-auto text-gray-400"></i>
                    <h2 class="mt-4 text-2xl font-bold text-gray-700">Tidak Ada Hasil Ditemukan</h2>
                    <p class="mt-2 text-gray-500">Maaf, kami tidak dapat menemukan apa pun yang cocok dengan pencarian Anda.<br>Silakan coba kata kunci yang berbeda.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="search.js"></script>
</body>
</html>
