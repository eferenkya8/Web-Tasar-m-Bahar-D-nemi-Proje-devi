<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesajınız Alındı - Web Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .result-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            margin-top: 50px;
        }
        .data-label { font-weight: bold; color: #A32638; width: 30%; }
        .bg-dark-custom { background-color: #212529; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark-custom shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php fw-bold">Web Proje</a>
  </div>
</nav>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 result-container">
            <div class="text-center mb-4">
                <h2 class="text-success fw-bold">✅ Mesajınız Başarıyla İletildi!</h2>
                <p class="text-muted">Gönderdiğiniz bilgiler aşağıda listelenmiştir.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-hover border">
                    <tbody class="align-middle">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $ad = $_POST['ad'] ?? 'Belirtilmedi';
                            $soyad = $_POST['soyad'] ?? 'Belirtilmedi';
                            $email = $_POST['email'] ?? 'Belirtilmedi';
                            $mesaj = $_POST['mesaj'] ?? 'Belirtilmedi';

                            echo "<tr><td class='data-label text-end pr-3'>Ad:</td><td class='ps-3'>$ad</td></tr>";
                            echo "<tr><td class='data-label text-end pr-3'>Soyad:</td><td class='ps-3'>$soyad</td></tr>";
                            echo "<tr><td class='data-label text-end pr-3'>E-posta:</td><td class='ps-3'>$email</td></tr>";
                            echo "<tr><td class='data-label text-end pr-3 text-top'>Mesaj:</td><td class='ps-3'>$mesaj</td></tr>";
                        } else {
                            echo "<tr><td colspan='2' class='text-danger text-center py-4'>Hata: Form verilerine doğrudan erişim sağlanamaz!</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="text-center mt-5 d-flex justify-content-center gap-3">
                <button onclick="history.back()" class="btn btn-warning btn-lg px-4 shadow-sm">
                   ⬅️ Geri Dön ve Düzenle
                </button>
                
                <a href="index.php" class="btn btn-outline-primary btn-lg px-4">
                   Ana Sayfaya Git
                </a>
            </div>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-5 fixed-bottom">
    <p class="mb-0">&copy; 2026 Efe Eren Kaya - Web Teknolojileri Projesi</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>