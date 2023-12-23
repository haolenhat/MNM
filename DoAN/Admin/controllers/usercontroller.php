<?php
$action=isset($_GET['action'])?$_GET['action']:'index';
$user=new usermodel();
if($action=='index')
{
	$data=$user->all();
	include './views/user/user.php';
}

if ($action=='delete')
{
$email= isset($_GET['id'])?$_GET['id']:'';
    if($email !='')
        {
            $data=$user->delete($email);
            header('location: ./index.php?controller=usercontroller&action=index');
        }
}
if($action=='them'){
    $email=$_POST['email'];
    $tenkh=$_POST['tenkh'];
    $matkhau=md5($_POST['matkhau']);
    $sodienthoai=$_POST['sodienthoai'];
    $diachi=$_POST['diachi'];
    $data=$user->insert($email,$tenkh,$matkhau,$sodienthoai,$diachi);
    header('location: ./index.php?controller=usercontroller&action=index');
}

?>