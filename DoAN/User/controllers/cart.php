<?php 
if(!isset($_SESSION))
{
    session_start();               
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$action =isset($_GET['action'])?$_GET['action']:'index';
$sanpham = new sanphammodel();
$hd = new hoadonmodel();
$kh= new dangnhapmodel();
$cthd = new chitiethoadonmodel();

if ($action=='index')
{
    $data =$sanpham->all();
    include './views/dianhac/event.php';
}


if($action=='cart')
{
	$data=$sanpham->sptrongcart();
	include 'views/giohang/cart.php';
}



if(!isset($_SESSION["cart"]))
	{
		$_SESSION["cart"] =array();           
	}
	if(isset($_GET['action']))
	{
		function update_cart($add = false)
		{
			foreach ($_POST['quantity'] as $id => $quantity){
				if($quantity == 0){
					unset($_SESSION['cart'][$id]);
				}else{
				if($add) {
					$_SESSION['cart'][$id] += $quantity;
				}else{
					$_SESSION['cart'][$id] = $quantity;
				}
			}
		}
        }
        switch($_GET['action']){
			case "add":
				$tongtien = 0;
				update_cart(true);
				header('location: index.php?controller=cart&action=cart');

				break;

			case "delete":
				if(isset($_GET['id']))
				{
					unset($_SESSION['cart'][$_GET['id']]);
				}
				header('location: index.php?controller=cart&action=cart');
				break;
			case "submit":
				
				if(isset($_SESSION["email"]))
	{
						$tongtien = 0;
						$data=$sanpham->sptrongcart();
						
						
						foreach($data as $value)
						{
							$tongtien += $value['gia']*$_SESSION['cart'][$value['id_dianhac']]; 
						}
						
						
						$khachhang = $kh->khachhangcoemail($_SESSION["email"]);	
						$email = $_SESSION["email"];			
						$id_hd = "hd".rand(10,999);						
						$tennguoinhan = $khachhang[0]['tenkh'];
						$sodienthoainguoinhan = $khachhang[0]['sodienthoai'];			
						$diachi = $khachhang[0]['diachi'];
							
						$hdkh =$hd->insert($id_hd, $email, $tennguoinhan, $diachi, $sodienthoainguoinhan, $tongtien);
						
						foreach($data as $value)
						{
							$ctdhkh = $cthd->insert($id_hd, $value['id_dianhac'],$_SESSION['cart'][$value['id_dianhac']], $value['gia']);

							
						}

						$stt=0;
						$content ="<table width='500' border = '1'>";
						$content .="<tr><th>STT</th><th>Hình</th><th>Sản Phẩm</th><th>Giá Tiền</th><th>Số Lượng</th><th>Tổng Tiền</th></tr>";
						foreach($data as $value)
						{
							$stt++;
							$content .="<tr><td>".$stt.'</td><td><img src="https://nhacknight.xyz/admin/views/assets/img/'.$value['hinh'].'" style="width:50px;height:50px;"></td><td>'.$value['tendianhac']."</td><td>".chuyentien($value['gia'])."</td><td>".$_SESSION['cart'][$value['id_dianhac']]."</td><td>".chuyentien($value['gia']*$_SESSION['cart'][$value['id_dianhac']])."</td></tr>";
						}
						$content .="</table>";
						unset($_SESSION['cart']);
						$message = "Đặt hàng thành công.";
						echo "<script type='text/javascript'>alert('$message');</script> Nhấn vào đây để <a href='index.php?controller=sanpham'>Tiếp tục mua hàng</a>";
	require('mail/PHPMailer/Exception.php');
	require('mail/PHPMailer/SMTP.php');
	require('mail/PHPMailer/PHPMailer.php');

	$mail = new PHPMailer(true);

try {
    $mail->CharSet = "UTF-8";
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dangkhoalop9a6@gmail.com';                     //SMTP username
    $mail->Password   = 'nbcbyqxeroirkkwl';                                //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dangkhoalop9a6@gmail.com', 'Nhacknight');
    $mail->addAddress($email, $tennguoinhan);     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Đặt hàng thành công';
    $mail->Body    = '<b>Cám ơn khách hàng đã mua sản phẩm ở của chúng tui</b><br><b>Email: </b>'.$email.'<br><b>Mã hóa đơn:</b>'."hd".rand(10,999).'<br><b>Tên người nhận:</b>'.$khachhang[0]['tenkh'].'<br><b>Số điện thoại:</b>'.$khachhang[0]['sodienthoai'].'<br><b>Địa chỉ:</b>'.$khachhang[0]['diachi'].'<br><b>Tiền:</b>'.$tongtien.'<br><b>Xem chi tiết:</b>'.$content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
	} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

	break;

			}
	}else{
		$message = "Bạn chưa đăng nhập. Vui lòng đăng nhập để đặt hàng!";
		echo "<script type='text/javascript'>alert('$message');</script> Nhấn vào đây để <a href='index.php?controller=dangnhap'>đăng nhập</a><br>Chưa có tài khoản Nhấn vào đây để <a href='index.php?controller=dangky'>đăng ký</br>";
		exit;
	}
    
	}
}
?>
