<?php

if($_POST["submit"]) {
    $recipient="koaddigitals@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

        <form method="post" action="contact.php">
            <h2>Send an Email</h2>
            <input type="text" name="sender" placeholder="Full name">
            <input type="email" name="senderEmail" placeholder="Email">
            <input type="subject" name="subject" placeholder="subject">
            <textarea placeholder= "Message"></textarea>
            <input type="submit" value="Send">
        </form>
</body>
</html>