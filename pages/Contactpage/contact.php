<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '' ){

        if(filter_var($_POST['name'], FILTER_VALIDATE_EMAIL)){
            // Formulaire peut être envoyé :
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "tthunderteam@gmail.com";
            $body = "";

            $body .= "De : ".$userName. "\r\n";
            $body .= "Email : ".$userEmail. "\r\n";
            $body .= "Message : : ".$message. "\r\n";

            mail($to,$messageSubject,$body);

            $message_sent = true;

        }
        else{
            $invalid_class_name = "form-invalid";
        }



    }





?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style_contact.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="asset/js/main.js"></script>
</head>

<body>
    <?php
    if($message_sent):
    ?>
        <h3 class="h3confirm">Merci à vous ! Nous vous répondrons au plus vite </h3>

    <?php
    else:
    ?>
    <div class="container">
    <h1>Formulaire de Contact</h1>
    <form action="index.php?page=contact" method="POST" class="form">
        <div class="form-group">
            <label for="name" class="form-label">Votre nom</label>
            <input type="text" class="form-control <?= $invalid_class_name ?? "" ?>" id="name" name="name" placeholder="Nom" tabindex="1" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Votre Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="votremail@gmail.com" tabindex="2" required>
        </div>
        <div class="form-group">
            <label for="subject" class="form-label">Sujet :</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" tabindex="3" required>
        </div>
        <div class="form-group">
            <label for="message" class="form-label">Votre message :</label>
            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Dites nous tout" tabindex="4"></textarea>
        </div>
        <div>
            <button class="learn-more">Envoyer</button>
        </div>
    </form>

    </div>
    <?php
    endif;
    ?>
</body>

</html>