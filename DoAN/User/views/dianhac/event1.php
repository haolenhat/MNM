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
     
     
     



    
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->


 



    <!-- ##### Header Area Start ##### -->
    

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(views/img/bg-img/11111.jpg);">
        <div class="bradcumbContent">
            <p>Sưu tầm</p>
            <h3>Những Đĩa nhạc kỉ niệm</h3>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
 
    <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                 
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                       
                        <div class="row">
                        <?php
                         foreach($data as $r)
                         {
                             ?>
                         
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="#"><img src="../admin/admin/views/assets/img/<?php echo $r['hinh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $r['tendianhac'] ?></div>
                                 <h4 class="price"><?php echo $r['gia'] ?>.VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           
                           <?php
                         }
                         ?>
                           
                        </div>
                     </li>
                     <li>
                        
                     </li>
                  </ul>
               </div>
               
              
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="footer">
            
         </div>
      </div>

    <!-- ##### Events Area End ##### -->

    <!-- ##### Newsletter & Testimonials Area Start ##### -->
    <section class="events-area section-padding-100">
        <div class="container">
            <div class="row">


                <!-- Testimonials Area -->
                <div class="col-12 col-lg-12">
                    <div class="testimonials-area mb-100 bg-img bg-overlay" style="background-image: url(views/img/bg-img/thumb-1920-829699.png);">
                        <div class="section-heading white text-left mb-50">
                            <p></p>
                            <h2><center>Giới thiệu đĩa nhạc</center></h2>
                        </div>
                        <!-- Testimonial Slide -->
                        <div class="testimonials-slide owl-carousel">
                            <!-- Single Slide -->
                            <div class="single-slide">
                                <p>Những đĩa nhạc ở đây giúp ta sưu tầm lại những đĩa nhạc ngày xưa và có thể giúp ta hoài niệm.Ta có thể sưu tập để ôn lại những kĩ niệm lúc xưa và để xem lại </p>
                                <div class="testimonial-info d-flex align-items-center">
                                    
                                   
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide">
                                <p>Những đĩa nhạc ở đây luôn sẵn sàng để bạn có thể xem và lựa chọn</p>
                                <div class="testimonial-info d-flex align-items-center">
                                   
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
    <?php include "views/layouts/footerpage.php"; ?>
 