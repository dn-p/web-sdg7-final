<?php
// Menghubungkan ke database
include "connection.php";

// Mulai sesi untuk mendapatkan ID pengguna jika login
session_start();
$user_id = isset($_SESSION['id']) ? $_SESSION['id'] : NULL; // Ambil user_id dari session

// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari form
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : NULL;
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : NULL;

    // Validasi input
    if (empty($subject) || empty($message)) {
        echo "<div class='message'>
                <p>Please fill in all required fields 😔</p>
              </div><br>";
    } else {
        // Buat query INSERT menggunakan prepared statement
        // Jika user_id tersedia, maka akan di-insert, jika tidak, user_id akan NULL
        $query = "INSERT INTO contact (user_id, subject, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);

        // Bind parameter berdasarkan kondisi pengguna login atau tidak
        $stmt->bind_param("iss", $user_id,  $subject, $message);

        // Eksekusi query dan cek hasilnya
        if ($stmt->execute()) {
            echo "<div class='message'>
                    <p>Message sent successfully ✨</p>
                  </div><br>";
            echo "<a href='home.php'><button class='btn'>Go Back</button></a>";
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