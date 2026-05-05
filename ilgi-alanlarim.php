<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım - Futbol & Müzik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .interest-card { transition: all 0.3s ease; border-radius: 15px; overflow: hidden; }
        .interest-card:hover { transform: translateY(-10px); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
        .bg-gs { background: linear-gradient(45deg, #A32638, #FFB000); color: white; }
        .bg-maneskin { background: linear-gradient(45deg, #111, #444); color: white; }
        .section-title { border-left: 5px solid #A32638; padding-left: 15px; margin-bottom: 30px; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Web Proje</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
        <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
        <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
        <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
        <li class="nav-item"><a class="nav-link active" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="bg-white py-5 border-bottom mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Yaşam Tarzım ve İlgi Alanlarım</h1>
        <p class="text-muted">Birbiriyle eşik atamayacak iki tutku.</p>
    </div>
</header>

<main class="container mb-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card interest-card h-100 shadow-sm">
                <div class="bg-gs py-4 text-center">
                    <h2 class="mb-0">FUTBOL</h2>
                </div>
                <div class="card-body text-center">
                     <img src="img/galatasaray_logo.png" class="img-fluid rounded mb-3" alt="Galatasaray" style="max-height: 300px; width: auto;">
                    <h3>Sarı Kırmızı Sevda</h3>
                    <p>Çocukluğumdan beri süregelen bir tutku olan Galatasaray, benim için sadece bir futbol takımı değil, bir yaşam biçimidir. "Türk olmayan takımları yenmek" vizyonu ve şanlı tarihiyle gurur duyuyorum.</p>
                    <div class="d-flex justify-content-center gap-2 mt-3">
                        <span class="badge bg-danger">25 Şampiyonluk</span>
                        <span class="badge bg-warning text-dark">UEFA Kupası</span>
                        <span class="badge bg-danger">Ali Sami Yen</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card interest-card h-100 shadow-sm">
                <div class="bg-maneskin py-4 text-center">
                    <h2 class="mb-0">MÜZİK</h2>
                </div>
                <div class="card-body text-center">
                    <img src="img/maneskin.jpg" class="img-fluid rounded mb-3" alt="Maneskin" style="max-height: 300px; width: auto;">
                    <h3>Favori Grubum: Måneskin</h3>
                    <p>Rock müziği modern bir dille dünyaya tekrar sevdiren İtalyan grup Måneskin, tarzı ve enerjisiyle en çok dinlediğim müzik grubu. Özellikle şarkıları arasından en çok beğendiklerim 'Honey are you coming?' ve 'Valentine'.</p>
                    <div class="d-flex justify-content-center gap-2 mt-3">
                        <span class="badge bg-dark">Rock</span>
                        <span class="badge bg-secondary">Eurovision</span>
                        <span class="badge bg-dark">Damiano David</span>
                        <span class="badge bg-secondary">Thomas Raggi</span>
                        <span class="badge bg-dark">Victoria De Angelis</span>
                        <span class="badge bg-secondary">Ethan Torchio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2026 Efe Eren Kaya - Web Teknolojileri Projesi</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>