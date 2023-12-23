<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$dangnhap = new dangnhapmodel();
if ($action=='index')
{
    include 'views/acc/register.php';
}

if($action=='dangky'){
    $tenkh = $_POST['tenkh'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $arr=[$email,$matkhau, $tenkh, $diachi, $sodienthoai];
    $data=$dangnhap->insert($email,$matkhau, $tenkh, $diachi, $sodienthoai);
    header('location: ./index.php?controller=dangnhap');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if($action=='xuly'){
    $tenkh = $_POST['tenkh'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $arr=[$email,$matkhau, $tenkh, $diachi, $sodienthoai];
    $data=$dangnhap->insert($email,$matkhau, $tenkh, $diachi, $sodienthoai);
    header('location: ./index.php?controller=dangnhap');
    


    require('mail/PHPMailer/Exception.php');
    require('mail/PHPMailer/SMTP.php');
    require('mail/PHPMailer/PHPMailer.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                       //Enable verbose debug output
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dangkhoalop9a6@gmail.com';                     //SMTP username
    $mail->Password   = 'nbcbyqxeroirkkwl';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dangkhoalop9a6@gmail.com', 'nhacknight');
    $mail->addAddress($email, $tenkh);     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Đăng Ký tài khoản thành công';
    $mail->Body    = '<b>Username: </b>'.$email.'<br><b>Password: </b>'.$_POST['matkhau'];
    $mail->AltBody = '<b>Username: </b>'.$email.'<br><b>Password: </b>'.$_POST['matkhau'];

    $mail->send();
    //echo 'Gửi email thành công';
} catch (Exception $e) {
    echo "Không gửi được email. email lỗi: {$mail->ErrorInfo}";
}

    $message = "Đăng ký tài khoản thành công.";
    echo "<script type='text/javascript'>alert('$message')";
            exit;   

}


?>