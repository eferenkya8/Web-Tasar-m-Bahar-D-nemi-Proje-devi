<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim - İstanbul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

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
        <li class="nav-item"><a class="nav-link active" href="sehrim.php">Şehrim</a></li>
        <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container mt-5">
    <section class="text-center mb-5">
        <h2 class="display-4">Dünya Başkenti: İstanbul</h2>
        <p class="lead">İki kıtayı birleştiren, tarihin ve modernizmin buluştuğu eşsiz şehir.</p>
    </section>

    <div id="cityCarousel" class="carousel slide shadow-lg mb-5" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="3"></button>
        </div>

<div id="cityCarousel" class="carousel slide shadow-lg mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <a href="#" data-bs-toggle="modal" data-bs-target="#kizKulesiModal">
                <img src="img/istanbul1.jpeg" class="d-block w-100 rounded" alt="Kız Kulesi" style="height: 500px; object-fit: cover; cursor: pointer;">
            </a>
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <h5>Kız Kulesi</h5>
            </div>
        </div>

        <div class="carousel-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#ayasofyaModal">
                <img src="img/istanbul2.jpeg" class="d-block w-100 rounded" alt="Ayasofya" style="height: 500px; object-fit: cover; cursor: pointer;">
            </a>
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <h5>Ayasofya-i Kebir Camii</h5>
            </div>
        </div>

        <div class="carousel-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#galataModal">
                <img src="img/istanbul3.jpeg" class="d-block w-100 rounded" alt="Galata Kulesi" style="height: 500px; object-fit: cover; cursor: pointer;">
            </a>
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <h5>Galata Kulesi</h5>
            </div>
        </div>

        <div class="carousel-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#rumeliModal">
                <img src="img/istanbul4.jpeg" class="d-block w-100 rounded" alt="Rumeli Hisarı" style="height: 500px; object-fit: cover; cursor: pointer;">
            </a>
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <h5>Rumeli Hisarı</h5>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#cityCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cityCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="modal fade" id="kizKulesiModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Kız Kulesi Hakkında Bilgi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Üsküdar açıklarında bulunan Kız Kulesi, Bizans döneminden kalma tarihi bir yapıdır. Efsanelere konu olan bu kule, günümüzde İstanbul'un en romantik simgelerinden biridir.
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ayasofyaModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ayasofya Hakkında Bilgi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        537 yılında Bizans İmparatoru Justinianus tarafından yaptırılan Ayasofya, mimarlık tarihinin en önemli eserlerinden biridir. 1453'te camiye çevrilmiş, günümüzde ise ibadete açık bir dünya mirasıdır.
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="galataModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Galata Kulesi Hakkında Bilgi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        1348 yılında Cenevizliler tarafından inşa edilen kule, İstanbul'un panoramik manzarasını izlemek için en popüler noktalardan biridir. Hezarfen Ahmed Çelebi'nin buradan uçtuğu rivayet edilir.
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rumeliModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Rumeli Hisarı Hakkında Bilgi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Fatih Sultan Mehmet tarafından 1452 yılında İstanbul'un fethi hazırlıkları kapsamında, Boğaz'ın en dar noktasında sadece 4 ayda inşa edilmiştir.
      </div>
    </div>
  </div>
</div>

        <button class="carousel-control-prev" type="button" data-bs-target="#cityCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Geri</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cityCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">İleri</span>
        </button>
    </div>

    <section class="row g-4">
        <div class="col-md-8">
            <div class="p-4 bg-white shadow-sm rounded">
                <h3>İstanbul Hakkında</h3>
                <p>İstanbul, Avrupa ve Asya kıtalarını birbirine bağlayan stratejik konumuyla binlerce yıldır medeniyetlere ev sahipliği yapmıştır. Roma, Bizans ve Osmanlı İmparatorluklarına başkentlik yapmış olan şehir, günümüzde Türkiye'nin ekonomik ve kültürel kalbidir.</p>
                <p>Boğaz hattı, tarihi yarımadası ve enerjik şehir hayatıyla her yıl milyonlarca turisti ağırlamaktadır.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-primary text-white shadow-sm rounded">
                <h4>Şehir Künyesi</h4>
                <ul class="list-unstyled">
                    <li><strong>Nüfus:</strong> ~15.9 Milyon</li>
                    <li><strong>Yüzölçümü:</strong> 5.343 km²</li>
                    <li><strong>Plaka Kodu:</strong> 34</li>
                    <li><strong>Gezilecek Yerler:</strong> Sultanahmet, Beşiktaş, Adalar</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <p class="mb-0">&copy; 2026 Efe Eren Kaya - Web Teknolojileri Projesi</p>
        <small>Tüm Hakları Saklıdır.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>