

<!DOCTYPE html>
<html lang="en">

<head>

<?php include  "views/layouts/headerpage.php"  ?>



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
        <!-- Navbar Area -->
<?php include "views/layouts/menupage.php" ?>
    </header>
 
 <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(views/img/bg-img/thumb-1920-829699.png);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Những Đĩa nhạc</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Vượt thời gian <span></span></h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(views/img/bg-img/11111.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">MV free</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Nhạc tình cảm <span></span></h2>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>Mv nhạc</p>
                        <h2>Các MV nhạc</h2>
                    </div>
                </div>
            </div>

            <div class="row">
            <?php
                         foreach($data as $t)
                         {
                             ?>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="album-thumb">
                            <img src="views/img/bg-img/logo600.png" alt="">
                            <!-- Album Price -->
                            <div class="album-price">
                                
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="../admin/views/assets/video/<?php echo $t['video'] ?> " class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5><?php echo $t['tennhac'] ?></h5>
                            </a>
                            <p><?php echo $t['tentacgia'] ?></p>
                        </div>
                    </div>
                  
                            </div>
                <?php
                         }
                         ?>


            </div>


                

            
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms" >
                        <a href="event.php"  class="btn oneMusic-btn">Xem thêm<i class="fa fa-angle-double-right" ></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(views/img/bg-img/thumb-1920-829699.png);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="views/img/bg-img/1568769834281_500.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>Truyền thái y</p>
                            <h2>Ngô Kiến Huy</h2>
                        </div>
                        <p>Truyền Thái Y - Ngô Kiến Huy x Masew x Đinh Hà Uyên Thư</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Truyền thái y  </p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="views/audio/TruyenThaiY-NgoKienHuyMasew-6074881.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** Weeks Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="weeks-top-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>Có gì mới</p>
                            <h2>Sản phẩm Hot</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/Goku.jpg" alt=""   >
                            </div>
                            <div class="content-">
                                <h6 >DAN DAN KOKORO HIKARETEKU </h6>
                                <p>FIELD OF VIEW</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/tumblr_inline_noq2okZ3gQ1qihgge_1280.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>ALONE AGAIN</h6>
                                <p>Yuna Ito</p>
                            </div>
                            
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/maxresdefault.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>SAYONARA I LOVE YOU</h6>
                                <p>Cliff Edge</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/1061332173675372452476431818456362453126714o-1593780823287457624164-crop-1593780866985947628599.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Có chắc yêu là đây</h6>
                                <p>MTP</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/Yeulathathu.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Yêu là tha thu</h6>
                                <p>Only C</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/Digimon.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>BUTTERFLY</h6>
                                <p>Wada Kouji</p>
                            </div>

                            
                        </div>
                        

                    </div>
                </div>

                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>Nhạc nổi bật</p>
                            <h2>Lượt truy cập nhiều</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="views/img/bg-img/love1.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Love is a beautiful pain</h6>
                                    <p>Endless Tears</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="views/audio/Endless Tears feat. 中村舞子 - Love is a beautiful pain『喜歡你真的好痛苦。』【中日動態歌詞Lyrics】.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="views/img/bg-img/Goku.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Dan Dan Kokoro Hikareteku</h6>
                                    <p>FIELD OF VIEW</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="views/audio/Dan Dan Kokoro Hikareteku.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="views/img/bg-img/love2.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Nơi này có anh</h6>
                                    <p>MTP</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="views/audio/Nơi Này Có Anh.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="views/img/bg-img/love3.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Cause I love you</h6>
                                    <p>Noo Phước Thịnh</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="views/audio/Cause I Love You - Noo Phước Thịnh「Official Lyrics Video」.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="views/img/bg-img/love5.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>EXCITE</h6>
                                    <p>Daichi Miura</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="views/audio/EXCITE.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="views/img/bg-img/1453716401732_600.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Trú Mưa</h6>
                                    <p>HKT</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="views/audio/Trú Mưa - HKT.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>Xem có gì mới</p>
                            <h2>Nghệ sĩ</h2>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/mtpicon.jpg" alt="">
                                
                            </div>
                            <div class="content-">
                                <p>MTP</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/love1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Endless Tears</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/Yeulathathuicon.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Only C</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/noo.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Noo Phước Thịnh</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/NUGEyrD.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Daichi Miura</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/Tiểu-Sử-Ngô-Kiến-Huy.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Ngô Kiến Huy</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                            <div class="thumbnail">
                                <img src="views/img/bg-img/Yuna.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Yuna Ito</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(views/img/bg-img/11111.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
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
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Gửi <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "views/layouts/footerpage.php"; ?>
  
 