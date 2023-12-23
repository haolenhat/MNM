


 <!DOCTYPE html>
<html lang="en">
<head>
<?php include "views/layouts/headerpage.php" ?>
</head>
<body>
    

<div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="header-area">
        <!-- Navbar Area -->
        <?php include "views/layouts/menupage.php" ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(views/img/bg-img/11111.jpg);">
        <div class="bradcumbContent">
            <p></p>
            <h2>Đăng Ký tài khoản</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Đăng Ký</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="index.php?controller=dangky&action=xuly" method="post" >
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Tên người dùng</label>
                                    <input type="text" class="form-control" name="tenkh"  placeholder="Tên người dùng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập Email</label>
                                    <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" placeholder="Enter E-mail">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác. </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nhập mật khẩu</label>
                                    <input type="password" class="form-control" name="matkhau"   placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Địa chỉ</label>
                                    <input type="text" class="form-control" name='diachi'  placeholder="Địa chỉ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số điện thoại</label>
                                    <input type="tel" class="form-control" name='sodienthoai'  placeholder="số điện thoại">
                                </div>

                                <button type="submit" class="btn oneMusic-btn mt-30"  value="Đăng Ký">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "views/layouts/footerpage.php"; ?>
 