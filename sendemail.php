<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];

    require 'vendor/autoload.php';

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "teddybrian54@gmail.com";
    $mail->Password = "fexlwaaxjnvkebxd";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("niarbyddet@gmail.com");
    $mail->addCC("calvinflo2222@gmail.com");
    $mail->Subject = ("$subject");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        echo "<script>alert ('Email sent successfully');
        window.location.href= 'home.html';</script>";
    }
    else
    {
        $status = "failed";
        echo "<Script>
        alert ('Email not sent');
        window.location.href= 'home.html';
        </Script>";
    }

    exit(
        json_encode(array("status" => $status, "response" => $response))
    );
}

?>