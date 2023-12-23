


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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(views/img/bg-img/11111.jpg);">
        <div class="bradcumbContent">
            <p></p>
            <h2>Thông tin</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="views/img/bg-img/nobu.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>31</span>
                                <span>Tháng 11</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">Nhạc one sound</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                             
                            </div>
                            <!-- Post Excerpt -->
                            <p>Trang website nhạc này được tạo ra nhầm mục đích nghe nhạc và xem MV.Tạo ra do làm đồ án tránh việc nợ môn</p>
                        </div>
                    </div>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="views/img/bg-img/thongtin2.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>31</span>
                                <span>Tháng 11</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">Nhạc one sound</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                             
                            </div>
                            <!-- Post Excerpt -->
                            <p>Trải nghiệm bài hát và MV chất lượng cao.Có thể tải Mv về để sưu tầm </p>
                        </div>
                    </div>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="views/img/bg-img/thumb-1920-829699.png" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>31</span>
                                <span>Tháng 11</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">Nhạc one sound</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                          
                            </div>
                            <!-- Post Excerpt -->
                            <p>Trang website nhạc này sẽ update những bài nhạc hay để cho mọi người trải nghiệm</p>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="blog-sidebar-area">

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                         
                        </div>

                        <!-- Widget Area -->
                        
                            

                        <!-- Widget Area -->
                        
                            
                             
                        </div>

                        <!-- Widget Area -->
                       

                        <!-- Widget Area -->
                        
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(views/img/bg-img/11111.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p></p>
                        <h2>Gửi Ý kiến</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Gửi <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
    <?php include "views/layouts/footerpage.php"; ?>

