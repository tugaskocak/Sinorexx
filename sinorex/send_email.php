<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari input form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Ganti dengan alamat email Anda
    $to = "sinorex94@gmail.com"; // Gantilah dengan alamat email yang Anda inginkan
    $subject = "Pesan dari Contact Form";
    $body = "Nama: $name\nEmail: $email\n $Phone\nPesan:\n$message";

    // Mengatur header email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Mengirim email dan memeriksa status pengiriman
    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Gagal mengirim pesan.";
    }
} else {
    echo "Request tidak valid.";
}
?>