<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = htmlspecialchars($_POST['name']);
    $Email = htmlspecialchars($_POST['email']);
    $Nomor_WA = htmlspecialchars($_POST['NoWA']);
    $Message = htmlspecialchars($_POST['message']);

    // Set your email address where you want to receive messages
    $to = "acergligir@gmail.com";
    $subject = "New Message from Contact Form";
    $body = "Name: $Nama\nEmail: $Email\nNoWA: $Nomor_WA\n\nMessage:\n$Message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo Pesan Anda telah berhasil dikirim.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengirim pesan Anda. Silakan coba lagi nanti.";
    }
}
?>
