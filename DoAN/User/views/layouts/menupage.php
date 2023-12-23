<?php
if(!isset($_SESSION)){
session_start();
}
?>
<div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="views/img/core-img/logo.png" alt=""></a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php?controller=nhac">Trang chủ</a></li>
                                    <li><a href="index.php?controller=album">Nhạc</a>
                                    </li>
                                    <li><a href="index.php?controller=sanpham">Sản Phẩm</a>
                                    </li>
                                    <li><a href="index.php?controller=thongtin">Thông Tin</a></li>
                                    <li><a href="index.php?controller=map">Liên hệ</a></li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0" action='index.php'>
                                <input type="hidden" name='controller' value='sanpham'>
                                <input type="hidden" name='action' value='search'>
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" name='kw'>
                                    <Button class="btn btn-outline-success my-2 my-sm-0" type="submit">tìm</Button>
                                     </form>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <?php
                            if (!isset($_SESSION["email"])){
                             echo'<i class="bi bi-user"></i>';
                             echo'  <a href="index.php?controller=dangnhap" id="loginBtn">Login </a>
                             <a>/</a>
                             <a href="index.php?controller=dangky" id="Register">Register</a>  
                                  ';   
                            }else
                            echo'
                                    <a href="#" class="sidebar-link">
                                        <svg class="bi" width="1em" height="1em" fill="currentColor">
                                            <use
                                            xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#person-circle" />
                                        </svg>
                                        <span>'.$_SESSION["email"].'</span>
                                    </a>
                                   
                                        <li class="submenu-item ">
                                            <a href="index.php?controller=dangnhap&action=logout">Đăng xuất</a>
                                        </li>
                                </li>';      
                            ?>
                                    </div>
                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        <a href="index.php?controller=giohang"><span class="icon-shopping-cart" style="color: white"></a>
                                    </div> 
                                </div>
                            </div>


                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>