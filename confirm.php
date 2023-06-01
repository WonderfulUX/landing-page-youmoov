<?php

$fname = null;
$lname = null;
$email = null;
$message = null;



if (isset($_POST)) {
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
}

$receiver = 'boris.boulogne@gmail.com'; 
$subject = 'New message from'.$fname.' '.$lname ;
$content = $message;

mail($receiver, $subject, $content);
echo mail($receiver, $subject, $content);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Contact</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100vh;
            align-items: center;
            padding-top: 100px;
        }

        img {
            display: inline-block;
            max-width: 80%;
            height: 60px;
            margin-bottom: 80px;
        }

        .feedblack-block.success {
            color: var(--highlight-color);
            text-align: center;
            padding: 20px;
            background: var(--highlight-light);
            border-radius: 10px;
            width: 330px;
        }
    </style>
</head>

<body>
    <a href="/index.html">
        <img src="./assets/logo/youmoov_green.svg" alt="Youmoov">
    </a>
    <div class="feedback-block success dn">
        <!-- FR -->
        <p class="feedback fr"><strong>Message envoyé ✔</strong><br><br>
            Notre équipe qui reviendra vers vous dans les plus brefs délais.<br><br>
            À très bientôt !
        </p>
        <!-- EN -->
        <p class="feedback en dn"><strong>Message sent ✔</strong><br>
            Our team will get back to you shortly <br><br>
            See you soon !
        </p>
        <!-- PT -->
        <p class="feedback pt dn"><strong>Mensagem transmitida ✔</strong><br>
            Nossa equipe que retornará para você o mais breve possível.<br><br>
            Vejo você em breve !
        </p>
    </div>
    <script src="confirm.js"></script>
</body>

</html>