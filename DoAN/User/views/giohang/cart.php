<!DOCTYPE html>
<html lang="en">

<head>
<?php include "views/layouts/headerpage.php" ?>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
    <?php include "views/layouts/menupage.php" ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(views/img/bg-img/11111.jpg);">
        <div class="bradcumbContent">
            <p></p>
            <h3>Giỏ hàng</h3>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <h1 class="text-center">Giỏ hàng</h1>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            
                        <form class="form form-horizontal"  method = "POST" action = "index.php?controller=cart&action=submit">
                        <?php
                        if(!empty($_SESSION["cart"])){
                        
                        $i=0;
                         foreach($data as $value)
                         {
                             $i++;
                             ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td>
                                <img src="../admin/views/assets/img/<?php echo $value['hinh'] ?> " class="hinhdaidien">
                                </td>
                                <td><?php echo $value['tendianhac'] ?></td>
                                <td class="text-right"><?php echo $_SESSION['cart'][$value['id_dianhac']] ?></td>
                                <td class="text-right"><?php echo chuyentien( $value['gia']) ?></td>
                                <td class="text-right"><?php echo  chuyentien($_SESSION['cart'] [$value['id_dianhac']] *  $value['gia']) ?></td> 
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a href="index.php?controller=cart&action=delete&id=<?php echo $value['id_dianhac'] ?>" id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <?php
                         }
                        }
                         ?>
                          
                        </tbody>
                    </table>

                    <a href="index.php?controller=sanpham" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>&nbsp;Quay lại mua hàng</a>
                        <button type="submit" class="btn btn-primary btn-md"><i
                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</button>
                        </form> 
                            
                        </tbody>

                    </table>

                </div>
                
            
        </div>
        



    <!-- ##### Events Area End ##### -->

    <!-- ##### Newsletter & Testimonials Area Start ##### -->
    

                <!-- Testimonials Area -->
               

            </div>
        </div>
        
    </section>
    
    <!-- ##### Newsletter & Testimonials Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
  
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include "views/layouts/footerpage.php"; ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
</body>

</html>