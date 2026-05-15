<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım | Eren Efe Kaya  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

<body class="interest-page">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Web Proje</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
        <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
        <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
        <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
        <li class="nav-item"><a class="nav-link active" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
      </ul>
            <a href="login.php" class="btn btn-outline-light btn-sm">Giriş Yap</a>
    </div>
  </div>
</nav>


    <main class="container my-5">
        <section class="interest-hero mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="cv-badge">İlgi Alanlarım</span>
                    <h1 class="display-5 fw-bold mt-3 mb-3">Film, müzik ve oyun dünyasında sevdiğim şeyler</h1>
                    <p class="lead mb-0">
                        Bu sayfada sevdiğim filmler, dinlediğim sanatçılar ve oynadığım video oyunları yer alıyor.
                        Film kartlarına tıklayınca IMDb sayfasına, oyun kartlarına tıklayınca ilgili web sitesine gidilir.
                        Müzik bölümü ise iTunes Search API üzerinden getirilen oynatılabilir kısa ön izlemelerle hazırlanmıştır.
                    </p>
                </div>

                <div class="col-lg-4">
                    <div class="content-card h-100">
                        <h2 class="section-title">Sayfa İçeriği</h2>
                        <ul class="highlight-list mb-0">
                            <li>Diziler: Game of Thrones, Squid Game ve Alice in Borderland</li>
                            <li>Müzik: Måneskin, Duman ve Ati242</li>
                            <li>Oyunlar: League of Legends, Cyberpunk 2077 ve Warframe</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <h2 class="section-title mb-0">Dizi Tercihlerim</h2>
                <span class="text-muted small">Kartlara tıklayınca IMDb sayfası açılır.</span>
            </div>

            <div id="movie-listesi" class="row g-4"></div>
        </section>

        <section class="mb-5">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <h2 class="section-title mb-0">Müzik Dünyam</h2>
                <span class="text-muted small">iTunes Search API ile getiriliyor.</span>
            </div>

            <div id="music-listesi" class="row g-4">
                <div class="col-12 text-center py-4">
                    <div class="spinner-border text-primary" role="status"></div>
                    <p class="mt-3 mb-0 text-muted">Müzik verileri yükleniyor...</p>
                </div>
            </div>
        </section>

        <section>
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <h2 class="section-title mb-0">Video Oyunları</h2>
                <span class="text-muted small">Kartlara tıklayınca oyunun web sitesi açılır.</span>
            </div>

            <div id="game-listesi" class="row g-4"></div>
        </section>
    </main>

    <footer class="text-center py-4 mt-5">
        <p class="mb-0">&copy; 2026 Eren Efe Kaya - Web Teknolojileri Projesi</p>
    </footer>

    <script>
        const movies = [
            {
                title: "Alice in Borderland",
                category: "Tuhaflık / Gerilim",
                text: "Tokyo'nun alternatif bir versiyonunda geçen, sıradışı oyunlarla dolu bir dünyada hayatta kalmaya çalışan gençlerin hikayesi.",
                img: "img/alice.jpg",
                url: "https://www.imdb.com/title/tt10795658/"
            },
            {
                title: "Squid Game",
                category: "Aksiyon / Gerilim",
                text: "Finansal sıkıntılar içindeki insanların, büyük ödüller kazanmak için ölümcül çocuk oyunlarına katılmalarını konu alan bir dizi.",
                img: "img/squidgame.jpg",
                url: "https://www.imdb.com/title/tt10919420/"
            },
            {
                title: "Game Of Thrones",
                category: "Fantastik",
                text: "Karanlık ve büyücülük temalarını bir araya getiren, etkileyici bir hikayeyle dikkat çeken bir dizi.",
                img: "img/gameofthrones.jpg",
                url: "https://www.imdb.com/title/tt0944947/"
            }
        ];

        const games = [
            {
                title: "League of Legends",
                category: "MOBA",
                text: "Takım oyunu, strateji ve rekabet yapısıyla uzun süredir ilgimi çeken oyunlardan biridir.",
                img: "img/lol.jpg",
                url: "https://www.leagueoflegends.com/tr-tr/"
            },
            {
                title: "Cyberpunk 2077",
                category: "Aksiyon Hikaye RPG",
                text: "2077 yılında geçen, detaylı dünyası ve karmaşık hikayesiyle dikkat çeken bir oyun.",
                img: "img/cyberpunk.jpg",
                url: "https://www.cyberpunk.net/"
            },
            {
                title: "Warframe",
                category: "Aksiyon RPG",
                text: "Görevleri Yaparak Teçhizatını Güçlendirdiğin Dünyalar Arası Bir Oyun.",
                img: "img/warframe.jpg",
                url: "https://www.warframe.com/"
            }
        ];

        const artists = [
            {
                search: "Maneskin",
                title: "Måneskin",
                description: "Modern rock tarzı, sahne enerjisi ve güçlü vokalleriyle sevdiğim gruplardan biridir.",
                img: "img/maneskin.jpg",
                url: "https://www.youtube.com/results?search_query=maneskin"
            },
            {
                search: "Duman",
                title: "Duman",
                description: "Türk rock müziğinin sevilen gruplarından biri olarak şarkı sözleri ve sound'u ile öne çıkar.",
                img: "img/duman.jpg",
                url: "https://www.youtube.com/results?search_query=duman"
            },
            {
                search: "Ati242",
                title: "Ati242",
                description: "Rap ve hip-hop tarzında dinlediğim isimlerden biridir; enerjik parçalarıyla dikkat çeker.",
                img: "img/ati242.jpg",
                url: "https://www.youtube.com/results?search_query=ati242"
            }
        ];

        function escapeHTML(value) {
            return String(value || "").replace(/[&<>"']/g, function (char) {
                return {
                    "&": "&amp;",
                    "<": "&lt;",
                    ">": "&gt;",
                    '"': "&quot;",
                    "'": "&#039;"
                }[char];
            });
        }

        function renderStaticCards(targetId, items) {
            const container = document.getElementById(targetId);
            container.innerHTML = "";

            items.forEach(function (item) {
                container.innerHTML += `
                    <div class="col-md-4">
                        <a class="interest-link-card" href="${item.url}" target="_blank" rel="noopener noreferrer">
                            <div class="card interest-card h-100 shadow-sm">
                                <img src="${item.img}" class="card-img-top interest-image" alt="${escapeHTML(item.title)}">
                                <div class="card-body">
                                    <span class="interest-category">${escapeHTML(item.category)}</span>
                                    <h3 class="h5 fw-bold mt-2">${escapeHTML(item.title)}</h3>
                                    <p class="mb-0">${escapeHTML(item.text)}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                `;
            });
        }

        async function getMusicData() {
            const container = document.getElementById("music-listesi");
            container.innerHTML = "";

            try {
                for (const artist of artists) {
                    const apiUrl = "https://itunes.apple.com/search?term=" + encodeURIComponent(artist.search) + "&media=music&entity=song&limit=1";
                    const response = await fetch(apiUrl);
                    const data = await response.json();
                    const song = data.results && data.results.length > 0 ? data.results[0] : null;

                    const songTitle = song ? song.trackName : "Ön izleme bulunamadı";
                    const albumName = song ? song.collectionName : "Sanatçı bilgisi";
                    const previewUrl = song ? song.previewUrl : "";
                    const artwork = song && song.artworkUrl100 ? song.artworkUrl100.replace("100x100", "600x600") : artist.img;

                    container.innerHTML += `
                        <div class="col-md-4">
                            <div class="card interest-card h-100 shadow-sm">
                                <img src="${artwork}" class="card-img-top interest-image" alt="${escapeHTML(artist.title)}">
                                <div class="card-body d-flex flex-column">
                                    <span class="interest-category">Müzik</span>
                                    <h3 class="h5 fw-bold mt-2">${escapeHTML(artist.title)}</h3>
                                    <p>${escapeHTML(artist.description)}</p>

                                    <div class="api-info mt-auto">
                                        <strong>${escapeHTML(songTitle)}</strong>
                                        <small>${escapeHTML(albumName)}</small>
                                    </div>

                                    ${
                                        previewUrl
                                        ? `<audio controls class="music-player mt-3">
                                                <source src="${previewUrl}" type="audio/mpeg">
                                                Tarayıcınız ses oynatmayı desteklemiyor.
                                           </audio>`
                                        : `<a class="btn btn-cv mt-3" href="${artist.url}" target="_blank" rel="noopener noreferrer">Dinlemek İçin Aç</a>`
                                    }

                                    <a class="btn btn-outline-dark mt-3" href="${artist.url}" target="_blank" rel="noopener noreferrer">Sanatçıyı Aç</a>
                                </div>
                            </div>
                        </div>
                    `;
                }
            } catch (error) {
                container.innerHTML = `
                    <div class="col-12">
                        <div class="alert alert-warning mb-0">
                            API bağlantısında sorun oluştu. İnternet bağlantısını kontrol edip sayfayı yenileyebilirsin.
                        </div>
                    </div>
                `;
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            renderStaticCards("movie-listesi", movies);
            renderStaticCards("game-listesi", games);
            getMusicData();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
