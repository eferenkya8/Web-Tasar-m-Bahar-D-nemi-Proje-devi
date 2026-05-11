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
        .api-section { background-color: #f8f9fa; border-radius: 15px; padding: 30px; margin-top: 50px; }
        .album-img { border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Web Proje</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
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
        <p class="text-muted">Benim için vazgeçilmez iki tutku.</p>
    </div>
</header>

<main class="container mb-5">
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card interest-card h-100 shadow-sm">
                <div class="bg-gs py-4 text-center">
                    <h2 class="mb-0">FUTBOL</h2>
                </div>
                <div class="card-body text-center">
                     <img src="img/galatasaray_logo.png" class="img-fluid rounded mb-3" alt="Galatasaray" style="max-height: 300px; width: auto;">
                    <h3>Sarı Kırmızı Sevda</h3>
                    <p>Çocukluğumdan beri süregelen bir tutku olan Galatasaray, benim için sadece bir futbol takımı değil...</p>
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
                    <p>Rock müziği modern bir dille dünyaya tekrar sevdiren İtalyan grup Måneskin...</p>
                </div>
            </div>
        </div>
    </div>

    <section class="api-section shadow-sm">
        <div class="section-title">
            <h2 class="fw-bold">Müzik Dünyasından Canlı Veriler (API)</h2>
            <p class="text-muted">Last.fm API'nin gösterdiği popüler müzik ve albümler</p>
        </div>

        <div id="api-content" class="row g-4">
            <div class="text-center py-5">
                <div class="spinner-border text-danger" role="status">
                    <span class="visually-hidden">Yükleniyor...</span>
                </div>
                <p class="mt-2">Müzik verileri senkronize ediliyor...</p>
            </div>
        </div>
    </section>
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2026 Efe Eren Kaya - Web Teknolojileri Projesi</p>
</footer>

<script>
async function getMusicData() {
    try {
        const apiKey = 'YOUR_API_KEY_HERE';
        const response = await fetch('https://api.tvmaze.com/search/shows?q=music');
        const data = await response.json();
        
        const container = document.getElementById('api-content');
        container.innerHTML = '';

        data.slice(0, 4).forEach(item => {
            const show = item.show;
            const imgHtml = show.image ? `<img src="${show.image.medium}" class="img-fluid album-img mb-3" alt="Müzik">` : '';
            
            container.innerHTML += `
                <div class="col-md-3">
                    <div class="text-center p-3 border rounded bg-white h-100">
                        ${imgHtml}
                        <h6 class="fw-bold">${show.name}</h6>
                        <small class="text-danger">${show.language} | ${show.type}</small>
                        <p class="small mt-2">${show.genres.join(', ') || 'Müzik Türü'}</p>
                    </div>
                </div>
            `;
        });
    } catch (error) {
        document.getElementById('api-content').innerHTML = '<div class="alert alert-warning">API bağlantısında bir hata oluştu.</div>';
    }
}

window.onload = getMusicData;
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>