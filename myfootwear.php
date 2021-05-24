<?php
session_start();
$login=$_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Footwear</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="images/favicon.png" rel="icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Header -->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">MyFootwear</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="images/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a class="nav-link" href="#intro">Home <span class="sr-only">(current)</span></a></li>
          
          <li class="menu-has-children"><a href="#portfolio">Category Products</a></li>
    
           <li><a class="nav-link" href="#contact">SHOP NOW! <span class="sr-only">(current)</span></a></li>
           <li><a class="nav-link" href="#footer">About Us <span class="sr-only">(current)</span></a></li>
          <li><a class="nav-link" href="login.html">LOGIN <span class="sr-only">(current)</span></a></li> 
          <li><a class="nav-link" href="regis.html">registration <span class="sr-only">(current)</span></a></li> 
        <form class="form-inline my-2 my-lg-0">
          
        </form>
        <div class="icon mt-2"><h5>
        </h5></div>
         </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="images/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WELCOME</h2>
                 <p>Happy Shopping!</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="images/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WELCOME</h2>
                 <p>Happy Shopping!</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="images/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                 <h2>WELCOME</h2>
                <p>Happy Shopping!</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="images/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WELCOME</h2>
                <p>Happy Shopping!</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="images/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                 <h2>WELCOME</h2>
                <p>Happy Shopping!</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

    <!--==========================
      Category Products Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Category Products</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-sneakers">Sneakers</li>
              <li data-filter=".filter-boots">Boots</li>
              <li data-filter=".filter-slippers">Slippers</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-sneakers wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/sn1.jpg" class="img-fluid" alt="">
                <a href="images/produk/sn1.jpg" data-lightbox="portfolio" data-title="Captain Sneakers" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dsn1.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dsn1.jpg">Captain Sneaker</a></h4>
                <p>IDR 320.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-boots wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/bt3.jpg" class="img-fluid" alt="">
                <a href="images/produk/bt3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Jisoo Boots" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dbt3.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dbt3.jpg">Jisoo Boots</a></h4>
                <p>IDR 265.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sneakers wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/sn2.jpg" class="img-fluid" alt="">
                <a href="images/produk/sn2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Galaxy Sneakers" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dsn2.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dsn2.jpg">Galaxy Sneakers</a></h4>
                <p>IDR 320.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-slippers wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/sl2.jpg" class="img-fluid" alt="">
                <a href="images/produk/sl2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Jinhye Slippers" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dsl2.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dsl2.jpg">Jinhye Slippers</a></h4>
                <p>IDR 280.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-boots wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/bt2.jpg" class="img-fluid" alt="">
                <a href="images/produk/bt2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Kaws Boots" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dbt2.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dbt2.jpg">Kaws Boots</a></h4>
                <p>IDR 255.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sneakers wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/sn3.jpg" class="img-fluid" alt="">
                <a href="images/produk/sn3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Songsong Canvas" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dsn3.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dsn3.jpg">Songsong Canvas</a></h4>
                <p>IDR 255.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-slippers wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/sl1.jpg" class="img-fluid" alt="">
                <a href="images/produk/sl1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Amira Flatshoes" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dsl1.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dsl1.jpg">Amira Flatshoes</a></h4>
                <p>IDR 200.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-slippers wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/sl3.jpg" class="img-fluid" alt="">
                <a href="images/produk/sl3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Yinn Slippers" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dsl3.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dsl3.jpg">Yinn Slippers</a></h4>
                <p>IDR 200.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-boots wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="images/produk/bt1.jpg" class="img-fluid" alt="">
                <a href="images/produk/bt1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Diba Boots" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="images/produk/dbt1.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="images/produk/dbt1.jpg">Diba Boots</a></h4>
                <p>IDR 250.000</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Payment Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Payment Channel</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="images/payment/bca.png" alt="">
          <img src="images/payment/bni.png" alt="">
          <img src="images/payment/mandiri.png" alt="">
          <img src="images/payment/alfamart.png" alt="">
          <img src="images/payment/gopay.png" alt="">
          <img src="images/payment/bca.png" alt="">
          <img src="images/payment/bni.png" alt="">
          <img src="images/payment/mandiri.png" alt="">
          <img src="images/payment/alfamart.png" alt="">
          <img src="images/payment/gopay.png" alt="">
           <img src="images/payment/bri.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Testimonial Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="images/ts1.jpg" class="testimonial-img" alt="">
            <h3>Claara Shilla</h3>
            <h4>Customer</h4>
            <p>
              <img src="images/quote-sign-left.png" class="quote-sign-left" alt="">
              Kualitas barangnya oke, Harga lumayan, Real pict. Saya suka sekalii...
              <img src="images/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/ts2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Customer</h4>
            <p>
              <img src="images/quote-sign-left.png" class="quote-sign-left" alt="">
              Sepatunya keren, Benar-benar high quality, No kaleng-kaleng guys. 
              Kalian wajib punya semua koleksinya.
              <img src="images/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/ts3.jpg" class="testimonial-img" alt="">
            <h3>Louis Figo</h3>
            <h4>Customer</h4>
            <p>
              <img src="images/quote-sign-left.png" class="quote-sign-left" alt="">
              Sepatunya keren sekali, Pengiriman cepat dan gak ada lecet. Sukaaa
              <img src="images/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/ts4.jpg" class="testimonial-img" alt="">
            <h3>Syahzan Kylla</h3>
            <h4>Customer</h4>
            <p>
              <img src="images/quote-sign-left.png" class="quote-sign-left" alt="">
              Sepatunya ori, High quality dan pengirimannya cepat. Nyesel cuma beli 1 T_T  
              <img src="images/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/ts5.jpg" class="testimonial-img" alt="">
            <h3>Delisha Rizka</h3>
            <h4>Customer</h4>
            <p>
              <img src="images/quote-sign-left.png" class="quote-sign-left" alt="">
              Ini udah orderan ke 3 saya, Bener-bener gak ngecewaiin. Sukaaa bangettt
              <img src="images/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Shopping Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Shopping</h3>
          <p>Let's shop now!</p>
        </div>

        <div class="alert alert-danger" role="alert">Kerusakan barang dikarenakan kurir pengiriman bukan tanggung jawab pihak kami!  </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            
            <div class="form-group">
              <input type="text" class="form-control" name="nameitem" id="nameitem" placeholder="Item Name" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>

            
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Size</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">35</option>
    <option value="2">36</option>
    <option value="3">37</option>
    <option value="3">38</option>
    <option value="3">39</option>
    <option value="3">40</option>

  </select>
</div>
            
            <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Color</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">White</option>
    <option value="2">Black</option>
    <option value="3">Grey</option>
  </select>
</div>

            <div class="form-group">
              <textarea class="form-control" name="address" rows="5" data-rule="required" data-msg="Please write Your Address" placeholder="Enter your Address"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit">Buy Now</button></div>
          </form>
        </div>



      </div>
    </section><!-- #contact -->

  </main>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>If you have problem or question let us now ! </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Batam Centre, Jl.Ahmad Yani, Tlk. Tering, Kec.Batam Kota, Kota Batam, Kepulauan Riau 29461, Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+6289554885576">+62 89554885576</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:myfootwear@gmail.com">myfootwear@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer / About Us
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>MyFootwear</h3>
            <p>Pasti sesuai dengan kantong anda.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>ABOUT US</h4>
           <P>
            MyFootwear adalah tempat jual beli sepatu yang terjamin keamanannya karena , MyFootwear sudah bekerjasama dengan produk yang di perjual belikan dalam website ini.
           </P>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Batam Centre, Jl.Ahmad Yani, <br>
              Tlk.Tering, Kec.Batam Kota, Kota Batam, Kepualauan Riau 29461,<br>
              Indonesia <br>
              <strong>Phone:</strong> +628 9554 8855 76<br>
              <strong>Email:</strong> myfootwear@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://mobile.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://m.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://aboutme.google.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Next week we will release a new product, so are you ready to look forward to it.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>MyFootwear</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
