
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor\phpmailer\phpmailer\src\Exception.php';
require 'vendor\phpmailer\phpmailer\src\/PHPMailer.php';
require 'vendor\phpmailer\phpmailer\src\/SMTP.php';



if(isset($_POST['submit'])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'khzrkhan0000@gmail.com';
    $mail->Password   = 'plsdplcsddmmhsxv'; 
    $mail->SMTPSecure =  'ssl';         
    $mail->Port       = 465;   
  
    $mail->setFrom('khizarmughal0000@gmail.com');
    $mail->addAddress($_POST["email"]);
    
    $mail->isHTML(true); 
    $mail->Subject =  $_POST["subject"];
    $mail->Body    = $_POST["message"];
    $mail->send();

    echo "
    <script>
    alert('message send');
    document.location.href = 'index.php';
    </script>   
    ";


}
?>