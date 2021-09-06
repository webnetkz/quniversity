<?php


    if(!empty($_POST) && isset($_POST)) {
        if(!empty($_POST['name']) && isset($_POST['name'])) {
            // Проверяем существование почтового адреса
            require_once '../libs/db.php';
            
            $mail = trim($_POST['name']);
            $mail = htmlentities($mail);
            
            $isset = $pdo->query('SELECT mail FROM users WHERE mail = "'.$mail.'"');
            $isset = $isset->fetch(PDO::FETCH_ASSOC);


            if($isset) {
                // Если пользователь ранее был создан
            } else {
                // Регистирруем нового пользователя
                $pass = md5(uniqid(rand(),true));
                $pdo->query('INSERT INTO users(`mail`, `pass`) VALUES("'.$mail.'", "'.$pass.'")');

                ini_set("SMTP", "emx.mail.ru");
                ini_set("sendmail_from", "info@zavod.store");

                $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";
                $headers = "From: info@zavod.store";
                mail("dbqqbq@gmail.com", "Testing", $message, $headers);

                echo 'NO USER!';
            }
        }
    } else {
        header('Location: /');
    }