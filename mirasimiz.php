<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirasımız - Galatasaray</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .bg-gs-red { background-color: #A32638; }
        .bg-gs-yellow { background-color: #FFB000; }
        .text-gs-red { color: #A32638; }
        .border-gs { border-left: 5px solid #A32638; }
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
        <li class="nav-item"><a class="nav-link active" href="mirasimiz.php">Mirasımız</a></li>
        <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="bg-gs-red text-white text-center py-5 shadow">
    <div class="container">
        <h1 class="display-4 fw-bold" style="color: #FFB000;">İstanbul'un Gururu: Galatasaray</h1>
        <p class="lead">1905'ten beri süregelen bir futbol mirası.</p>
    </div>
</header>

<main class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="img/galatasaray.jpeg" class="img-fluid rounded shadow mb-4" alt="Galatasaray SK">
            <h3 class="text-gs-red">Kuruluş ve Tarihçe</h3>
            <p class="border-gs ps-3">Galatasaray Spor Kulübü, 1905 yılında Ali Sami Yen ve arkadaşları tarafından, o zamanki adıyla Mekteb-i Sultani'de (Galatasaray Lisesi) kurulmuştur. "Türk olmayan takımları yenmek" hedefiyle yola çıkan kulüp, Türkiye'nin Avrupa'daki en başarılı temsilcisi olmuştur.</p>
        </div>

        <!-- Sağ Taraf: Başarı Tablosu ve Liste -->
        <div class="col-lg-6">
            <h3 class="text-gs-red">Kulüp Bilgileri ve Başarılar</h3>
            <table class="table table-hover border shadow-sm">
                <thead class="bg-gs-yellow">
                    <tr>
                        <th>Kategori</th>
                        <th>Detay</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Kuruluş Yılı</strong></td>
                        <td>1905</td>
                    </tr>
                    <tr>
                        <td><strong>Kurucu</strong></td>
                        <td>Ali Sami Yen</td>
                    </tr>
                    <tr>
                        <td><strong>Stadyum</strong></td>
                        <td>RAMS Park (Seyrantepe)</td>
                    </tr>
                    <tr>
                        <td><strong>Avrupa Kupası</strong></td>
                        <td>1 UEFA Kupası, 1 Süper Kupa</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="mt-4 text-gs-red">Unutulmaz Başarılar</h3>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    🏆 2000 UEFA Kupası Şampiyonluğu
                    <span class="badge bg-gs-red rounded-pill">Zirve</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    ⭐ 4 ve 5 Yıldızlı İlk Türk Takımı
                    <span class="badge bg-gs-yellow text-dark rounded-pill">Rekor</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    🏟️ Yenilmez Armada Ruhu
                    <span class="badge bg-gs-red rounded-pill">Tarih</span>
                </li>
            </ul>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2026 Efe Eren Kaya - Web Teknolojileri Projesi</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>