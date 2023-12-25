<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Navbar Top with Image</title>
    <style>
        * {
            overflow-x: hidden;
        }

        .container-fluid-overlay {
            position: relative;
            overflow: hidden;
        }

        .container-fluid-overlay img {
            width: 100%;
            height: auto;
            display: block;
        }

        .carousel-item {
            position: relative;
        }

        .carousel-caption {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0));
            padding: 20px;
            color: white;
            pointer-events: none;
        }

        .carousel-caption h5,
        .carousel-caption p {
            margin: 0;
        }

        .custom-card {
            border-radius: 0 0 10px 10px;
            /* Atur sudut card */
        }

        /* Flexbox styles for card sliding */
        #cardSlideRow {
            display: flex;
            overflow-x: hidden;
            animation: slideCards 10s linear infinite;
            /* Ganti durasi dan timing function sesuai kebutuhan */
        }

        .card-wrapper {
            min-width: 100%;
        }

        /* @keyframes for sliding cards */
        @keyframes slideCards {
            0% {
                transform: translateX(0);
            }

            33.3333% {
                transform: translateX(-100%);
            }

            66.6666% {
                transform: translateX(-200%);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <img src="https://picsum.photos/1200/150" class="w-100 h-30" alt="Full Width Image">
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mt-4 px-1 ">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Column 1</h5>
                        <p class="card-text">Content for column 1 goes here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/600/500" class="d-block w-100" alt="Slide 1">
                            <div class="gradient-overlay"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Judul Berita 1</h5>
                                <p>Tanggal: 01 Januari 2023 | Penulis: John Doe</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600/500" class="d-block w-100" alt="Slide 2">
                            <div class="gradient-overlay"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Judul Berita 1</h5>
                                <p>Tanggal: 01 Januari 2023 | Penulis: John Doe</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600/500" class="d-block w-100" alt="Slide 3">
                            <div class="gradient-overlay"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Judul Berita 1</h5>
                                <p>Tanggal: 01 Januari 2023 | Penulis: John Doe</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://picsum.photos/600/500" class="card-img-top" alt="Card 1">
                            <div class="card-body">
                                <h5 class="card-title">Card 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://picsum.photos/600/500" class="card-img-top" alt="Card 1">
                            <div class="card-body">
                                <h5 class="card-title">Card 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://picsum.photos/600/500" class="card-img-top" alt="Card 1">
                            <div class="card-body">
                                <h5 class="card-title">Card 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Colom kanan -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Column 3</h5>
                        <p class="card-text">Content for column 3 goes here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bawah Coloum -->
    <div class="mt-4 col-12" id="cardSlideRow">
        <!-- Cards will be dynamically added here through CSS animation -->
        <div class="col-md-4 card-wrapper">
            <div class="card">
                <img src="https://picsum.photos/300/300" class="card-img-top" alt="Card Slide 1">
                <div class="card-body">
                    <h5 class="card-title">Card Slide 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 card-wrapper">
            <div class="card">
                <img src="https://picsum.photos/300/300" class="card-img-top" alt="Card Slide 2">
                <div class="card-body">
                    <h5 class="card-title">Card Slide 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 card-wrapper">
            <div class="card">
                <img src="https://picsum.photos/300/300" class="card-img-top" alt="Card Slide 3">
                <div class="card-body">
                    <h5 class="card-title">Card Slide 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>