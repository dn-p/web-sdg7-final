<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Anomaly</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'header.php'; // Include the header file ?>
    
    <div class="container">
        <h2 class="center-text">Temperature Anomaly</h2>
        <iframe src="https://ourworldindata.org/grapher/temperature-anomaly?tab=chart" loading="lazy" style="width: 100%; height: 600px; border: 0px none; margin-top: 150px;" allow="web-share; clipboard-write"></iframe>
    </div>
    <div class="explanation-box" style="margin-top: 20px; margin-right: 70px; margin-left: 70px; margin-bottom: 30px; padding: 10px; border: 1px solid #ced4da; border-radius: 3px; background-color: #f8f9fa; text-align: left;">
            <h4>Insight dari data di atas adalah:</h4>
            <ul style="list-style-type: disc; padding: 0;">
                <li>Peningkatan Suhu Global: Grafik dengan jelas menunjukkan tren peningkatan suhu rata-rata global, terutama sejak pertengahan abad ke-20. Ini merupakan indikator kuat dari pemanasan global.</li>
                <li>Fluktuasi Tahunan: Meskipun ada tren kenaikan jangka panjang, suhu juga mengalami fluktuasi dari tahun ke tahun. Ini dipengaruhi oleh faktor-faktor seperti El Nino dan La Nina.</li>
                <li>Percepatan Pemanasan: Grafik menunjukkan bahwa laju peningkatan suhu semakin cepat dalam beberapa dekade terakhir, dibandingkan dengan periode sebelumnya.</li>
            </ul>
        </div>
    </div>
    
    <?php include 'footer.php'; // Include the footer file ?>
</body>
</html>