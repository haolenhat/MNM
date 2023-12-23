<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$dangnhap = new dangnhapmodel();

if ($action=='index')
{
    include 'views/acc/login.php';
}

if($action=='dangnhap')
{ 
    if(!isset($_SESSION)){
    session_start();
    $email=$_POST['email'];
    $matkhau=md5($_POST['matkhau']);
    $data=$dangnhap->dangnhap($email,$matkhau);
    if($data>0){
        $_SESSION['email'] = $email;
        header('location: ./index.php?controller=nhac');
    }else{
        header('location: ./index.php?controller=dangnhap');
    }
}
}

if ($action=='logout')
{
	if(!isset($_SESSION)){
        session_start();
	session_destroy();
    header('location:index.php?controller=nhac');
}

}


