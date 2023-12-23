<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$dangnhap = new dangnhapmodel();
if ($action=='index')
{
    include './views/dangnhap/dangnhap.php';
}
if($action=='dangnhap')
{ 
    if(!isset($_SESSION)){
    session_start();
    $email=$_POST['email1'];
    $matkhau=md5($_POST['matkhau']);
    $data=$dangnhap->dangnhap($email,$matkhau);
    if($data>0){
        $_SESSION['email1']=$email;
        header('location: ./index.php?controller=sanphamcontroller&action=index');
    }else{
        header('location: ./index.php?controller=dangnhapcontroller&action=index');
    }

}
}

if($action=="logout")
   {
    session_start();
    if(isset($_SESSION["email1"])){
    unset($_SESSION);
    session_destroy();
    header('location: ./index.php?controller=dangnhapcontroller&action=index');
  }
}
