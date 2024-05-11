<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    include_once "config.php";

    function send_mail($to,$subject,$body,$manganh){
        
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = host_email;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = address_email;                     //SMTP username
            $mail->Password   = pass_email;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = port_eamil;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(address_email, name_email);
            $mail->addAddress($to);  

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            if(isset($manganh) && !empty($manganh)){
                foreach ($manganh as $anh) {
                    $mail->AddEmbeddedImage("assets/images/$anh[0].$anh[1]", "$anh[0]");
                }
                $mail->AddEmbeddedImage("logo-sw.png", "logo");
            }
            $mail->send();
            $thongbao_email = 'Message has been sent';
            return $thongbao_email;
        } catch (Exception $e) {
            $thongbao_email = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return $thongbao_email;
        }
    }
?>