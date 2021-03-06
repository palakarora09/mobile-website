<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Meetme - Home</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="style/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="style/css/footer.css">
    <link rel="stylesheet" href="style/css/Navbar.css">
    <link rel="stylesheet" href="style/css/Product.css">
    <link rel="stylesheet" href="style/css/ProductSlides.css">
    <link rel="stylesheet" href="style/css/footer1.css">
    <link rel="stylesheet" href="style/css/footer2.css">
    <link rel="stylesheet" href="style/css/styles.css">
    <link rel="stylesheet" href="style/css/Sliderslides.css">
</head>

<body> 
    <header class="" id="km-header">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="km-navbar-brand text-lg-center">
        <div class="container">
          <button aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarTogglerDemo03" data-toggle="collapse" type="button"><i aria-hidden="true" class="fa fa-bars"></i></button> <a class="navbar-brand" href="#"><img alt="koolmj" class="img-fluid" src="style/img/meetme.png"></a>
          <div class="km-navbar-brand-btn-container">
          Hello , <?php echo $_SESSION['name']; ?>
                    <a href="index.php">Logout</a></>
          </div>
        </div>
      </div>
      <div class="km-navbar-menu">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              
             
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
              <li class="nav-item km-cart px-0">
                <a class="nav-link" href="cart.html">Cart <i aria-hidden="true" class="fa fa-shopping-cart fa-2x"></i> <span>1</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
	<div id="fw_al_001" class="carousel slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2500">

		
		<ol class="carousel-indicators">
			<li data-target="#fw_al_001" data-slide-to="0" class="active"></li>
			<li data-target="#fw_al_001" data-slide-to="1"></li>
			<li data-target="#fw_al_001" data-slide-to="2"></li>
		</ol>

		
		<div class="carousel-inner" role="listbox">

			
			<div class="carousel-item active">

			
				<img src="style/img/img14.png" alt="fw_al_001_01">

				
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">"In today's</h3>
					<h1 data-animation="animated fadeInUp"> modern world,</h1>
					<p data-animation="animated fadeInUp">people are either asleep or connected." </p>
					<a href="#" data-animation="animated fadeInUp">BUY NOW</a>
				</div>
			</div>
			

			
			<div class="carousel-item">

			
                <img src="style/img/img13.png" alt="fw_al_001_02">

				
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">"The future of mobile is the </h3>
					<h1 data-animation="animated fadeInUp">future of online.</h1>
					<p data-animation="animated fadeInUp">It's how people can access online consent now"</p>
					<a href="#" data-animation="animated fadeInUp">BUY NOW</a>
				</div>
			</div>
			

			
			<div class="carousel-item">

			
				<img src="style/img/img15.png" alt="fw_al_001_03">

				
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">Your mobile device has</h3>
					<h1 data-animation="animated fadeInUp">quickly become </h1>
					<p data-animation="animated fadeInUp">the easiest portal into your digital self."</p>
					<a href="#" data-animation="animated fadeInUp">BUY NOW</a>
				</div>
			</div>
			

		</div>

	</div> 

	


 
    <div class="row product-list">
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img4.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">OnePlus 8T</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">The OnePlus 8T 5G???s 16.637 cm(6.55") Fluid AMOLED display3 delivers excellence in each frame. Transform your onscreen experience with a 120 Hz Fluid Display for seamless scrolling. And with a super-low response latency, swiping is believing. The OnePlus 8T runs Android 11 and is powered by 4500mAh non-removable battery.The OnePlus 8T supports proprietary fast charging.</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 42,999</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img8.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">Vivo V20 Pro</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">The 7nm octa-core Qualcomm?? Snapdragon??? 765G supports both SA and NSA* 5G networks. Advanced optimizations help you enjoy low latency connections in a range of tricky situations - including elevators and high-speed trains. A 5G* thrill ride awaits. It is a 6.44 inch full HD+AMOLED panel with Schott's Xensation Up cover glass. Colors are rich,it gets very bright ,there's HDR support too.</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 29,400 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img6.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">Samsung Galaxy M31</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">The Samsung Galaxy M31 sports a big 6.4-inch display and has a waterdrop notch at the top. It has thin bezels around the AMOLED display which helps it stand out among the competition. The Galaxy M31 is comfortable to hold in the hand but is a little heavy at 191g. Stunning 64MP Quad camera to document your immensive viewing with 16,21cm.</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light d-lg-flex justify-content-lg-end" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 16,499 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row product-list">
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img10.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">Realme X2</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">The Realme X2 is powered by a Qualcomm Snapdragon 730G SoC, making it the first smartphone under Rs. 20,000 to have it. It's designed around the Realme XT, with nearly idential ports and button placement. It also features a dewdrop notch with a large, Super AMOLED display and a in-display fingerprint sensor.The phone features two Nano-SIM slots. </p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 23,999 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img9.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">One Plus 8</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">OnePlus8 is a Dual SIM (Nano-SIM , dual stand-by) smartphone that supports 5g. The OnePlus 8 is the spiritual successor of the OnePlus 7 and will go on to eventually replace the OnePlus 7T. Build quality is excellent thanks to the curved-edge front and back glass sandwiching the metal frame. The buttons are easy to reach, and the alert slider is handy as always. </p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 39,999 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img16.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">Vivo Y20i</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">Vivo Y20i smartphone was launched on 26th August 2020. The phone comes with a 6.51-inch touchscreen display with a resolution of 720x1600 pixels. It comes with 3GB of RAM. The Vivo Y20i runs Android 10 and is powered by a 5000mAh battery.It was launched in Nebula Blue and Dawn White colours.The Vivo Y20i runs Funtouch OS 10.5 based on Android 10 and packs 64GB of in-built storage. </p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light d-lg-flex justify-content-lg-end" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 11,490 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row product-list">
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img7.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">Samsung M51</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">Samsung Galaxy M51 comes with some brilliant features, which the tech geeks will find absolutely stunning. It has a powerful processing unit with sufficient RAM to enhance the overall performance. There is a spectacular camera setup, which allows the users to click wonderful pictures with precise details. The device can record 4K videos and supports camera modes like super steady and slo-mo. </p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 22,999 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img11.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">Realme nazro 20</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">Realme Narzo 20 is a good deal to look out for, within a standard price range. The 6000mAh Li-ion battery of the smartphone equipped with 18W Quick Charging technology makes it quite a head-turning device. Further, the impressive triple camera setup on the rear side and 4GB RAM makes it a worthy device in the eyes of all the smartphone lovers out there. </p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 12,499 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="style/img/img5.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">OnePlus Nord</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">OnePlus Nord is an impressive flagship product known for its great camera setup, great performance, big battery with Warp Charging technology, excellent display, and sleek design. Further, you will get 5G support, an on-screen fingerprint sensor, and the latest Android version (Q) out-of-the-box. However, its non-expandable memory might be a hindrance to some users.</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light d-lg-flex justify-content-lg-end" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">Rs. 42,999 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-snapchat-ghost"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook-f"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">About us</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">Enquiry</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
            </ul>
            <div class="text-center"><img class="img-fluid" src="style/img/meetmefinal.png" style="height: 41px;"><a href="https://www.meetind.me/" target="_blank">
                    <p class="copyright">Bmsce</p>
                </a></div><a href="https://bmsce.ac.in/" target="_blank">
                <p class="copyright">BMSCE</p>
            </a>
        </footer>
    </div>
    <script src="style/js/jquery.min.js"></script>
    <script src="style/bootstrap/js/bootstrap.min.js"></script>
    <script src="style/js/Product-Slider-1.js"></script>
    <script src="style/js/Product-Slider-2.js"></script>
    <script src="style/js/Product-Slider-3.js"></script>
    <script src="style/js/Product-Slider.js"></script>
    <script src="style/js/Swipe-Slider-7.js"></script>
</body>

</html>
<?php 
}else{
     header("Location: indexx.php");
     exit();
}
 ?>