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

      <?php
        // Upload fwtographias apo ton xrhsth
        require 'config.php';
        require 'functions.php';
                              
        if(isset($_FILES['fupload'])) {
          if(preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['fupload']['name'])) {                            
            $filename = $_FILES['fupload']['name'];
            $source = $_FILES['fupload']['tmp_name'];   
            $target = $path_to_image_directory . $filename;                           
            move_uploaded_file($source, $target);                          
            create_thumbnail($filename);     
          }
        }

        $title = addslashes($_POST["title"]);
        $description = addslashes($_POST["description"]);
        $painter = addslashes($_POST["painter"]);
        $date = doubleval($_POST["date"]);
        $rating = doubleval($_POST["rating"]);
        $movement = addslashes($_POST["movement"]);
        $location = addslashes($_POST["location"]);
        
        if ($title == "" || $description == "" || $painter == "" || $date == "" || $rating == "" || $movement == "" || $location == "") {
          echo "You have not entered all the required details. Try again!<br>";
          exit;
        }

        /* Connect to my account in MySQL server and my database */
        $conn = mysqli_connect ("localhost", "dpsd16025", "dpsd16025", "dpsd16025");

        if(!$conn) {
          echo "Connection with DataBase failed.";
          exit;
        }

        
        // Attempt select query execution
        $sql = "INSERT INTO paintings (title, description, painter, date, rating, movement, location, thumbnail_name, img_name) 
        VALUES ('$title', '$description', '$painter', $date, $rating, '$movement', '$location', 'thumb/$filename','uploads/$filename' )";
        
        //echo $sql . "<br />";

        $result = mysqli_query($conn, $sql);
        

        if($result){
          echo "<h3>Painting was sucessfully added to the collection!</h3>";
        } else{
          echo "<h3>Painting could not be added to the collection.</h3>";
        }
        
        // Close connection
        mysqli_close($conn);
      ?>

      <!-- Footer -->
      <div class="footer py-4">
        <div class="container-fluid text-center">
          <p>
          <br> <br> <br> <br> <br> <br> <br>
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