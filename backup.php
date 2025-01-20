<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Energy Hub</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navbar section   -->

    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Your Logo" height="100" width="auto"> Clean Energy Hub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- hero section  -->

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 text-content">
                    <h1>Energi Bersih dan Terjangkau</h1>
                    <p>Bersama, kita wujudkan masa depan dengan energi bersih yang terjangkau dan berkelanjutan.
                    </p>
                    <button class="btn"><a href="#">Dukung Inisiatif</a></button>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <img src="images/asset1.png" alt="" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <!-- services section  -->
     
    <section class="services-section" id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 services">
                    <div class="row row1">
                    <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="co2emission.php" class="card-link">
        <div class="card">
            <img src="images/co2.jpg" class="card-img-top" alt="..." style="width: 35%; height: auto;">
            <div class="card-body">
                <h4 class="card-title">Per capita CO₂ emissions</h4>
                <p class="card-text">Carbon dioxide (CO₂) emissions from fossil fuels and industry. Land-use change is not included.</p>
            </div>
        </div>
    </a>
</div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="temp_anomaly.php" class="card-link">
                                <div class="card">
                                <img src="images/world temp.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Temperature Anomaly</h4>
                                    <p class="card-text">Peningkatan suhu global akibat emisi karbon mengancam lingkungan dan kehidupan.</p></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row2">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="solarpanel.php" class="card-link">
                            <div class="card">
                                <img src="images/solar panel.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Harga Solar Panel</h4>
                                    <p class="card-text">Tren Harga Panel Surya: Kemajuan Teknologi dan Aksesibilitas.</p></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <a href="windpower.php" class="card-link">
                                <div class="card">
                                <img src="images/wind.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Persentase PLTB</h4>
                                    <p class="card-text">persentase PLTB di berbagai negara., memberikan wawasan tentang kontribusi energi angin dalam transisi menuju solusi energi bersih.</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

<div class="col-lg-6 col-md-12 col-sm-12 text-content">
    <h3>Dashboard</h3>
        <h1>Indikator Utama untuk Transisi ke Energi Bersih.</h1>
            <p>Kami menampilkan dashboard yang menyoroti indikator utama transisi ke energi bersih, memberikan wawasan mendalam tentang kebutuhan mendesak menuju solusi energi berkelanjutan. Dengan data terintegrasi, dashboard ini menunjukkan bagaimana energi bersih mengurangi emisi karbon, meningkatkan efisiensi, dan menciptakan dampak positif bagi lingkungan dan masyarakat.</p>
            <button class="btn">Explore Services</button>
</div>

            </div>
        </div>
    </section>

    <!-- about section  -->

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="images/about.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>who we are</h3>
                    <h1>Providing creative and technology services for growing brands.</h1>

                    <p>Our company specializes in research, brand identity design, UI/UX design, development and graphic
                        design. To help our clients improve their business, we work with them all over the world.</p>
                    <button>learn more</button>
                </div>
            </div>
        </div>
    </section>

    <!-- project section  -->

    <section class="project-section" id="projects">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-12">
                    <h3>our works</h3>
                    <h1>Our latest project</h1>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>We build product close to our heart. We make your idea to really and make your dream successful
                        with awesome experience.</p>
                </div>
            </div>
            <div class="row project">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">SaaS Website</h4>
                                <p class="card-text">Development. Jan 19,2022</p>
                                <button>see project</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Travel Website</h4>
                                <p class="card-text">UI/UX Jun 29,2023</p>
                                <button>see project</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Travel Website</h4>
                                <p class="card-text">UI/UX Aug 9,2021</p>
                                <button>see project</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">SaaS Website</h4>
                                <p class="card-text">Development. May 25 ,2022</p>
                                <button>see project</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- contact section  -->

    <section class="contact-section" id="contact">
    <div class="container">
        <?php if (isset($_SESSION['user_id'])): ?>
            <div class="row gy-4">
                <h1>contact us</h1>
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <!-- Address details -->
                            </div>
                        </div>
                        <!-- Other contact details -->
                    </div>
                </div>
            </div>
        <?php else: ?>
            <p>Please log in to view the contact section.</p>
        <?php endif; ?>
    </div>
</section>

    <!-- footer section  -->
    <?php include 'footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>