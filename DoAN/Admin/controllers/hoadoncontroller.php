<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$hoadon = new hoadonmodel();
if ($action=='index')
{
    $data=$hoadon->all();
    include './views/hoadon/hoadon.php';
}
if($action=='chitiet')
{   
    $id_hd= isset($_GET['id'])?$_GET['id']:'';
    $data =$hoadon->chitiet($id_hd);
    $data1=$hoadon->chitiet1($id_hd);
    include './views/hoadon/chitiet.php';
}

