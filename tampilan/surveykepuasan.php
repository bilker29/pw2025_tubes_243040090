<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Survey Kepuasan - Perpustakaan Universitas Pasundan</title>

    <style>
        body {
            padding-top: 90px;
        }

        .navbar-custom {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
        }

        .follow-icon {
            transition: transform 0.2s;
        }

        .follow-icon:hover {
            transform: scale(1.2);
        }

        .star-rating {
            direction: rtl;
            display: inline-block;
            padding: 0;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            color: #ddd;
            cursor: pointer;
            font-size: 2.5rem;
            padding: 0 0.1em;
            transition: color 0.2s;
        }

        .star-rating label:hover,
        .star-rating label:hover~label,
        .star-rating input[type="radio"]:checked~label {
            color: #ffca08;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../">
                <img src="../assets/logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                Perpustakaan Universitas Pasundan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../tampilan/tatatertib.php">Tata Tertib</a></li>
                            <li><a class="dropdown-item" href="../tampilan/pinjaman.php">Pinjaman</a></li>
                            <li><a class="dropdown-item" href="../tampilan/kunjungan.php">Kunjungan</a></li>
                            <li><a class="dropdown-item" href="../tampilan/surveykepuasan.php">Survey Kepuasan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../tampilan/book.php">Katalog Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sign/link_login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-4">
                    <i class="bi bi-bar-chart-line-fill" style="font-size: 5rem; color: #0d6efd;"></i>
                    <h2 class="mt-2">Survey Kepuasan Pengguna</h2>
                    <p class="lead">Kami menghargai masukan Anda untuk meningkatkan kualitas layanan perpustakaan.</p>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <form action="#" method="POST">
                            <div class="mb-4 text-center">
                                <label class="form-label fw-bold fs-5">Seberapa puaskah Anda dengan layanan kami secara keseluruhan?</label>
                                <div class="star-rating">
                                    <input type="radio" id="5-stars" name="rating" value="5" required /><label for="5-stars">★</label>
                                    <input type="radio" id="4-stars" name="rating" value="4" /><label for="4-stars">★</label>
                                    <input type="radio" id="3-stars" name="rating" value="3" /><label for="3-stars">★</label>
                                    <input type="radio" id="2-stars" name="rating" value="2" /><label for="2-stars">★</label>
                                    <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star">★</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Aspek apa yang paling memuaskan Anda?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="aspek" id="aspek1" value="koleksi_buku">
                                    <label class="form-check-label" for="aspek1">Kelengkapan Koleksi Buku</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="aspek" id="aspek2" value="pelayanan_staf">
                                    <label class="form-check-label" for="aspek2">Keramahan dan Pelayanan Staf</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="aspek" id="aspek3" value="fasilitas">
                                    <label class="form-check-label" for="aspek3">Kenyamanan dan Fasilitas Ruangan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="aspek" id="aspek4" value="sistem_online">
                                    <label class="form-check-label" for="aspek4">Kemudahan Sistem Online (Website/OPAC)</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="saran" class="form-label fw-bold">Apakah ada saran atau kritik yang ingin Anda sampaikan?</label>
                                <textarea class="form-control" id="saran" name="saran" rows="4" placeholder="Tuliskan masukan Anda di sini..."></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-send-check"></i> Kirim Survey
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-light py-4 mt-5" id="footer">
        <div class="container px-4">
            <div class="row">
                <div class="col-12 col-lg-4 mb-4">
                    <h3 class="pt-3 fw-bold">Maps</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.114828650969!2d107.5910488152794!3d-6.877195695030889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e68e73e975c3%3A0x2475a97f1f0a7193!2sUniversitas%20Pasundan!5e0!3m2!1sid!2sid!4v1684330101736!5m2!1sid!2sid"
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
                        <li class="mb-2"><a href="../index.php" class="text-decoration-none text-light"><i class="bi bi-house"></i> Home</a></li>
                        <li class="mb-2"><a href="../tampilan/book.php" class="text-decoration-none text-light"><i class="bi bi-book"></i> Katalog Buku</a></li>
                        <li class="mb-2"><a href="../tampilan/tatatertib.php" class="text-decoration-none text-light"><i class="bi bi-clipboard2-pulse"></i> Tata Tertib</a></li>
                        <li class="mb-2"><a href="../tampilan/pinjaman.php" class="text-decoration-none text-light"><i class="bi bi-journal-code"></i> Pinjaman</a></li>
                        <li class="mb-2"><a href="../tampilan/kunjungan.php" class="text-decoration-none text-light"><i class="bi bi-person-walking"></i> Kunjungan</a></li>
                        <li class="mb-2"><a href="../tampilan/surveykepuasan.php" class="text-decoration-none text-light"><i class="bi bi-bar-chart-line-fill"></i> Survey</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 text-lg-end">
                    <h4 class="pt-3">Follow Us</h4>
                    <div class="d-flex justify-content-lg-end gap-3 mt-2 flex-wrap">
                        <a href="https://www.facebook.com/universitaspasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-facebook fs-3 follow-icon"></i></a>
                        <a href="https://x.com/univ_pasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-twitter fs-3 follow-icon"></i></a>
                        <a href="https://www.instagram.com/univ_pasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-instagram fs-3 follow-icon"></i></a>
                        <a href="https://www.tiktok.com/@univ_pasundan" target="_blank" class="text-decoration-none text-light"><i class="bi bi-tiktok fs-3 follow-icon"></i></a>
                        <a href="https://www.youtube.com/channel/UCn1h_aJ2V2g-RdwjQe_fV-A" target="_blank" class="text-decoration-none text-light"><i class="bi bi-youtube fs-3 follow-icon"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-light my-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <p class="mb-2 mb-md-0">© <?php echo date("Y"); ?> Perpustakaan Universitas Pasundan. All rights reserved.</p>
                <div>
                    <a href="#" class="text-decoration-none text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-decoration-none text-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>