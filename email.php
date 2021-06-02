<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['asunto']) 
    && !empty($_POST['message']) && !empty($_POST['mail'])){
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['message'];
        $email = $_POST['mail'];

        $header = "From: correodepruebasss1@gmail.com" . "\r\n";
        $header = "Reply-To: correodepruebasss1@gmail.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();

        $mail = @mail($email,$asunto,$msg,$header);

        if($mail) {
            header("Location: index.html");
        }
    }
}