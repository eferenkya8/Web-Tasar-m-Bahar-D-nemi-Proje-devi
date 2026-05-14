<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Web Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .contact-container { background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 30px; }
        .error-text { color: #A32638; font-size: 0.85rem; display: none; }
        .bg-dark-custom { background-color: #212529; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Web Proje</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
        <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
        <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
        <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
        <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
        <li class="nav-item"><a class="nav-link active" href="iletisim.php">İletişim</a></li>
      </ul>
      <a href="login.php" class="btn btn-outline-light btn-sm">Giriş Yap</a>
    </div>
  </div>
</nav>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 contact-container" id="app"> <h2 class="text-center mb-4 fw-bold">İletişim Formu</h2>
            <p class="text-center text-muted mb-5">Benimle İletişime Geçin</p>

            <form id="contactForm" action="gonder.php" method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Adınız</label>
                        <input type="text" name="ad" class="form-control" placeholder="İsim...">
                        <small id="nameError" class="error-text">İsim alanı hatalı!</small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Soyadınız</label>
                        <input type="text" name="soyad" class="form-control" placeholder="Soyisim...">
                        <small id="surnameError" class="error-text">Soyad alanı hatalı!</small>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">E-posta Adresiniz</label>
                        <input type="email" name="email" class="form-control" placeholder="E-posta Adresiniz...">
                        <small id="emailError" class="error-text">Geçersiz e-posta formatı!</small>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Mesajınız</label>
                        <textarea name="mesaj" class="form-control" rows="4" placeholder="Mesajınızı buraya yazınız..."></textarea>
                        <small id="messageError" class="error-text">Mesaj alanı boş bırakılamaz!</small>
                    </div>
                </div>

                <div class="row mt-4 g-2">
                    <div class="col-md-6">
                        <button type="button" onclick="validateWithNativeJS()" class="btn btn-primary w-100 py-2">
                            Native JS ile Kontrol Et & Gönder
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" @click="validateWithVue" class="btn btn-success w-100 py-2">
                            Vue.js ile Kontrol Et & Gönder
                        </button>
                    </div>
                </div>
                <div class="text-center mt-3 text-muted small">
                    * Her iki buton da form verilerini doğrular ve başarılıysa gonder.php'ye yönlendirir.
                </div>
            </form>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2026 Efe Eren Kaya - Web Teknolojileri Projesi</p>
</footer>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
    const { createApp } = Vue;
    createApp({
        methods: {
            validateWithVue() {
                const form = document.getElementById('contactForm');
                const ad = form.ad.value.trim();
                const email = form.email.value.trim();
                const mesaj = form.mesaj.value.trim();

                if (!ad || !email || !mesaj) {
                    alert("VUE.JS UYARISI: Lütfen zorunlu alanları doldurun!");
                } else if (!email.includes("@")) {
                    alert("VUE.JS UYARISI: E-posta formatı hatalı!");
                } else {
                    alert("VUE.JS Kontrolü Başarılı! Form gönderiliyor...");
                    form.submit();
                }
            }
        }
    }).mount('#app');

    function validateWithNativeJS() {
        const form = document.getElementById('contactForm');
        let isValid = true;

        document.querySelectorAll('.error-text').forEach(el => el.style.display = 'none');

        if (form.ad.value.trim() === "") {
            document.getElementById("nameError").style.display = "block";
            isValid = false;
        }
        
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(form.email.value)) {
            document.getElementById("emailError").style.display = "block";
            isValid = false;
        }

        if (isValid) {
            alert("NATIVE JS Kontrolü Başarılı! Form gönderiliyor...");
            form.submit();
        } else {
            alert("NATIVE JS UYARISI: Lütfen formu eksiksiz doldurun!");
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>