<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>YourTrader</title>
        
        <link rel="icon" type="image/png" href="img/logo1.png" sizes="30x150">	
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link href="css/style.css" rel="stylesheet">
        <style>


            
.latest-area.section-padding.blog-page {
    padding: 100px 0;
}

.blog-page .single-latest-text {
    height: auto;
}

.single-latest-text > h3 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
}

.single-latest-text p {
    font-size: 14px;
    line-height: 26px;
    margin-top: 10px;
}

.single-latest-item {
    overflow: hidden;
    margin-bottom: 50px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

    .single-latest-item:hover {
        box-shadow: 2px 5px 25px rgba(34, 30, 31, 0.25);
    }

    .single-latest-item.active {
        box-shadow: 2px 5px 25px rgba(34, 30, 31, 0.25);
    }

.single-latest-image img {
    width: 51%;
}

.single-latest-text > h3 a {
    color: #000000;
}

    .single-latest-text > h3 a:hover {
        color: #FFAE27;
    }

.single-latest-image a {
    display: block;
}

.single-latest-text {
    background: #f6f6f6 none repeat scroll 0 0;
    overflow: hidden;
    padding: 25px 35px 27px 25px;
    height: 400px;
}

.single-latest-item .single-item-comment-view span {
    margin-right: 13px;
}

.single-latest-item .single-item-comment-view {
    display: block;
    margin-bottom: 2px;
}

.single-latest-item .button-default {
    font-size: 14px;
    margin-top: 7px;
    padding: 10px 20px;
    font-weight: 500;
    border-radius: 50px;
}

.single-latest-item:hover .button-default {
    background: #FFAE27;
    color: #fff;
}
/*----------------------------------------*/

/*  8. Online Product Area
/*----------------------------------------*/

.single-product {
    margin-top: 5px;
    border: 1px solid #ddd;
}

.product-slider-active {
    width: 100%;
}

.single-product:hover {
    box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.2);
}

.product-img {
    position: relative;
    overflow: hidden;
}

.onsale {
    background: #000000;
    box-shadow: none;
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    height: 100px;
    left: auto;
    line-height: 162px;
    min-height: auto;
    min-width: auto;
    position: absolute;
    right: -50px;
    text-align: center;
    text-shadow: none;
    text-transform: none;
    top: -50px;
    width: 100px;
    z-index: 2;
    border-radius: 0;
    -webkit-transform: rotate(45deg) translateZ(0) scale(1.0, 1.0);
    transform: rotate(45deg) translateZ(0) scale(1.0, 1.0);
    -webkit-font-smoothing: subpixel-antialiased;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.product-action > ul > li {
    display: inline-block;
    list-style: none;
    margin: 0 5px 0 0;
    vertical-align: middle;
}

.product-content {
    padding: 20px 15px 25px 15px;
    text-align: center;
}

    .product-content > h2 > a {
        color: #000;
        display: block;
        font-size: 15px;
        font-weight: 500;
        line-height: 1.35;
    }

        .product-content > h2 > a:hover {
            color: #FFAE27;
        }

.product-price {
    position: relative;
}

.price-box {
    color: #555;
    font-size: 14px;
    height: 30px;
    line-height: 30px;
    width: 100%;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.price {
    text-decoration: line-through;
    color: #999;
    font-size: 14px;
    padding-right: 5px;
}

.single-product:hover .price-box {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
}

.add-to-cart {
    left: 0;
    position: absolute;
    text-align: center;
    top: 0;
    width: 100%;
    z-index: 9;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    visibility: hidden;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.single-product:hover .add-to-cart {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    visibility: visible;
}

.add-to-cart a {
    background: transparent;
    border: none;
    color: #000;
    display: inline-block;
    float: left;
    font-size: 11px;
    font-weight: 500;
    height: 30px;
    letter-spacing: .2em;
    line-height: 30px;
    margin: 0;
    padding: 0 5px;
    text-transform: uppercase;
    width: 100%;
    border-radius: 0;
}

    .add-to-cart a:hover {
        color: #FFAE27;
    }
/*----------------------------------------*/

/*  9. Testimonial Area
/*----------------------------------------*/

.testimonial-area {
    padding: 75px 0;
    background: #f6f6f6 /*url(../img/banner/7.png)*/;
    background-size: cover;
    background-position: center center;
}

.single-testimonial-area {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 70%;
    margin: 0 auto;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    max-width: 775px;
}

    .single-testimonial-area .testimonial-image {
        vertical-align: top;
        border-radius: 100%;
        float: left;
        width: 104px;
        height: 104px;
        border: 2px solid #FFAE27;
        margin-top: 13px;
    }

        .single-testimonial-area .testimonial-image img {
            width: auto;
        }

    .single-testimonial-area .testimonial-content {
        overflow: hidden;
        text-align: left;
        padding-left: 98px;
        position: relative;
    }

        .single-testimonial-area .testimonial-content:before {
            content: "â€œ";
            font-size: 100px;
            color: #363636;
            position: absolute;
            left: 10px;
            top: -4px;
            font-weight: 700;
            font-style: italic;
            line-height: 1;
        }

.testimonial-content > p.author-desc {
    margin: auto;
    line-height: 28px;
    padding: 15px 0;
    color: #424242;
    font-size: 14px;
}

.testimonial-content > p.testimonial-author {
    font-size: 14px;
    text-transform: uppercase;
    color: #333;
    margin: 7px 0 0 0;
}
/*testimonial Style 2 CSS*/

.single-testimonial.testimonial-style-2 {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    position: relative;
    box-shadow: 0px 2px 5px rgba(34, 30, 31, 0.25);
    margin: 25px 10px;
}

    .single-testimonial.testimonial-style-2 .des-testimonial {
        padding: 30px 40px 0 40px;
        font-size: 14px;
        line-height: 26px;
        position: relative;
    }

        .single-testimonial.testimonial-style-2 .des-testimonial:before {
            content: "â€œ";
            position: absolute;
            top: 35px;
            left: 20px;
            font-size: 70px;
        }

    .single-testimonial.testimonial-style-2 .author-img {
        float: right;
        width: 80px;
        position: relative;
        top: -45px;
        border: 5px solid #f5f5f5;
        border-radius: 100%;
        z-index: 9;
    }

    .single-testimonial.testimonial-style-2 .testimonial-author {
        background: #f5f5f5f5;
        padding: 20px 42px;
        padding-bottom: 30px;
    }

    .single-testimonial.testimonial-style-2 .author-content {
        overflow: hidden;
    }

        .single-testimonial.testimonial-style-2 .author-content p {
            margin-bottom: 0;
        }

    .single-testimonial.testimonial-style-2 .author-img img {
        width: 100%;
        border-radius: 50%;
    }
/*----------------------------------------*/

/*  10. Event Area
/*----------------------------------------*/

.single-event-image > a {
    display: block;
    position: relative;
}

.single-event-image > span {
    background: #000000 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 96px;
    left: 0;
    position: absolute;
    width: 96px;
}

.single-event-image a > span {
    background: #000000 none repeat scroll 0 0;
    bottom: -24px;
    color: #ffffff;
    font-size: 24px;
    height: 50px;
    left: 0;
    line-height: 18px;
    padding-top: 16px;
    position: absolute;
    width: 170px;
    right: 0;
    text-align: center;
    margin: 0 auto;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    border-radius: 50px;
}

.single-event-text > h3 a,
.single-event-text > h3 {
    color: #4c4c4c;
}

    .single-event-text > h3 a:hover,
    .single-event-text > h3 a:hover {
        color: #F4A012;
    }

.single-event-text > h3 {
    margin-bottom: 15px;
    font-size: 24px;
    font-weight: 700;
    line-height: 1;
}

.single-event-text p {
    font-size: 14px;
    line-height: 26px;
    margin-bottom: 0;
    font-weight: 400;
}

.single-event-text {
    background: #f6f6f6 none repeat scroll 0 0;
    padding: 50px 34px 35px;
    text-align: center;
}

.single-event-item .single-item-comment-view {
    margin-bottom: 12px;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    margin-top: 10px;
    display: block;
    padding: 5px 0;
}

    .single-event-item .single-item-comment-view span {
        margin-right: 12px;
    }

        .single-event-item .single-item-comment-view span:last-child {
            margin-right: 0;
        }

.single-event-item .button-default {
    margin-top: 16px;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 50px;
}

.single-event-item:hover .button-default {
    background: #FFAE27;
    color: #fff;
}

.single-event-item {
    box-shadow: 0 0 8px rgba(34, 30, 31, 0.3);
}
/*Event Style 2 CSS*/

.event-style-2 .single-event-image a > span {
    background: #000000 none repeat scroll 0 0;
    top: 130px;
    color: #ffffff;
    font-size: 24px;
    left: 34px;
    right: auto;
    line-height: 18px;
    position: absolute;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    border-radius: 50px 0 0 50px;
    text-align: center;
    padding: 15px 20px;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    -webkit-transform-origin: left top;
    transform-origin: left top;
    width: 130px;
}

.event-style-2 .single-event-text {
    text-align: left;
}
/*----------------------------------------*/

/*  11. Newsletter Area
/*----------------------------------------*/

.newsletter-area {
    background: #000000 none repeat scroll 0 0;
    color: #ffffff;
    position: relative;
    border-bottom: 1px solid #4B5B7D;
    padding-top: 45px;
    padding-bottom: 40px;
}

    .newsletter-area:before {
        height: 148px;
        left: 0;
        right: auto;
        top: -20px;
        width: 44%;
    }

    .newsletter-area:after {
        border-width: 74.5px 40px;
        left: 44%;
        right: auto;
        top: -20px;
    }

.newsletter-content h2,
.newsletter-content h3 {
    font-weight: 700;
    font-size: 30px;
    color: #fff;
}

.subscribe-form input {
    color: #4c4c4c;
    height: 100%;
    padding-left: 15px;
    width: 100%;
    border: 0;
    background-color: #ffff;
}
            body{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
 
}

.contact-info{
  position: fixed;
  top: 72%;
  z-index: 99999;
  left: 0;
}
.option{
  cursor: pointer;
  position: relative;
}
.option i{
  display: block;
  width: 60px;
  text-align: center;
  height: 60px;
  line-height: 60px;
  background: #fdbe33;
  color: #b9b9b9;
  font-size: 20px;
  transition: 0.6s;
}
.option:hover i{
  color: #121518;
}
.text{
  position: absolute;
  height: 60px;
  width: 200px;
  background:#121518;
  top: 0;
  z-index: -1;
  left: -140px;
  color: #fff;
  line-height: 60px;
  text-align: center;
  transition: 0.6s;
}

.option:hover .text{
  left: 60px;
}



.footer123{
	width: 100%;
	height: 60px;
	line-height: 60px;
	background: #242539;
	position: fixed;
	bottom: 0;
	left: 0;
    z-index: 1;
}

.footer123 p{
	font-weight: 700;
	text-align: center;
	text-transform: uppercase;
	font-size: 20px;
	color: #fff;
}




*{
                        margin: 0;
                        padding: 0;
                        font-family: "montserrat",sans-serif;
                        box-sizing: border-box;
                      }
                      
                      .services-section{
                        background-image: url(/img/bg.jpg);
                        background-size: cover;
                        padding: 60px 0;
                      }
                      .inner-width{
                        width: 100%;
                        max-width: 1200px;
                        margin: auto;
                        padding: 0 20px;
                        overflow: hidden;
                      }
                      .section-title{
                        text-align: center;
                        color: #ddd;
                        text-transform: uppercase;
                        font-size: 30px;
                      }
                      .border{
                        width: 160px;
                        height: 2px;
                        background: #fdbe33;
                        margin: 40px auto;
                      }
                      .services-container{
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                      }
                      
                      .service-box{
                        max-width: 33.33%;
                        padding: 10px;
                        text-align: center;
                        color: #ddd;
                        cursor: pointer;
                      }
                      
                      .service-icon{
                        display: inline-block;
                        width: 70px;
                        height: 70px;
                        border: 3px solid #fdbe33;
                        color: #fdbe33;
                        transform: rotate(45deg);
                        margin-bottom: 30px;
                        margin-top: 16px;
                        transition: 0.3s linear;
                      }
                      .service-icon i{
                        line-height: 70px;
                        transform: rotate(-45deg);
                        font-size: 26px;
                      }
                      .service-box:hover .service-icon{
                        background: #fdbe33;
                        color: #ddd;
                      }
                      .service-title{
                        font-size: 18px;
                        text-transform: uppercase;
                        margin-bottom: 10px;
                      }
                      .service-desc{
                        font-size: 14px;
                      }
                      
                      @media screen and (max-width:960px) {
                        .service-box{
                          max-width: 45%;
                        }
                      }
                      
                      @media screen and (max-width:768px) {
                        .service-box{
                          max-width: 50%;
                        }
                      }
                      
                      @media screen and (max-width:480px) {
                        .service-box{
                          max-width: 100%;
                        }
                      }
                      


.cources{
            background-color: #203b67;
            height:400px;
            border-radius: 50px;
            padding-bottom: -250px;
            
            background-size: 100% 100%;
            padding-top:20px;

            }
            .cources:hover {
    color: #030f27;
    background: #fdbe33;
    border-color: #fdbe33;
 
}

            


.down:hover {
    color: #030f27;
    background: #fdbe33;
    border-color: #fdbe33;
}




            .down{
               
                border-radius: 50px;
                height:270px;
                background-color:#203b67;
                background-size: 100% 100%;
                padding-top:37px;
            }


            .dropbtn {
              background-color: #04AA6D;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
            }
            
        
         
            
            .dropdown-content a {
              color: black;
            
              text-decoration: none;
              display: block;
            }
            

           
            
            .dropdown:hover .dropdown-content {display: block;}
.dropbtn {
              background-color: #04AA6D;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
            }
            
   
         
            
            .dropdown-content a {
              color: black;
            
              text-decoration: none;
              display: block;
            }
            

           
            
            .dropdown:hover .dropdown-content {display: block;}





            .button {
              background-color: #b72a30;
              border: none;
              color: white;
              padding: 10px 20px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
              height:40px;
              width:150px;
              border-radius: 5px;
              box-shadow: black;;
          
            }


            .button:hover {
          
             background: white;
}

           .m123{
               background-image: url("img/ba.png");
               background-size: cover;
               

           }

    
            
        }



        


            </style>


        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.php">
                                <h1 style="margin-top:-5px;"> <img src="img/12345.png" alt="Image" height="120px";width="120px;"><span style="color:#030f27;font-size:25px;">OUR</span><span style="color:#fdbe33;font-size:25px;">TRADER</span> </h1>
                              
                                   
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                       <!--  <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                      <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Fri, 8:00 A.M - 9:00 P.M</p>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+91 9716259862</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>yourtrader.info@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

           
            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="index.php" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                               


                                <div class="dropdown">
                                    <a href="classroomcourses.php" class="nav-link dropdown-toggle active m" >CLASSROOM COURSES</a>
                                    <div class="dropdown-content">
                                        <div class="footer wow fadeIn" style="height:530px;width:1150px;margin-left: -50px;margin-top: 24px;" >
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>JOB ORIENTED COURSES
                                                            </h2>
                                                            <a href="ADSM.php">ADVANCE DIPLOMA IN STOCK MARKET(ADSM)</a>
                                                            <a href="DISM.php">DIPLOMA IN STOCK MARKET(DISM)&nbsp;&nbsp;&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            <a href="CCSM.php">CERTIFICATE COURSES IN STOCK MARKET
                                                            </a>
                                                            <a href="DMM.php">DERIVATIVE MARKET DEALER MODULE&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span>
                                                            </a>
                                                            <a href="CMM.php">CAPITAL MARKET MODULE
                                </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>TRADER & INVESTOR COURSES
                                
                                                            </h2>
                                                            <a href="AST.php">ADVANCE SMART TRADER<br><span style = "background-color: red; font-size:9px;color: aliceblue;">Top selling</span>
                                                            </a>
                                                            <a href="AMM.php">ADVANCE  MARKET MAKER<br><span style = "background-color: red; font-size:9px;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            <a href="IBP.php">INTERMEDIATE BEGINNER PROGRAM
                                                            </a>
                                                            <a href="TA.php">ADVANCE TECHNICAL ANALYST&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span>
                                                            </a>
                                                            <a href="ADA.php">ADVANCE DERIVATIVE ANALYST&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>NISM/NCFM COURSES
                                                              
                                                            </h2>
                                                            <a href="CMM.php">CAPITAL MARKET MODULE
                                                            </a>
                                                            <a href="DMM.php">DERIVATIVE MARKET MODULE&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                
                                                            </a>
                                                            <a href="COMM.php">COMMODITY MARKET MODULE
                                                            </a>
                                                            <a href="CUMM.php">CURRENCY MARKET MODULE
                                                            </a>
                                                            <a href="OS.php">OPTION STRATEGY
                                                            </a>
                                
                                                            <a href="TA.php">TECHNICAL ANALYST&nbsp;&nbsp;<br><span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                
                                                            </a>
                                                            <a href="FA.php">FUNDAMENTAL ANALYST&nbsp;&nbsp;<br><span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                
                                                            <a href="RA.php">RESEARCH ANALYST MODULE
                                                            </a>
                                                            <a href="ID.php">INVESTMENT ADVISOR X-A
                                
                                                            </a>
                                                            <a href="MFDM.php">MUTUAL FUND DISTRIBUTOR MODULE 5A
                                                            </a>
                                                           
                                                           
                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>MENTORSHIP PROGRAME
                                                            </h2>
                                                            <a href="PRA.php">PROFESSIONAL RESEARCH ANALYST(PRA)&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            <a href="ISTS.php">INTRADAY SWING TRADING SYSTEM(ISTS)
                                                            </a>
                                                            <a href="ETS.php">EQUITY TRADING SYSTEM(ETS)
                                                            </a>
                                                            <a href="SNB.php">SCALPING(NIFTY/BANKNIFTY)&nbsp;&nbsp;<br><span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="container copyright">
                                                <div class="row">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

<!-- online -->






<div class="dropdown">
                                    <a href="online.php" class="nav-link dropdown-toggle active m" >ONLINE COURSES</a>
                                    <div class="dropdown-content">
                                        <div class="footer wow fadeIn" style="height:530px;width:1150px;margin-left: -230px;margin-top: 24px;" >
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>JOB ORIENTED COURSES
                                                            </h2>
                                                            <a href="ADSM.php">ADVANCE DIPLOMA IN STOCK MARKET(ADSM)</a>
                                                            <a href="DISM.php">DIPLOMA IN STOCK MARKET(DISM)&nbsp;&nbsp;&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            <a href="CCSM.php">CERTIFICATE COURSES IN STOCK MARKET
                                                            </a>
                                                            <a href="DMM.php">DERIVATIVE MARKET DEALER MODULE&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span>
                                                            </a>
                                                            <a href="CMM.php">CAPITAL MARKET MODULE
                                </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>TRADER & INVESTOR COURSES
                                
                                                            </h2>
                                                            <a href="AST.php">ADVANCE SMART TRADER<br><span style = "background-color: red; font-size:9px;color: aliceblue;">Top selling</span>
                                                            </a>
                                                            <a href="AMM.php">ADVANCE  MARKET MAKER<br><span style = "background-color: red; font-size:9px;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            <a href="IBP.php">INTERMEDIATE BEGINNER PROGRAM
                                                            </a>
                                                            <a href="TA.php">ADVANCE TECHNICAL ANALYST&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span>
                                                            </a>
                                                            <a href="ADA.php">ADVANCE DERIVATIVE ANALYST&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>NISM/NCFM COURSES
                                                              
                                                            </h2>
                                                            <a href="CMM.php">CAPITAL MARKET MODULE
                                                            </a>
                                                            <a href="DMM.php">DERIVATIVE MARKET MODULE&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                
                                                            </a>
                                                            <a href="COMM.php">COMMODITY MARKET MODULE
                                                            </a>
                                                            <a href="CUMM.php">CURRENCY MARKET MODULE
                                                            </a>
                                                            <a href="OS.php">OPTION STRATEGY
                                                            </a>
                                
                                                            <a href="TA.php">TECHNICAL ANALYST&nbsp;&nbsp;<br><span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                
                                                            </a>
                                                            <a href="FA.php">FUNDAMENTAL ANALYST&nbsp;&nbsp;<br><span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                
                                                            <a href="RA.php">RESEARCH ANALYST MODULE
                                                            </a>
                                                            <a href="ID.php">INVESTMENT ADVISOR X-A
                                
                                                            </a>
                                                            <a href="MFDM.php">MUTUAL FUND DISTRIBUTOR MODULE 5A
                                                            </a>
                                                           
                                                           
                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <div class="footer-link">
                                                            <h2>MENTORSHIP PROGRAME
                                                            </h2>
                                                            <a href="PRA.php">PROFESSIONAL RESEARCH ANALYST(PRA)&nbsp;&nbsp;<span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            <a href="ISTS.php">INTRADAY SWING TRADING SYSTEM(ISTS)
                                                            </a>
                                                            <a href="ETS.php">EQUITY TRADING SYSTEM(ETS)
                                                            </a>
                                                            <a href="SNB.php">SCALPING(NIFTY/BANKNIFTY)&nbsp;&nbsp;<br><span style = " font-size:9px;background-color: red;color: aliceblue;">Top selling</span> 
                                                            </a>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="container copyright">
                                                <div class="row">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

<!-- online -->

                                <a href="classroomcourses.php" class="nav-item nav-link ms">CLASSROOM COURSES</a> 
                                <a href="online.php" class="nav-item nav-link ms">ONLINE COURSES</a> 
                                <a href="portfolio.php" class="nav-item nav-link">PORTFOLIO MANAGEMENT</a>
                                <a href="events.php" class="nav-item nav-link">EVENTS</a>
                                <a href="gallery.php" class="nav-item nav-link">GALLERY</a>
                                <a href="contact.php" class="nav-item nav-link">CONTACT</a>
                          
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="https://5minwebsite.angelbroking.com/Diykyc/SubbrokerLead?SbTag=U0xMTQ==&BType=T0xE&a=0" target="_blank">OPEN DEMAT ACCOUNT</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->



   










    </head>




