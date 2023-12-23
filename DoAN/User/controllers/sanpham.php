
<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$sanpham = new sanphammodel();
$danhmuc= new danhmucmodel();
if ($action=='index')
{
    $data =$sanpham->all();
    $datadm=$danhmuc->theloai();
    include './views/dianhac/event.php';
}

if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $datadm=$danhmuc->theloai();
    $data =$sanpham->search($kw);
    
    include './views/dianhac/event.php';
}

if($action=='sua')
{   
    $id_dianhac = isset($_GET['id'])?$_GET['id']:'';
    $data =$sanpham->hiensua($id_dianhac);
    include './views/dianhac/thongtin1.php';
}
if($action=='hientheloai')
{
    $id_theloai = isset($_GET['id'])?$_GET['id']:'';
    $data =$sanpham->hientheloai($id_theloai);
    $datadm=$danhmuc->theloai();
    include './views/dianhac/event.php';
}
?>




