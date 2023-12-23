<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css1/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css1/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css1/flexslider.css" type="text/css" media="screen"/>
      <link href="css1/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css1/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
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
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(views/img/bg-img/11111.jpg);">
        <div class="bradcumbContent">
            <p>Thông Tin</p>
            <h3>Những Đĩa Nhạc</h3>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
 

   
    <!-- ##### Events Area End ##### -->

    <!-- ##### Newsletter & Testimonials Area Start ##### -->
    <section class="events-area section-padding-100">
        <div class="container">
            <div class="row">


                <!-- Testimonials Area -->
                <div class="clearfix">
            </div>

            <?php 
            foreach($data as $r){
              ?>
            <div class="container_fullwidth">
              <div class="container">
                <div class="row">
                  <div class="col-md-9">
                    <div class="products-details">
                      <div class="preview_image">
                        <div class="preview-small">
                          <img id="zoom_03" src="../admin/views/assets/img/<?php echo $r['hinh'] ?>" data-zoom-image="images/products/Large/products-01.jpg" alt="">
                          
                        </div>

                        
                        </div>
                        <div class="products-description">
                            <h5 class="name">
                            <?php echo $r['tendianhac'] ?>
                            </h5>
                            <p>
                            </p>
                            <p>
                              Tình trạng: 
                              <span class=" light-red">
                               Còn hàng
                              </span>
                            </p>
                            <p>
                            <?php echo $r['mota'] ?>
                            </p>
                            <hr class="border">
                            <div class="price">
                              Giá Đĩa : 
                              <span class="new_price">
                              <?php echo chuyentien( $r['gia']) ?>
                                <sup>
                                  
                                </sup>
                              </span>
                              
                            </div>
                            <form class="form form-horizontal"  method = "POST" action = "index.php?controller=cart&action=add">
                            <hr class="border">
                            <div class="wided">
                            <input type="number" id="quantity" name="quantity[<?php echo $id_dianhac ?>]" class="quantity form-control input-number" value="1" min="1" max="100">

                              <div class="button_group">
                                <button type="submit" class="button" >
                                  Add To Cart
                                </button>
                                </form>
                                <button class="button compare">
                                  <i class="fa fa-exchange">
                                  </i>
                                </button>
                                <button class="button favorite">
                                  <i class="fa fa-heart-o">
                                  </i>
                                </button>
                                <button class="button favorite">
                                  <i class="fa fa-envelope-o">
                                  </i>
                                </button>
                              </div>
                            </div>
                           
                        </div>

                        
                        </div>

            </div>
            <?php
            }
            ?>
        </div>
    </section>

                       
    <!-- ##### Newsletter & Testimonials Area End ##### -->

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
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
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

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
    <?php include "views/layouts/footerpage.php" ?>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <!-- <script src="js/khac/bootstrap.min.js"></script>
    <script src="js/khac/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="js/khac/jquery.easing.1.3.js"></script>
    <script src="js/khac/jquery.elevatezoom.js"></script>
    
    <script src="js/khac/jquery.flexslider.js"></script>
    <script src="js/khac/jquery.sequence-min.js"></script>
    <script src="js/khac/script.min.js"></script>
    <script src="js/khac/jquery-1.10.2.min.js"></script> -->


</body>

</html>