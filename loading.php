<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading | Bea Cukai</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes pulseBounce {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); }
    }
    .fade-in-up { animation: fadeInUp 0.8s ease-out both; }
    .pulse-bounce { animation: pulseBounce 1.5s ease-in-out infinite; }
  </style>
</head>
<body class="bg-gradient-to-br from-[#001f44] to-[#00356e] flex items-center justify-center min-h-screen overflow-hidden">
  <!-- Floating Background Shapes -->
  <div class="absolute top-0 left-0 w-full h-full">
    <div class="absolute bg-white opacity-5 rounded-full w-40 h-40 top-10 left-1/4 animate-ping"></div>
    <div class="absolute bg-white opacity-3 rounded-full w-56 h-56 top-1/2 left-3/4 animate-ping delay-2000"></div>
  </div>

  <div class="relative z-10 flex flex-col items-center gap-6 fade-in-up">
    <img src="bea-cukai.png" alt="Logo Bea Cukai" class="w-28 h-28 pulse-bounce drop-shadow-2xl">
    <p class="text-2xl font-semibold text-white">Memuat Halaman... Mohon Tunggu</p>
    <!-- Progress Bar -->
    <div class="w-64 h-2 bg-white/30 rounded-full overflow-hidden">
      <div id="progress-bar" class="h-full bg-yellow-400 rounded-full w-0"></div>
    </div>
    <p id="progress-text" class="text-sm text-white/70">0%</p>
  </div>

  <script>
    // Simulasi progress
    let progress = 0;
    const bar = document.getElementById('progress-bar');
    const text = document.getElementById('progress-text');
    const interval = setInterval(() => {
      progress += Math.random() * 10;
      if (progress >= 100) progress = 100;
      bar.style.width = progress + '%';
      text.textContent = Math.floor(progress) + '%';
      if (progress === 100) {
        clearInterval(interval);
        setTimeout(() => { window.location.href = 'dashboard.php'; }, 500);
      }
    }, 100);
  </script>
</body>
</html>
