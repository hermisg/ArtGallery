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
    <link rel="shortcut icon" type="image/x-icon" href="Paintings/starry-night.png" />


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
                  <li><a href="contact.php">Contact</a></li>
                  <li class="active"><a href="Add_Photo.php">Add Photo</a></li>
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
            <div class="col-md-5">
              <div class="row mb-7">
                <div class="col-12 ">
                  <h2 class="site-section-heading text-center"> Your are signed in! </h2>
                </div>
              </div>
              <br/>

              <!-- Kwdikas poy elegxei apo to database to username kai to password tou xrhsth gia na ton kanei login kai ton stelnei se nea selida-->
              <div class="container-fluid text-center">
                <?php
                  $user = $_POST["user"];
                  $pass = $_POST["pass"];
                    
                  //echo "username: $user and password: $pass <br>";
  
                  require("connect_db.php");

                  if ($user=="admin" && $pass=="valteMAS15"){
                    echo " <h4>  Upload a new photo </h4>";
                ?>

                <div class="row">
                  <div class="col-lg-12 mb-5">
                    <h5><br> Pick an image (png, jpg or gif) <br> <br></h5>  

                    <!-- Forma opou o xrhsths epilegei eikona gia na anevasei -->
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <form enctype="multipart/form-data" action="upload_photo.php" method="post">
                          <input type="file" name="fupload" />

                    <h5><br> Enter image's information: <br> <br></h5>
                    <!-- O xrhsths simplirwnei ta stoixeia ths fwtografias gia na perasei sto DataBase -->
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label class="text-black" for="title">Title: </label>
                            <input name="title" type="text" id="title" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label class="text-black" for="painter"> Painter: </label> 
                          <input name="painter" type="text" id="painter" class="form-control">
                        </div>
                      </div>

                      <div class="row form-group">
                        <div class="col-md-12">
                          <label class="text-black" for="description">Description:</label> 
                          <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Write a short description of the painting!"></textarea>
                        </div>
                      </div>

                      <div class="row form-group">                  
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label class="text-black" for="date">Date: </label> 
                          <input name="date"  type="int" id="date" class="form-control" placeholder="yyyy">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label class="text-black" for="location">Location: </label>
                          <input name="location" type="text" id="location" class="form-control">
                        </div>   
                      </div>                       
                          
                      <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label class="text-black" for="movement">Movement: </label>
                          <input name="movement" type="text" id="movement" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label class="text-black" for="rating">Rating: </label> 
                          <input name="rating" type="int" id="rating" class="form-control" placeholder="1-10">
                        </div>  
                      </div>  

                      <!-- Button gia na stalei h forma -->
                      <div class="row form-group">
                        <div class="col-md-12">
                          <input type="submit" class="btn btn-primary py-2 px-4 text-white" value="Upload">
                        </div>
                      </div>

                  </div>

                  <?php
                    }
                    else{
                      echo "<br> <h4> Wrong username or password... </h4>";
                      echo "<br> <a href=\"Add_Photo.php\"><h4>Go back</h4></a>";
                    }
                  ?>

                </div>

              </div>
              
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