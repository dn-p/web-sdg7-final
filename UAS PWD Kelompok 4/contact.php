<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="container">
        <div class="form-box box">
        <form action="" method="GET">

            <?php
            // Menghubungkan ke database
            include "connection.php";

            // Mulai sesi untuk mendapatkan ID pengguna jika login
            session_start();
            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL; // Ambil user_id dari session

            // Cek apakah form sudah disubmit
            if (isset($_POST['submit'])) {
                // Tangkap data dari form
                $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : NULL; // Opsional untuk non-login
                $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : NULL; // Opsional untuk non-login
                $subject = htmlspecialchars($_POST['subject']);
                $message = htmlspecialchars($_POST['message']);

                // Validasi input
                if (empty($subject) || empty($message)) {
                    echo "<div class='message'>
                            <p>Please fill in all required fields 😔</p>
                          </div><br>";
                } else {
                    // Buat query INSERT menggunakan prepared statement
                    // Jika user_id tersedia, maka akan di-insert, jika tidak, user_id akan NULL
                    $query = "INSERT INTO contact (user_id, name, email, subject, message) VALUES (?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($query);

                    // Bind parameter berdasarkan kondisi pengguna login atau tidak
                    $stmt->bind_param("issss", $user_id, $name, $email, $subject, $message);

                    // Eksekusi query dan cek hasilnya
                    if ($stmt->execute()) {
                        echo "<div class='message'>
                                <p>Message sent successfully ✨</p>
                              </div><br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                    } else {
                        echo "<div class='message'>
                                <p>Message sending failed 😔</p>
                              </div><br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                    }

                    // Tutup statement
                    $stmt->close();
                }
            }
            ?>
</form>
        </div>
    </div>
</body>

</html>
