<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My art Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Valame ena icon sthn selida mas -->
    <link rel='shortcut icon' type='image/x-icon' href='Paintings/starry-night.png' />
   
    <!-- Gia eisagwgi wras -->
    <script>
      function startclock() {
        varInterval = setInterval(updateClock, 1000);
      }
 
      function updateClock() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10       
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
      }
    </script>

    <!-- Gia eisagwgh toy Xarth -->
    <style>
      #map {
        height: 400px;
        width: 100%
      }
    </style>

  </head>
  <body>
  
    <div class="site-wrap">

      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <!-- Header -->
      <header class="site-navbar py-3 border-bottom" role="banner">

        <div class="container-fluid">
          <div class="row align-items-center">
            
            <div class="col-6 col-xl-2" data-aos="fade-down">
              <h1 class="mb-0"><a href="Art_Gallery.php" class="text-black h2 mb-0">My Art Gallery</a></h1>
              <body onload="startclock()"><h4 id="clock"> </h4></body>
            </div>
            <!-- NavBar -->
            <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
              <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                  <li><a href="Art_Gallery.php">Gallery</a></li>
                  <li class="has-children"><a>About</a>
                    <ul class="dropdown">
                      <li><a href="About_Hermis.html">About Hermis</a></li>
                      <li><a href="About_Rea.html">About Rea</a></li>
                    </ul>
                  </li>
                  <li class="active"><a href="contact.php">Contact</a></li>
                  <li><a href="Add_Photo.php">Add Photo</a></li>
                </ul>
              </nav>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>
        
      </header>



      <div class="site-section" data-aos="fade">
        <div class="container-fluid">
          
          <div class="row justify-content-center">
            <div class="col-md-7">
              <div class="row mb-5">
                <div class="col-12 ">
                  <h2 class="site-section-heading text-center">Contact Us</h2>
                </div>
              </div>

              <!-- H forma gia na steilei o xrhsths email mesa apo thn selida -->
              <div class="row">
                <div class="col-lg-8 mb-5">
                  <!-- H forma kalei tp mail.php gia na steile to e-mail aftomata -->
                  <form name="myform" action="mail.php" method="POST">

                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="fname">First Name</label>
                        <input name="fname" type="text" id="fname" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label class="text-black" for="lname">Last Name</label>
                        <input name="lname" type="text" id="lname" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="email">Email</label> 
                        <input name="email" type="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="subject">Subject</label> 
                        <input name="subject"  type="subject" id="subject" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="message">Message</label> 
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here... We will get back to you!"></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary py-2 px-4 text-white">Send Message</button>
                        <!-- <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white"> -->
                      </div>
                    </div>

                  </form>
                </div>

                
                <!-- Stoixeia epikoinwnias -->
                <div class="col-lg-3 ml-auto">
                  <div class="mb-3 bg-white">
                    <p class="mb-0 font-weight-bold"> <br> Facebook Page</p>
                    <a href="https://www.facebook.com/ermito.gruppoautonomo">Hermis <br> </a>
                    <a href="https://www.facebook.com/rea.tsakopoulou">Rea <br> </a>

                    <p class="mb-0 font-weight-bold"> <br>Email Address</p>
                    <p class="mb-0"><a href="mailto:dpsd16025@aegean.gr?subject=My Art Gallery&body=Write your message here!">dpsd16025@aegean.gr <br></a></p>
                    <p class="mb-0"><a href="mailto:dpsd16110@aegean.gr?subject=My Art Gallery&body=Write your message here!">dpsd16110@aegean.gr</a></p>
                  </div>
                </div>

                <!-- Emfanish toy map -->
                <div id="map"></div>
                <script>
                  // Initialize and add the map
                  function initMap() {
                    // The location of university
                    var university = {lat: 37.445727, lng:  24.941597};
                    // The map, centered at pane
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 17, center: university});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: university, map: map});
                  }
                  
                  </script>
                  <script async defer
                      
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRY4y-TqClnijYqZLICm4FsdGRRatRLKU&callback=initMap">
                </script>

              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- Footer -->
      <div class="footer py-4">
        <div class="container-fluid text-center">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> | This template is made by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          
          <br>
          Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
          </p>
        </div>
      </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/picturefill.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>

    <script src="js/main.js"></script>
    
    <script>
      $(document).ready(function(){
        $('#lightgallery').lightGallery();
      });
    </script>
    
  </body>
</html>