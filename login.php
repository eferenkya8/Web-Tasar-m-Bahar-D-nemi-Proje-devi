<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - Web Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> </head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 shadow p-4 bg-white rounded">
            <h3 class="text-center mb-4">Öğrenci Girişi</h3>

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $dogru_kullanici = "efe.kaya1@ogr.sakarya.edu.tr"; 
                $dogru_sifre = "b251210091";

                if (empty($username) || empty($password)) {
                    echo "<div class='alert alert-warning'>Alanlar boş bırakılamaz!</div>";
                    header("Refresh: 2; url=login.php");
                } elseif ($username == $dogru_kullanici && $password == $dogru_sifre) {
                    echo "<div class='alert alert-success'>Hoşgeldiniz b251210091</div>";
                    header("Refresh: 2; url=index.php");
                } else {
                    echo "<div class='alert alert-danger'>Kullanıcı adı veya şifre hatalı!</div>";
                    header("Refresh: 2; url=login.php");
                }
            }
            ?>

            <form action="login.php" method="POST" onsubmit="return validateLogin()">
                <div class="mb-3">
                    <label class="form-label">Kullanıcı Adı (Mail)</label>
                    <input type="text" name="username" id="user" class="form-control" placeholder="bXXXXXXXXXX@sakarya.edu.tr">
                </div>
                <div class="mb-3">
                    <label class="form-label">Şifre (Öğrenci No)</label>
                    <input type="password" name="password" id="pass" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>

<script>
function validateLogin() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var mailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (user == "" || pass == "") {
        alert("Kullanıcı adı ve şifre boş bırakılamaz!");
        return false;
    }
    if (!mailPattern.test(user)) {
        alert("Lütfen geçerli bir e-mail formatı giriniz!");
        return false;
    }
    return true;
}
</script>

</body>
</html>