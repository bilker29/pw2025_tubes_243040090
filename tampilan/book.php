<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku - Perpustakaan Unpas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            padding-top: 80px;
        }

        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar .nav-link.active {
            font-weight: 600;
            color: #0d6efd !important;
        }

        .section-title {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #0d6efd;
            display: inline-block;
            font-weight: 600;
        }

        .card {
            border: none;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: .375rem .375rem 0 0;
        }

        .card-title {
            font-size: 1rem;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-text {
            font-size: 0.9rem;
        }

        #footer {
            background-color: #212529;
        }

        #footer h3,
        #footer h4 {
            font-weight: 600;
            color: #ffffff;
        }

        #footer a {
            color: #adb5bd;
            transition: color 0.3s ease;
        }

        #footer a:hover {
            color: #ffffff;
            text-decoration: none;
        }

        #footer .follow-icon {
            font-size: 1.75rem;
            transition: color 0.3s, transform 0.3s;
        }

        #footer .follow-icon:hover {
            color: #0d6efd !important;
            transform: scale(1.1);
        }

        #footer .list-unstyled li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../">
                <img src="../assets/logo.png" alt="logo" width="30" height="30">
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
                    <li class="nav-item"><a class="nav-link" href="../sign/link_login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">

        <h2 class="section-title">Fakultas Hukum</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/hukum1.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Project Hail Mary">Project Hail Mary</h5>
                        <p class="card-text text-muted">Andy Weir</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/hukum2.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Dune">Dune</h5>
                        <p class="card-text text-muted">Frank Herbert</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/hukum3.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="The Three-Body Problem">The Three-Body Problem</h5>
                        <p class="card-text text-muted">Cixin Liu</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/hukum4.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Neuromancer">Neuromancer</h5>
                        <p class="card-text text-muted">William Gibson</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/hukum5.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Foundation">Foundation</h5>
                        <p class="card-text text-muted">Isaac Asimov</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="container my-5">

        <h2 class="section-title">Fakultas Ilmu Sosial dan Politik</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fisip1.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Project Hail Mary">Project Hail Mary</h5>
                        <p class="card-text text-muted">Andy Weir</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fisip2.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Dune">Dune</h5>
                        <p class="card-text text-muted">Frank Herbert</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fisip3.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="The Three-Body Problem">The Three-Body Problem</h5>
                        <p class="card-text text-muted">Cixin Liu</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fisip4.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Neuromancer">Neuromancer</h5>
                        <p class="card-text text-muted">William Gibson</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fisip5.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Foundation">Foundation</h5>
                        <p class="card-text text-muted">Isaac Asimov</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="container my-5">

        <h2 class="section-title">Fakultas Teknik</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/teknik1.png" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Project Hail Mary">Project Hail Mary</h5>
                        <p class="card-text text-muted">Andy Weir</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/teknik2.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Dune">Dune</h5>
                        <p class="card-text text-muted">Frank Herbert</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/teknik3.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="The Three-Body Problem">The Three-Body Problem</h5>
                        <p class="card-text text-muted">Cixin Liu</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/teknik4.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Neuromancer">Neuromancer</h5>
                        <p class="card-text text-muted">William Gibson</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/teknik5.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Foundation">Foundation</h5>
                        <p class="card-text text-muted">Isaac Asimov</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="container my-5">

        <h2 class="section-title">Fakultas Ekonomi dan Bisnis</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/feb1.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Project Hail Mary">Project Hail Mary</h5>
                        <p class="card-text text-muted">Andy Weir</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/feb2.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Dune">Dune</h5>
                        <p class="card-text text-muted">Frank Herbert</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/feb3.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="The Three-Body Problem">The Three-Body Problem</h5>
                        <p class="card-text text-muted">Cixin Liu</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/feb4.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Neuromancer">Neuromancer</h5>
                        <p class="card-text text-muted">William Gibson</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/feb5.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Foundation">Foundation</h5>
                        <p class="card-text text-muted">Isaac Asimov</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="container my-5">

        <h2 class="section-title">Fakultas Keguruan dan Ilmu Pendidikan</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fkip1.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Project Hail Mary">Project Hail Mary</h5>
                        <p class="card-text text-muted">Andy Weir</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fkip2.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Dune">Dune</h5>
                        <p class="card-text text-muted">Frank Herbert</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fkip3.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="The Three-Body Problem">The Three-Body Problem</h5>
                        <p class="card-text text-muted">Cixin Liu</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fkip4.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Neuromancer">Neuromancer</h5>
                        <p class="card-text text-muted">William Gibson</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fkip1.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Foundation">Foundation</h5>
                        <p class="card-text text-muted">Isaac Asimov</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="container my-5">

        <h2 class="section-title">Fakultas Seni dan Sastra</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fiss1.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Project Hail Mary">Project Hail Mary</h5>
                        <p class="card-text text-muted">Andy Weir</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fiss2.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Dune">Dune</h5>
                        <p class="card-text text-muted">Frank Herbert</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fiss3.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="The Three-Body Problem">The Three-Body Problem</h5>
                        <p class="card-text text-muted">Cixin Liu</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fiss4.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Neuromancer">Neuromancer</h5>
                        <p class="card-text text-muted">William Gibson</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fiss5.jpeg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Foundation">Foundation</h5>
                        <p class="card-text text-muted">Isaac Asimov</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="container my-5">

        <h2 class="section-title">Fiksi Ilmiah</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fk1.png" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Project Hail Mary">Project Hail Mary</h5>
                        <p class="card-text text-muted">Andy Weir</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fk2.png" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Dune">Dune</h5>
                        <p class="card-text text-muted">Frank Herbert</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fk3.png" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="The Three-Body Problem">The Three-Body Problem</h5>
                        <p class="card-text text-muted">Cixin Liu</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fk4.png" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Neuromancer">Neuromancer</h5>
                        <p class="card-text text-muted">William Gibson</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="../imgDB/fk5.jpg" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" title="Foundation">Foundation</h5>
                        <p class="card-text text-muted">Isaac Asimov</p>
                        <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-light py-4" id="footer">
        <div class="container px-4">
            <div class="row gy-4">
                <div class="col-12 col-lg-4">
                    <h3>Maps</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.160193134336!2d107.59207031536761!3d-6.871583695034608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e698aa828575%3A0x633485c270553767!2sUniversitas%20Pasundan%20(UNPAS)%20-%20Kampus%20IV!5e0!3m2!1sen!2sid!4v1678886561123!5m2!1sen!2sid" width="100%" height="250" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 col-lg-2">
                    <h4>Informasi</h4>
                    <ul class="list-unstyled">
                        <li><a href="../index.php"><i class="bi bi-house-door me-2"></i>Home</a></li>
                        <li><a href="#"><i class="bi bi-person-workspace me-2"></i>Layanan</a></li>
                        <li><a href="../tampilan/book.php"><i class="bi bi-book me-2"></i>E-Book</a></li>
                        <li><a href="../tampilan/tatatertib.php"><i class="bi bi-clipboard2-pulse me-2"></i>Tata Tertib</a></li>
                        <li><a href="../tampilan/pinjaman.php"><i class="bi bi-journal-code me-2"></i>Pinjaman</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4>Info Kontak</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex"><i class="bi bi-geo-alt me-2 mt-1"></i><span>Jl. Dr. Setiabudi No.193, Bandung</span></li>
                        <li class="d-flex"><i class="bi bi-alarm me-2 mt-1"></i><span>Senin-Jumat: 08:00 - 18:00 WIB</span></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 text-lg-start">
                    <h4>Follow Us</h4>
                    <div class="d-flex gap-3 mt-2">
                        <a href="https://www.facebook.com/universitaspasundan?_rdc=1&_rdr#"><i class="bi bi-facebook follow-icon"></i></a>
                        <a href="https://x.com/univ_pasundan"><i class="bi bi-twitter follow-icon"></i></a>
                        <a href="https://www.instagram.com/univ_pasundan/#"><i class="bi bi-instagram follow-icon"></i></a>
                        <a href="https://www.tiktok.com/@univ_pasundan"><i class="bi bi-tiktok follow-icon"></i></a>
                        <a href="https://www.youtube.com/channel/UCf1dLsAmc_j2a1aM5l2g4XA"><i class="bi bi-youtube follow-icon"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <p class="mb-2 mb-md-0">© 2025 Perpustakaan Universitas Pasundan. All rights reserved.</p>
                <div>
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>