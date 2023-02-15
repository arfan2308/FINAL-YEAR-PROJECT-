<?php
 require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM signup WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>VIRTUAL DARZEE</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/logo q.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <header>
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo q.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                               

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="newcart.html">Shop</a></li>

                                            <li class="nav-item active"><a class="nav-link" href="customize.html">Customize</a></li>

                                            
                                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="login.html"> Login</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +34 657 3556 778</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Free Shipping &amp; Returns</h5>
                
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for all dresses</h5>
                
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Doorstep Measurement</h5>
              
            </div>
        </section>
        <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">VIRTUAL DARZEE</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">MEN COLLECTION</h2>
                                    <a href="newcart.html" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-4.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">VIRTUAL DARZEE</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">WOMEN Collection</h2>
                                    <a href="newcart.html" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">VIRTUAL DARZEE</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">FOR MORE DETAILS</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="catagory-content">
                    
                    <h2>Customize your own Designs</h2>
                    <a href="customize.html" class="btn karl-btn">Customize</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                <div class="catagory-content">
                    
                    <h2>Our Collection</h2>
                    <a href="newcart.html" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->

        <!-- ****** Quick View1 Modal Area Start ****** -->
        <div class="modal fade" id="quickview1" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="img/product-img/product-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">Men's Cotton Casual Slim Fit Checkered Shirt</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">₹495 <span>₹695</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                        </div>
                                        <a href="newcart.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->
        
        <!-- ****** Quick View2 Modal Area Start ****** -->
        <div class="modal fade" id="quickview2" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="img/product-img/product-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">PATLANI Women Long Gown, Net with Ultra Satin Inner Ethnic Flared Gown for Girl's/Women's Semi Stitched Gown </h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">₹1199 <span>₹1699</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                           
                                        </div>
                                        <a href="newcart.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Quick View2 Modal Area End ****** -->

                <!-- ****** Quick View3 Modal Area Start ****** -->
                <div class="modal fade" id="quickview3" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
        
                            <div class="modal-body">
                                <div class="quickview_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="quickview_pro_img">
                                                    <img src="img/product-img/product-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="quickview_pro_des">
                                                    <h4 class="title">Sky Blue Printed Kurta For Men </h4>
                                                    <div class="top_seller_product_rating mb-15">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <h5 class="price">₹699 <span>₹999</span></h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                                   
                                                </div>
                                                <a href="newcart.html">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ****** Quick View3 Modal Area End ****** -->

                
                <!-- ****** Quick View4 Modal Area Start ****** -->
                <div class="modal fade" id="quickview4" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
        
                            <div class="modal-body">
                                <div class="quickview_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="quickview_pro_img">
                                                    <img src="img/product-img/product-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="quickview_pro_des">
                                                    <h4 class="title">Half White Printed Kurta For Women </h4>
                                                    <div class="top_seller_product_rating mb-15">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <h5 class="price">₹799 <span>₹1299</span></h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                                
                                                </div>
                                                <a href="newcart.html">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ****** Quick View4 Modal Area End ****** -->

                                <!-- ****** Quick View5 Modal Area Start ****** -->
                                <div class="modal fade" id="quickview5" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                        
                                            <div class="modal-body">
                                                <div class="quickview_body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-5">
                                                                <div class="quickview_pro_img">
                                                                    <img src="img/product-img/product-5.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-7">
                                                                <div class="quickview_pro_des">
                                                                    <h4 class="title">Tryme Fashion Men's Regular Fit Casual Shirt </h4>
                                                                    <div class="top_seller_product_rating mb-15">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <h5 class="price">₹499 <span>₹699</span></h5>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                                                    <a href="#">View Size Chart</a>
                                                                </div>
                                                                <a href="newcart.html">Shop Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ****** Quick View5 Modal Area End ****** -->
                                                               <!-- ****** Quick View6 Modal Area Start ****** -->
                                                               <div class="modal fade" id="quickview6" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                    
                                                                        <div class="modal-body">
                                                                            <div class="quickview_body">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-lg-5">
                                                                                            <div class="quickview_pro_img">
                                                                                                <img src="img/product-img/product-6.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-lg-7">
                                                                                            <div class="quickview_pro_des">
                                                                                                <h4 class="title">Blouse Pattern</h4>
                                                                                                <div class="top_seller_product_rating mb-15">
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <h5 class="price">₹1199 <span>₹1499</span></h5>
                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                                                                            </div>
                                                                                            <a href="newcart.html"><div class="shop-btn">Shop Now</div></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- ****** Quick View5 Modal Area End ****** -->
 

        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="karl-projects-menu mb-100">
                <div class="text-center portfolio-menu">
                    <button class="btn active" data-filter="*">ALL</button>
                    <button class="btn" data-filter=".men">MEN</button>
                    <button class="btn" data-filter=".women">WOMEN</button>
                    
                </div>
            </div>

            <div class="container">
                <div class="row karl-new-arrivals">

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item men wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-1.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview1"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">₹495</h4>
                            <p>Men's Cotton Casual Slim Fit Checkered Shirt</p>
                            
                        </div>
                    </div>

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.3s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-2.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview2"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">₹1199</h4>
                            <p>Greciilooks Tops for Women Multicolor Summer Tops</p>
                            
                        </div>
                    </div>

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item access men wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-3.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview3"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">₹699</h4>
                            <p>Sky Blue Printed Kurta For Men</p>
                            
                        </div>
                    </div>

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item shoes women wow fadeInUpBig" data-wow-delay="0.5s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-4.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview4"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">₹799</h4>
                            <p>Half White Printed Kurta For Women</p>
                            
                        </div>
                    </div>

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item men wow fadeInUpBig" data-wow-delay="0.6s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-5.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview5"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">₹499</h4>
                            <p>Tryme Fashion Men's Regular Fit Casual Shirt</p>
                            
                        </div>
                    </div>

                    <!-- Single gallery Item -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item kids women wow fadeInUpBig" data-wow-delay="0.7s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-6.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview6"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">₹1199</h4>
                            <p>Blouse pattern </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** New Arrivals Area End ****** -->

        <!-- ****** ABOUT US Start ****** -->
        <a id="about"></a>
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img/bg-img/bg-5.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2>ABOUT US <span class="karl-level">You should know</span></h2>
                            <p>With mind of bringing tailoring sophistication at your doorstep, Designer On Call is India’s first of its kind service, where all your tailoring needs are fulfilled under one roof. </p>
                            <p>For More Details </p>
                            <a href="contact.html" class="btn karl-btn mt-30">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** ABOUT US End ****** -->

        <!-- ****** REVIEWS Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>REVIEW</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Started with skepticism but now convinced of the genuine and professional services. The designer allocated to me, Arfan, was constantly brainstorming with new ideas till I was satisfied and was in sync with me till the very end of the process. Thanks to him and the whole team. </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>NUPUR BELOSE</p>
                                        <span>Client,MUMBAI</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Got a shirt designed from them. Yes they are truly professional and made it perfectly to our expectation. Kriti from virtual darzee dealt with me and was exceptionally good responding to our agile changes.</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-2.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>DANISH KHAN</p>
                                        <span>Client, MUMBAI</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>This Site is very useful as we get the stitching services at home at our own convenience. I thank virtual darzee tea especially saloni, she is very talented and a creative designer.</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-3.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Sakshi Raghuvansi</p>
                                        <span>Client, MUMBAI</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** REVIEWS Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo q.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="file:///C:/Users/Shaikh%20Arfan/Downloads/Virtual%20D/karl-master/index.html" target="_blank">Virtual darzee</a>  </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">About</a></li>
                               
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>

