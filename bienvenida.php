<?php
    

    if($_GET["nombre"]=="david"){
        echo ("<h1>Bienvenidooooo!!!!!</h1>");
    }else{
        $mail = new PHPMailer(true);

        try {
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            // Configure PHPMailer
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
        
            // Configure SMTP Server
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'iTresna.TX@gmail.com';
            $mail->Password = 'iTresna1234';
        
            // Configure Email
            $mail->setFrom('iTresna.TX@gmail.com', 'Name');
            $mail->addAddress('davitxu20@gmail.com');
            $mail->Subject = 'PHPMailer SMTP';
            $mail->isHTML(true);
            $mail->Body = 'el nombre es david y la contraseña esta vacia!</strong>';
        
            // send mail
            $mail->Send();
            echo 'Message has been sent using SMTP Server';
        } catch (Exception $e) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

?>