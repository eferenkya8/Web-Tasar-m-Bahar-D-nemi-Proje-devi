<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş - Web Teknolojileri Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Web Projem</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Ana Sayfa</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="login.php">Giriş Yap</a>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Özgeçmişim</h1>
            <p class="lead">Eğitim Geçmişim Ve Hakkımdakiler</p>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="img/Vesikalık.jpeg" alt="Profil Fotoğrafı" class="img-fluid rounded-circle shadow mb-3" style="width: 200px;">
                <h3>Efe Eren Kaya</h3>
                <p>Bilgisayar Mühendisliği Öğrencisi</p>
            </div>

            <div class="col-md-8">
                <section class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="card-title h4 text-primary">Eğitim Bilgileri</h2>
                        <article>
                            <h3> Yükseköğretim </h3>
                            <ul>
                                <li> <h5>Sakarya Üniversitesi - Bilgisayar Mühendisliği (2026 - Devam Ediyor)</h5> </li>
                            </ul>
                            <h3> Ortaöğretim </h3>
                            <ul>
                                <li> <h5>Prof. Dr. Sabahattin Zaim Anadolu Lisesi (9. Sınıf - 12. Sınıf)</h5> </li>
                            </ul>
                            <h3> İlköğretim </h3>
                            <ul>
                                <li> <h5>Özel Doğa İlkokulu (1. Sınıf - 8. Sınıf)</h5> </li>
                            </ul>
                        </article>
                    </div>
                </section>

                <section class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="card-title h4 text-primary">Yetenekler</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item badge bg-secondary p-2">HTML</li>
                            <li class="list-inline-item badge bg-secondary p-2">CSS</li>
                            <li class="list-inline-item badge bg-secondary p-2">C1 İngilizce</li>
                            <li class="list-inline-item badge bg-secondary p-2">PHP</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2026 - Tüm Hakları Saklıdır. [Efe Eren Kaya]</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>