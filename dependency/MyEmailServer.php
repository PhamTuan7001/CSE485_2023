<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MyEmailServer implements EmailServerInterface{
    public function sendEmail($to, $subject, $message)
    {
        $mail = new PHPMailer(true);
        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'tuananhba7001@gmail.com';
            $mail->Password = 'bwiohhmujfhwtybw';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('tuananhba7001@gmail.com','Pham Ba Tuan');
            $mail->addAddress($to,'tuan' );
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            echo'email sent successfully';
        }catch (Exception $e){
            echo 'Message could not be sent, Mailer Error: ' . $mail->ErrorInfo;
        }
        

        }



    }

?>t