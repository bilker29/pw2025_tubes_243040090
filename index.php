<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="shortcut icon" href="../pw2025_tubes_243040090/assets/logo.png" type="image/x-icon" />
  <title>Perpustakaan Universitas Pasundan</title>
  <style>
    .navbar-custom {
      background-color: rgba(255, 255, 255, .3);
      backdrop-filter: blur(10px)
    }

    .pt-3 {
      text-align: center
    }

    .follow-icon {
      transition: color .3s ease
    }

    .follow-icon:hover {
      color: #ffc107
    }

    html,
    body {
      margin: 0;
      padding: 0
    }

    .layar-penuh {
      width: 100%
    }

    header {
      position: relative;
      height: 100vh;
      width: 100%;
      overflow: hidden;
      z-index: 2
    }

    header video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1
    }

    header .intro {
      z-index: 100;
      color: fff;
      text-align: center;
      position: relative;
      top: 50%
    }

    header .intro h3 {
      font-size: 50px;
      margin: 0;
      padding: 0;
      color: #fff
    }

    p {
      color: #fff
    }

    header .overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: #000;
      opacity: 50%;
      z-index: -1
    }

    .ubah-kata::after {
      content: "FH";
      animation: changetext 8s infinite;
      display: inline-block;
      padding-left: 5px;
      color: #fff
    }

    :root {
      --primary-color: #0d6efd;
      --success-color: #198754;
      --warning-color: #ffc107;
      --background-light: #fff;
      --background-alt: #f8f9fa;
      --text-primary: #212529;
      --text-secondary: #495057;
      --text-quote: #4b3832;
      --border-color: #e9ecef;
      --shadow-color: rgba(0, 0, 0, .06);
      --shadow-hover-color: rgba(0, 0, 0, .1);
      --card-border-radius: .8rem;
      --transition-speed: .3s
    }

    .visimisi-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      margin-top: 2rem;
      margin-bottom: 3rem
    }

    .vision-card {
      background-color: var(--background-light);
      border: 1px solid var(--border-color);
      border-radius: var(--card-border-radius);
      padding: 2rem;
      box-shadow: 0 4px 25px var(--shadow-color);
      transition: transform var(--transition-speed) ease, box-shadow var(--transition-speed) ease
    }

    .vision-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 30px var(--shadow-hover-color)
    }

    .vision-card__heading {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--primary-color);
      margin-top: 0;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center
    }

    .vision-card__list {
      list-style: none;
      padding-left: 0;
      margin-bottom: 0
    }

    .vision-card__list li {
      position: relative;
      padding-left: 2rem;
      margin-bottom: 1rem;
      color: var(--text-secondary);
      line-height: 1.7
    }

    .vision-card__list li:last-child {
      margin-bottom: 0
    }

    .vision-card__list li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 5px;
      width: 20px;
      height: 20px;
      background-color: var(--success-color);
      -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'%3E%3C/polyline%3E%3C/svg%3E");
      mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'%3E%3C/polyline%3E%3C/svg%3E");
      -webkit-mask-size: contain;
      mask-size: contain
    }

    .highlight-quote {
      background: var(--background-alt);
      color: var(--text-quote);
      padding: 2rem;
      border-left: 5px solid var(--warning-color);
      border-radius: var(--card-border-radius);
      box-shadow: 0 4px 12px var(--shadow-color);
      font-family: 'Georgia', serif;
      font-size: 1.2rem;
      line-height: 1.6;
      font-style: italic;
      margin-top: 1.5rem;
      margin-bottom: 3rem
    }

    .timeline-box {
      background-color: var(--background-alt);
      color: var(--text-primary);
      padding: 2rem;
      border-radius: var(--card-border-radius);
      box-shadow: 0 4px 12px var(--shadow-color)
    }

    .timeline-box ul {
      list-style-type: none;
      padding-left: 0;
      margin-bottom: 0;
      line-height: 1.7;
      font-size: 1rem;
      position: relative;
      border-left: 3px solid var(--border-color);
      padding-left: 2rem
    }

    .timeline-box li {
      margin-bottom: 1.5rem;
      position: relative
    }

    .timeline-box li:last-child {
      margin-bottom: 0
    }

    .timeline-box li::before {
      content: '';
      position: absolute;
      left: -2.6rem;
      top: .4rem;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: var(--warning-color);
      border: 2px solid var(--background-alt)
    }

    .timeline-box .year {
      font-weight: bold;
      color: var(--primary-color)
    }

    .timeline-box a {
      font-weight: 500;
      color: var(--primary-color);
      text-decoration: none
    }

    .timeline-box a:hover {
      text-decoration: underline
    }

    @media (max-width:768px) {
      .visimisi-container {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem
      }

      .vision-card,
      .highlight-quote,
      .timeline-box {
        padding: 1.5rem
      }

      .vision-card__heading {
        font-size: 1.25rem
      }

      .highlight-quote {
        font-size: 1.1rem;
        margin-bottom: 2rem
      }
    }

    @keyframes changetext {
      0% {
        content: " FH"
      }

      16% {
        content: " FISIP"
      }

      32% {
        content: " FT"
      }

      48% {
        content: " FEB"
      }

      64% {
        content: " FKIP"
      }

      80% {
        content: " FISS"
      }

      100% {
        content: " FK"
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../">
        <img src="../pw2025_tubes_243040090/assets/logo.png" alt="logo" width="30" height="30">
        Perpustakaan Universitas Pasundan
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#index.php">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Layanan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../pw2025_tubes_243040090/tampilan/tatatertib.php">Tata Tertib</a></li>
              <li><a class="dropdown-item" href="../pw2025_tubes_243040090/tampilaN/pinjaman.php">Pinjaman</a></li>
              <li><a class="dropdown-item" href="../pw2025_tubes_243040090/tampilan/kunjungan.php">Kunjungan</a></li>
              <li><a class="dropdown-item" href="../pw2025_tubes_243040090/tampilan/surveykepuasan.php">Survey kepuasan</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="../pw2025_tubes_243040090/tampilan/book.php">Katalog Buku</a></li>
          <li class="nav-item"><a class="nav-link" href="../pw2025_tubes_243040090/sign/link_login.html">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="layar-penuh">
    <header id="home">
      <div class="overlay"></div>
      <video autoplay muted loop>
        <source src="../pw2025_tubes_243040090/assets/video.mp4" type="video/mp4">
      </video>
      <div class="intro">
        <h3>Selamat Datang di <br>Perpustakaan Universitas Pasundan</h3>
        <p>Perpustakaan Universitas Pasundan merupakan bagian Integral dari Institusi Perguruan Tinggi untuk menunjang pelaksanaan Program Tridharma Perguruan Tinggi yang meliputi: Pendidikan, Pengajaran, Penelitian, serta Pengabdian pada Masyarakat...</p>
        <p>
          <a href="#login.php" class="btn btn-outline-light">Login untuk Selengkapnya</a>
        </p>
      </div>
    </header>
  </div>

  <section class="profile-section py-5" id="profil">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: #212529;">Profil Perpustakaan</h2>
            <p class="lead text-muted">Mengenal lebih dekat perjalanan, visi, misi, dan tujuan UPT Perpustakaan Universitas Pasundan.</p>
          </div>

          <div class="visi-section">
            <h3 class="fw-bold" style="color: #212529;"><i class="bi bi-gem me-2"></i>Visi</h3>
            <p class="highlight-quote">
              “Menjadi perpustakaan unggul yang berfungsi sebagai pusat informasi, pembelajaran, dan inovasi yang berbasis pada nilai Keislaman dan Kesundaan, dalam mendukung pengembangan Entrepreneurial University pada tahun 2037.”
            </p>
          </div>

          <div class="visimisi-container">
            <article class="vision-card">
              <h4 class="vision-card__heading">
                <i class="bi bi-bullseye me-2"></i>Misi
              </h4>
              <ul class="vision-card__list">
                <li>Menyediakan koleksi informasi yang relevan, berkualitas, dan berbasis nilai Keislaman serta Kesundaan.</li>
                <li>Menyelenggarakan layanan perpustakaan yang modern, inklusif, dan berbasis Teknologi Informasi dan Komunikasi (TIK).</li>
                <li>Mengembangkan program literasi informasi dan budaya membaca untuk penguatan kompetensi kewirausahaan.</li>
                <li>Menciptakan lingkungan perpustakaan yang inspiratif dan kolaboratif sebagai pusat inovasi dan kreativitas.</li>
              </ul>
            </article>
            <article class="vision-card">
              <h4 class="vision-card__heading">
                <i class="bi bi-check-circle me-2"></i>Tujuan
              </h4>
              <ul class="vision-card__list">
                <li>Meningkatkan kualitas koleksi yang mencerminkan nilai Keislaman dan Kesundaan.</li>
                <li>Mengoptimalkan layanan berbasis teknologi untuk mempermudah akses informasi yang efisien.</li>
                <li>Meningkatkan literasi informasi guna memperkuat kompetensi kewirausahaan berlandaskan nilai lokal.</li>
                <li>Menciptakan ruang yang kondusif untuk inovasi dan pengembangan ide-ide kewirausahaan.</li>
              </ul>
            </article>
          </div>

          <div class="sejarah-section">
            <h3 class="fw-bold mb-4" style="color: #212529;"><i class="bi bi-hourglass-split me-2"></i>Perjalanan Sejarah</h3>
            <div class="timeline-box">
              <ul>
                <li><span class="year">1962</span>: Perpustakaan Universitas Pasundan berdiri di Jl. Lengkong Besar No. 68 Bandung.</li>
                <li><span class="year">1991</span>: Pindah dan menempati lantai 2 gedung bekas Fakultas Hukum di Jl. Tamansari.</li>
                <li><span class="year">1996</span>: Status berubah menjadi Unit Pelaksana Teknis (UPT) berdasarkan SK Rektor.</li>
                <li><span class="year">2007</span>: Peluncuran situs Digital Library di <a href="http://www.digilib.unpas.ac.id" target="_blank">www.digilib.unpas.ac.id</a>.</li>
                <li><span class="year">2014</span>: Sistem digital <a href="http://elibrary.unpas.ac.id" target="_blank">e-Library Unpas</a> mulai digunakan.</li>
                <li><span class="year">2016</span>: Peluncuran <a href="http://repository.unpas.ac.id" target="_blank">Repository Unpas</a> untuk publikasi karya ilmiah.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-light py-4" id="footer">
    <div class="container px-4">
      <div class="row">
        <div class="col-12 col-lg-4 mb-4">
          <h3 class="pt-3 fw-bold">Maps</h3>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.169393353427!2d107.59591331530961!3d-6.870459495034603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e658e752c525%3A0x1d37e03883a45e82!2sUniversitas%20Pasundan!5e0!3m2!1sid!2sid!4v1686612040441!5m2!1sid!2sid"
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="col">
          <h4 class="pt-3">Info Kontak</h4>
          <ul class="list-unstyled">
            <li><i class="bi bi-geo-alt"></i> Alamat:</li>
            <li class="text-white-50">Jl. Dr. Setiabudi No.193, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153</li><br>
            <li><i class="bi bi-alarm"></i> Jam Pelayanan:</li>
            <li class="text-white-50">Senin-Jumat 08:00-18:00 WIB</li>
          </ul>
        </div>
        <div class="col">
          <h4 class="pt-3">Informasi</h4>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="../pw2025_tubes_243040090/index.php" class="text-decoration-none text-light"><i class="bi bi-house"></i> Home</a></li>
            <li class="mb-2"><a href="../pw2025_tubes_243040090/tampilan/book.php" class="text-decoration-none text-light"><i class="bi bi-book"></i> Katalog Buku</a></li>
            <li class="mb-2"><a href="../pw2025_tubes_243040090/tampilan/tatatertib.php" class="text-decoration-none text-light"><i class="bi bi-clipboard2-pulse"></i> Tata Tertib</a></li>
            <li class="mb-2"><a href="../pw2025_tubes_243040090/tampilan/pinjaman.php" class="text-decoration-none text-light"><i class="bi bi-journal-code"></i> Pinjaman</a></li>
            <li class="mb-2"><a href="../pw2025_tubes_243040090/tampilan/kunjungan.php" class="text-decoration-none text-light"><i class="bi bi-person-walking"></i> Kunjungan</a></li>
            <li class="mb-2"><a href="../pw2025_tubes_243040090/tampilan/surveykepuasan.php" class="text-decoration-none text-light"><i class="bi bi-bar-chart-line-fill"></i> Survey</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-3 text-lg-end">
          <h4 class="pt-3">Follow Us</h4>
          <div class="d-flex justify-content-lg-end gap-3 mt-2 flex-wrap">
            <a href="https://www.facebook.com/universitaspasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-facebook fs-3 follow-icon"></i></a>
            <a href="https://x.com/univ_pasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-twitter fs-3 follow-icon"></i></a>
            <a href="https://www.instagram.com/univ_pasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-instagram fs-3 follow-icon"></i></a>
            <a href="https://www.tiktok.com/@univ_pasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-tiktok fs-3 follow-icon"></i></a>
            <a href="https://www.youtube.com/channel/UC9bYQ1Q-A8Z9g7ZqZ7Z9Z_w" target="_blank" class="text-decoration-none text-light"><i class="bi bi-youtube fs-3 follow-icon"></i></a>
          </div>
        </div>
        <hr class="border-light my-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
          <p class="mb-2 mb-md-0">© <?= date("Y"); ?> Perpustakaan Universitas Pasundan. All rights reserved.</p>
          <div>
            <a href="#" class="text-decoration-none text-light me-3">Privacy Policy</a>
            <a href="#" class="text-decoration-none text-light">Terms of Service</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>