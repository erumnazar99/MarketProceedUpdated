<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/headSection.php') ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>whatsapp chat</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<body>
   <a href="https://wa.me/923322408288" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>
<body>
  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">
        <?php include_once('include/navBarO.php') ?>
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/img_forest.jpg" class="img-fluid" alt="" width="100%">
        <div class="carousel-caption">
          <h1><mark>We Provide</mark><br><br><span><mark>Marketing Solutions</mark></span><br><br><mark>For Your Business!</mark></h1>
        </div>
      </div>

      <div class="item">
        <img src="img/img_place.jpg" class="img-fluid" alt="" width="100%">
        <div class="carousel-caption">
          <h1><mark>We Provide</mark><br><br><span><mark>Marketing Solutions</mark></span><br><br><mark>For Your Business!</mark></h1>

        </div>
      </div>
    
      <div class="item">
        <img src="img/img_sea.jpg" class="img-fluid" alt="" width="100%">
        <div class="carousel-caption">
          <h1><mark>We Provide</mark><br><br><span><mark>Marketing Solutions</mark></span><br><br><mark>For Your Business!</mark></h1>

        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section><!-- #intro -->

    <main id="main">

        <!--==========================
        Services Section
        ============================-->
        <section id="services" class="section-bg">
        <div class="container">
        <header class="section-header">


        <div class="buttons" id="myBtnContainer">
          <button class="btn active" onclick="filterSelection('all')"> Show all</button>
          <button class="btn" onclick="filterSelection('nature')"> Mugs</button>
          <button class="btn" onclick="filterSelection('cars')"> T-shirts</button>
          <button class="btn" onclick="filterSelection('people')">Keys Chains</button>
          <button class="btn" onclick="filterSelection('people')">Caps</button>
          <button class="btn" onclick="filterSelection('people')">Bottles</button>
          <button class="btn" onclick="filterSelection('people')">Lunch Boxes</button>

        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
          <div class="column nature" >
            <div class="content">
            <a href="ImageGallery.php">
              <img src="https://bouqs.com/product_images/white-hydrangea-lilies/Deluxe/6052a6e7da3320008437c9df/detail.jpg?c=1616029415" alt="Flowers" style="width:100%">
              <button>see more</button>
            </a>
              
            </div>
          </div>
          <div class="column nature">
            <div class="content">
            <a href="ImageGallery.php">
            <img src="http://www.namesofflowers.net/images/forget-me-not-flower-2-s.jpg" alt="Lights" style="width:100%">
              <button>see more</button>
            </a>  
            </div>
          </div>
          <div class="column nature">
            <div class="content">
            <a href="ImageGallery.php">
            <img src="https://i.pinimg.com/originals/2a/bf/46/2abf46e52691cabb7f3f478fd4c4edbf.jpg" alt="Nature" style="width:100%">
             <button>see more</button>
            </a> 
            </div>
          </div>
  
          <div class="column cars">
            <div class="content">
            <a href="ImageGallery.php">
              <img src="http://tenrandomfacts.com/wp-content/uploads/2015/01/Marguerite-Daisy.jpg" alt="Car" style="width:100%">
              <button>see more</button>
            </a>  
            </div>
          </div>
          <div class="column cars">
            <div class="content">
            <a href="ImageGallery.php">
            <img src="img/FB_IMG_1605187240175.jpg" alt="Car" style="width:100%">
             <button>see more</button>
            </a>  
            </div>
          </div>
          <div class="column cars">
            <div class="content">
            <a href="ImageGallery.php">
            <img src="img/FB_IMG_1619953907017.jpg" alt="Car" style="width:100%">
             <button>see more</button>
            </a> 
            </div>
          </div>

          <div class="column people">
            <div class="content">
            <a href="ImageGallery.php">
              <img src="img/FB_IMG_1619953915894.jpg" alt="Car" style="width:100%">
              <button>see more</button>
            </a>  
            </div>
          </div>
          <div class="column people">
            <div class="content">
            <a href="ImageGallery.php">
            <img src="img/FB_IMG_1619953923802.jpg" alt="Car" style="width:100%">
              <button>see more</button>
             </a> 
            </div>
          </div>
          <div class="column people">
            <div class="content" >
            <a href="ImageGallery.php">
            <img src="img/IMG-20190523-WA0005.jpg" alt="Car" style="width:100%">
              <button>see more</button>
            </a>
              
            </div>
          </div>
        <!-- END GRID -->
        </div>

            
            <h3>Services</h3>
            <p>We are a marketing agency providing number of services to the business for the speedy progress and growth.</p>
            </header>

            <div class="row">

            <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInLeft" data-wow-duration="1.4s">
                <div class="box">
                <div class="icon"><i class="ion-ios-people-outline" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="marketingConsultancy.php">Marketing Consultancy</a></h4>
                <p class="description">
                    We provide consultancy services to business owners in developing their marketing strategies, developing marketing plans and achieving their marketing goals.
                    <a href="marketingConsultancy.php">See more</a>
                </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 wow fadeInRight" data-wow-duration="1.4s">
                <div class="box">
                <div class="icon"><i class="ion-android-laptop" style="color: #e9bf06;"></i></div>
                <h4 class="title"><a href="onlineMarketing.php">Online Marketing</a></h4>
                <p class="description">
                    We deliver online marketing services like digital marketing, social media marketing, whatsapp marketing to the businesses to reach out to masses.
                    <a href="onlineMarketing.php">See more</a>
                </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                <div class="icon"><i class="ion-funnel" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="advertisements.php">Advertisements</a></h4>
                <p class="description">
                    We take care of the hustle of advertising and promoting your brand and reach out to masses for brand awareness / promotion or product promotion.
                    <a href="advertisements.php">See more</a>
                </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 wow fadeInRight" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                <div class="icon"><i class="ion-image" style="color:#41cf2e;"></i></div>
                <h4 class="title"><a href="graphicDesigning.php">Graphic Designing</a></h4>
                <p class="description">
                    We know the importance of good graphics to market anything. We are very keen in designing great posts for social media pages according your niche.
                    <a href="graphicDesigning.php">See more</a>
                </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                <div class="icon"><i class="ion-ios-world-outline" style="color: #226fff;"></i></div>
                <h4 class="title"><a href="webDevelopment.php">Website Development & Designing</a></h4>
                <p class="description">
                    Now a days, having a website for the business is considered as necessary since it provides more and more people access to your business and help in increasing the business quite substantially.
                    <a href="webDevelopment.php">See more</a>
                </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                <div class="icon"><i class="ion-ios-film" style="color: #4680ff;"></i></div>
                <h4 class="title"><a href="videoMaking.php">Video Making & Editing</a></h4>
                <p class="description">
                    We make video content for the clients to promote their brand, describing their goal and sharing thier achievements. We also mold and edit dull video content into interesting to gain watch time on social media platforms facebook or youtube.
                    <a href="videoMaking.php">See more</a>
                </p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- #services -->
<br><br><br><br><br>
        <!--==========================
        About Us Section
        ============================-->
        <section id="about">
        <div class="container">

            <header class="section-header">
            <h3  style="color: #fff;">About Us</h3>
            <p  style="color: #fff;">We are a marketing agency providing services to the clients and helping them in increasing their business using modern strategies.</p>
            </header>

            <div class="row about-container">

            <div class="col-lg-6 content order-lg-1 order-2">
                <p style="color: #fff;">
                <span style="color: #fff;">Market Proceed</span> have a great team of professionals working in the fields of marketing, graphic designing and website designing.<br>
                We have people with knowledge, skills and experience to perform the jobs in the best possible way and according to your requirements.<br>
                We strongly believe in
                </p>

                <div class="icon-box wow fadeInUp">
                <div class="icon"><i class="fa fa-handshake-o"></i></div>
                <h4 class="title"><a href="">Building Strong Bonds</a></h4>
                <p class="description" style="color: #fff;">
                    We work hard to make strong and successful relations with the clients.
                </p>
                </div>

                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon"><i class="fa fa-percent"></i></div>
                <h4 class="title"><a href="">Delivering Results</a></h4>
                <p class="description" style="color: #fff;">
                    Our team works hard to deliver 100% accurate and desired results.
                </p>
                </div>

                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="icon"><i class="fa fa-money "></i></div>
                <h4 class="title"><a href="">Excellent Deal</a></h4>
                <p class="description" style="color: #fff;">
                    The end product from our services will give you complete value for your money.
                </p>
                </div>

            </div>

            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                <!-- Put your png image in here -->
                <!-- <img src="img/about-img.svg" class="img-fluid" alt=""> -->
                <img src="img/about.png" class="img-fluid" alt="">
            </div>
            </div>

        </div>
        </section><!-- #about -->

        <!--==========================
        Contact Section
        ============================-->
        <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
            <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

            <div class="col-lg-6">
                <div class="map mb-4 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14474.748417521976!2d67.0774761!3d24.9086524!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2c52c42c580d703!2sMarketProceed!5e0!3m2!1sen!2s!4v1598651541625!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <!-- <div class="col-md-5 info">
                        <i class="ion-ios-location-outline"></i>
                        <p>A108 Adam Street, NY 535022</p>
                    </div> -->
                    <div class="col-md-6 info">
                        <i class="ion-ios-email-outline"></i>
                        <p>contact@marketproceed.com</p>
                    </div>
                    <div class="col-md-6 info">
                        <i class="ion-ios-telephone-outline"></i>
                        <p>0332-2408288</p>
                    </div>
                </div>

                <div class="form">
                <?php
                    if(isset($_GET['msg']) && $_GET['msg'] == 'true'){
                ?>
                    <div id="sendmessage">Thanks for contacting! Your message has been delivered.</div>
                <?php }else if(isset($_GET['msg']) && $_GET['msg'] == 'false'){ ?>
                    <div id="errormessage">There is some error in contacting. Please Email at 'contact@marketproceed.com'.</div>
                <?php } ?>
                <!-- <div id="sendmessage">Thank you for contacting! Your message has been sent.</div>
                <div id="errormessage"></div> -->
                <form action="contact/contact.php" method="POST" role="form" class="contactForm">
                    <div class="form-row">
                    <div class="form-group col-lg-6">
                        <input required type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-6">
                        <input required type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <input required type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <textarea required class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                    </div>
                    <div class="text-center"><button id="submit" type="submit" title="Send Message">Send Message</button></div>
                </form>
                </div>
            </div>

            </div>

        </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <?php include_once('include/footer.php') ?>
    </footer>
  <!-- #footer -->

  </style></style><a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <?php include_once('include/jsLibraries.php') ?>











  <!--Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

<body>
<!--Div where the WhatsApp will be rendered-->
  <div id="WAButton"></div>
   <a href="https://wa.me/923322408288" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body> 


</html>