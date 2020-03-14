<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "renatalsg@hotmail.com";
    $headers = "From: " . $mail;
    $txt = "You have received an e-mail from " . $name . "\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsend");
}
