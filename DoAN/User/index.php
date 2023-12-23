
<?php 
include './config.php';
include './utiltien.php';
function loadClass($className)
{
    include "./models/$className.php";
}
spl_autoload_register('loadClass');
?>
<?php (!empty($error)) ?$error : "" ?>

<link rel="icon" href="views/img/bg-img/11111.jpg">


    <div id="content">
    <?php  
    $c=isset($_GET['controller'])?$_GET['controller']:'nhac';
    if ($c == 'nhac')
    {
        include './controllers/nhac.php';
    }

    if ($c == 'cart')
    {
        include './controllers/cart.php';
    }
    if ($c == 'album')
    {
        include './controllers/album.php';
    }
    if ($c == 'viet')
    {
       include './controllers/viet.php';
    }
    if ($c == 'nhat')
    {
       include './controllers/nhat.php';
    }
    if ($c == 'sanpham')
    {
       include './controllers/sanpham.php';
    }

    if ($c == 'map')
    {
       include './controllers/map.php';
    }

    if ($c == 'thongtin')
    {
       include './controllers/xemthongtin.php';
    }

    if ($c == 'dangnhap')
    {
       include './controllers/dangnhap.php';
    }


    if ($c == 'dangky')
    {
       include './controllers/dangky.php';
    }

    if ($c == 'giohang')
    {
       include './controllers/cart.php';
    }


    ?>
  <script src="./js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="./js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="./js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="./js/active.js"></script>
    <script src="./js/xuly.js"></script>







    
