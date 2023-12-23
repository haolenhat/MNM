
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
            <h2>Đăng Nhập</h2>
        </div>
        
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Chào mừng</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="index.php?controller=dangnhap&action=dangnhap" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập Email</label>
                                    <input type="email"  class="form-control"  aria-describedby="emailHelp" placeholder="Enter E-mail" name="email">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mật khẩu</label>
                                    <input type="password"  class="form-control"  placeholder="Password"  name="matkhau">
                                </div>
                                <button type="submit" value="Đăng Ký"  class="btn oneMusic-btn mt-30"><a href="index.php?controller=dangky"> Đăng Ký </button> <a> 
                                <button type="submit"  value="Đăng nhập" class="btn oneMusic-btn mt-30">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "views/layouts/footerpage.php"; ?>
 