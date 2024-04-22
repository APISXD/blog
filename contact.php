<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Atur alamat email tujuan
    $to = "aditzff70@gmail.com"; // Ganti dengan alamat email penerima Anda

    // Bangun pesan email
    $email_message = "Name: ".$name."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Subject: ".$subject."\n";
    $email_message .= "Message: ".$message."\n";

    // Atur header email
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // Kirim email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
