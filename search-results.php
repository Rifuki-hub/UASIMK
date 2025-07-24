<?php
include 'header.php';

// Simulate search results
$all_data = [
    ["title" => "Berita 1", "content" => "Ini adalah konten dari berita 1."],
    ["title" => "Berita 2", "content" => "Ini adalah konten dari berita 2."],
    ["title" => "Layanan Publik", "content" => "Informasi mengenai layanan publik."],
    ["title" => "FAQ", "content" => "Pertanyaan yang sering diajukan."],
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

<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Hasil Pencarian untuk "<?php echo htmlspecialchars($keyword); ?>"</h1>

    <?php if (!empty($results)): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php foreach ($results as $result): ?>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold"><?php echo $result['title']; ?></h2>
                    <p class="mt-2"><?php echo $result['content']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="text-center py-12">
            <p class="text-xl text-gray-600">Data tidak tersedia.</p>
        </div>
    <?php endif; ?>
</div>

<?php
include 'footer.php';
?>
