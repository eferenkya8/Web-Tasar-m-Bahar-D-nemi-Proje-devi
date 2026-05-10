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
        <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
        <li class="nav-item"><a class="nav-link active" href="iletisim.php">İletişim</a></li>
    </div>
  </div>
</nav>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 contact-container">
            <h2 class="text-center mb-4">Benimle İletişime Geçin</h2>
            
            <form id="contactForm" action="gonder.php" method="POST" onsubmit="return validateForm()">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Adınız</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span id="nameError" class="error-text">Lütfen adınızı giriniz.</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Soyadınız</label>
                        <input type="text" class="form-control" id="surname" name="surname">
                        <span id="surnameError" class="error-text">Lütfen soyadınızı giriniz.</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">E-posta Adresiniz</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <span id="emailError" class="error-text">Geçerli bir e-posta adresi giriniz.</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mesajınız</label>
                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                    <span id="messageError" class="error-text">Mesaj alanı boş bırakılamaz.</span>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Gönder</button>
                    <button type="reset" class="btn btn-outline-secondary">Temizle</button>
                </div>
            </form>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2026 Efe Eren Kaya - Web Teknolojileri Projesi</p>
</footer>

<script>
function validateForm() {
    let isValid = true;
    
    const name = document.getElementById("name");
    const surname = document.getElementById("surname");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    document.querySelectorAll(".error-text").forEach(el => el.style.display = "none");

    const alphaPattern = /^[a-zA-ZğüşıöçĞÜŞİÖÇ\s]+$/;

    if (name.value.trim() === "") {
        document.getElementById("nameError").innerText = "Lütfen adınızı giriniz.";
        document.getElementById("nameError").style.display = "block";
        isValid = false;
    } else if (!alphaPattern.test(name.value)) {
        document.getElementById("nameError").innerText = "İsim sadece harflerden oluşmalıdır.";
        document.getElementById("nameError").style.display = "block";
        isValid = false;
    }

    if (surname.value.trim() === "") {
        document.getElementById("surnameError").innerText = "Lütfen soyadınızı giriniz.";
        document.getElementById("surnameError").style.display = "block";
        isValid = false;
    } else if (!alphaPattern.test(surname.value)) {
        document.getElementById("surnameError").innerText = "Soyad sadece harflerden oluşmalıdır.";
        document.getElementById("surnameError").style.display = "block";
        isValid = false;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.value)) {
        document.getElementById("emailError").style.display = "block";
        isValid = false;
    }

    if (message.value.trim() === "") {
        document.getElementById("messageError").style.display = "block";
        isValid = false;
    }

    return isValid;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>