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

    <?php include 'header.php';?>

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

    <!-- about section  -->

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="images/about.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>Tentang Clean Energy</h3>
                    <h1>Apa itu Clean Energy dan Mengapa itu Penting?</h1>

                    <p class="justify-text">Clean energy adalah energi yang berasal dari sumber ramah lingkungan seperti matahari, angin, 
                        dan air, yang tidak menghasilkan polusi atau emisi gas rumah kaca. Energi ini penting untuk mengurangi 
                        dampak perubahan iklim, melestarikan lingkungan, dan menciptakan masa depan yang berkelanjutan.</p>
                    <button>learn more</button>
                </div>
            </div>
        </div>
    </section>

   <!-- dashboard section  -->
     
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
                <h4 class="card-title">Emisi CO₂ Per Kapita</h4>
                <p class="card-text">Emisi karbon dioksida (CO₂) dari bahan bakar fosil dan industri. Perubahan penggunaan lahan tidak termasuk.</p>
            </div>
        </div>
    </a>
</div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="temp_anomaly.php" class="card-link">
                                <div class="card">
                                <img src="images/world temp.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Anomali Temperartur</h4>
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
            <p>Data yang disajikan dalam dashboard ini menggarisbawahi urgensi untuk mempercepat transisi energi. Dengan memahami tren emisi karbon, suhu global, dan perkembangan teknologi energi terbarukan, kita dapat mengambil langkah-langkah konkret untuk mencapai masa depan yang lebih berkelanjutan.</p>
            <button class="btn">Explore Services</button>
</div>

            </div>
        </div>
    </section>

<!-- Carbon Calculator Section -->
<section id="carbon-calculator" class="py-5">
    <div class="container">
        <h2 class="text-center">Carbon Calculator</h2>
        <p class="text-center">Hitunglah Jejak Karbon Anda dan Temukan Cara untuk Menguranginya</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="carbon-calculator-form">
                    <div class="mb-3">
                        <label for="electricity" class="form-label">Electricity Usage (kWh)</label>
                        <input type="number" class="form-control" id="electricity" placeholder="Enter your monthly electricity usage">
                    </div>
                    <div class="mb-3">
                        <label for="gas" class="form-label">Gas Usage (therms)</label>
                        <input type="number" class="form-control" id="gas" placeholder="Enter your monthly gas usage">
                    </div>
                    <div class="mb-3">
                        <label for="miles" class="form-label">Miles Driven</label>
                        <input type="number" class="form-control" id="miles" placeholder="Enter the miles you drive per month">
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
                <div id="carbon-result" class="mt-4 text-center"></div>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('carbon-calculator-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const electricity = parseFloat(document.getElementById('electricity').value) || 0;
    const gas = parseFloat(document.getElementById('gas').value) || 0;
    const miles = parseFloat(document.getElementById('miles').value) || 0;

    // Example calculation (these factors are illustrative and should be replaced with accurate data)
    const electricityFactor = 0.92; // kg CO2 per kWh
    const gasFactor = 5.3; // kg CO2 per therm
    const milesFactor = 0.404; // kg CO2 per mile

    const totalCarbon = (electricity * electricityFactor) + (gas * gasFactor) + (miles * milesFactor);

    document.getElementById('carbon-result').innerHTML = `<h4>Your estimated monthly carbon footprint is ${totalCarbon.toFixed(2)} kg CO2</h4>`;
});
</script>

    <!-- project section  -->

    <section class="project-section" id="projects">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-12">
                    <h3>our works</h3>
                    <h1>Our Movement</h1>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>Kami telah mengerjakan berbagai proyek sebagai wujud komitmen kami dalam mendukung pengembangan energi bersih. Mulai dari instalasi panel surya dan turbin angin di desa-desa terpencil hingga penyediaan kompor bioenergi serta lampu tenaga surya untuk meningkatkan akses energi di daerah tanpa listrik. Kami juga menjalankan program pembiayaan mikro yang membantu masyarakat mendapatkan teknologi energi terbarukan, memastikan keberlanjutan dan inklusivitas dalam transisi menuju energi bersih.</p>
                </div>
            </div>
            <div class="row project">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Program Energi Terbarukan</h4>
                                <p class="card-text">Instalasi panel surya atau turbin angin di desa-desa terpencil.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Peningkatan Akses Energi Bersih</h4>
                                <p class="card-text">Penyediaan kompor bioenergi atau lampu tenaga surya di daerah tanpa listrik.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Edukasi Energi Berkelanjutan</h4>
                                <p class="card-text">Kampanye kesadaran tentang penggunaan energi bersih dan hemat energi.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Pembiayaan Mikro untuk Energi Bersih</h4>
                                <p class="card-text">Memberikan kredit bagi masyarakat untuk mengakses teknologi energi terbarukan.</p>
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