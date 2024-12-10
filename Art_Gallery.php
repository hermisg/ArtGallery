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
                  <li class="active">
                    <a href="Art_Gallery.php">Gallery</a></li>
                  <li class="has-children">
                    <a>About</a>
                    <ul class="dropdown">                    
                      <li><a href="About_Hermis.html">About Hermis</a></li>
                      <li><a href="About_Rea.html">About Rea</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="Add_Photo.php">Add Photo</a></li>
                </ul>
              </nav>
            </div>  

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            <!-- Gia to Search -->
            <div class="col-6 col-xl-2" data-aos="fade-down" style="position: relative; top: 10px;">
              <form action="search.php" method="POST">
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="search">Search: </label>
                    <input type="text" name="search_text" class="form-control" >
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="filter">Filter: </label>                 
                    <select name="criteria" class="form-control">
                      <option value="title">Title</option>
                      <option value="description">Description</option>
                      <option value="painter">Painter</option>
                      <option value="date">Date</option>
                      <option value="rating">Rating</option>
                      <option value="movement">Movement</option>
                      <option value="location">Location</option>
                    </select>
                    <br>
                    <div class="row form-group">
                      <div class="container-fluid text-center">
                        <button type="submit" class="btn btn-primary py-2 px-4 text-white"> Search </button>
                      </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>

      <div class="site-section"  data-aos="fade">
        <div class="container-fluid">
          
          <div class="row justify-content-center">
            
            <div class="col-md-7">
              <div class="row mb-5">
                <div class="col-12 ">
                  <h2 class="site-section-heading text-center">Paintings</h2>
                </div>
              </div>

                <!-- Gia to Filter --> 
                <div class="row justify-content-center"> 
                  <div class="row">
                    <div class="col-lg-12 mb-5" >
                      <form action="filter.php" method="POST">
                        <div class="row form-group">
                          <div class="col-md-6 mb-3 mb-md-0">
                            <input type="submit" value="Filter by tags:" class="btn btn-primary py-2 px-4 text-white">
                          </div>
                          <div class="col-md-6">          
                            <!-- Dropdown gia epilogh tou tag -->
                            <select name="tag" class="form-control">
                              <option value="girl">girl</option>
                              <option value="smile">smile</option>
                              <option value="night">night</option>
                              <option value="stars">stars</option>
                              <option value="blue">blue</option>
                              <option value="bridge">bridge</option>
                              <option value="scream">scream</option>
                              <option value="sunset">sunset</option>
                              <option value="man">man</option>
                              <option value="woman">woman</option>
                              <option value="house">house</option>
                              <option value="dog">dog</option>
                              <option value="earring">earring</option>
                              <option value="pearl">pearl</option>
                              <option value="god">god</option>
                              <option value="adam">adam</option>
                              <option value="genesis">genesis</option>
                              <option value="greek">greek</option>
                              <option value="goddess">goddess</option>
                              <option value="shore">shore</option>
                              <option value="french">french</option>
                              <option value="revolution">revolution</option>
                              <option value="flag">flag</option>

                              <option value="playing">playing</option>
                              <option value="poker">poker</option>
                              <option value="dante">dante</option>
                              <option value="devine">devine</option>
                              <option value="comedy">comedy</option>
                              <option value="dinner">dinner</option>
                              <option value="window">window</option>
                              <option value="gold">gold</option>
                              <option value="kiss">kiss</option>
                              <option value="sand">sand</option>
                              <option value="beach">beach</option>
                              <option value="dancers">dancers</option>
                              <option value="cabaret">cabaret</option>
                              <option value="Paris">Paris</option>
                              <option value="parasol">parasol</option>
                              <option value="boy">boy</option>
                              <option value="cloud">cloud</option>
                              <option value="gardens">gardens</option>
                              <option value="crowd">crowd</option>
                              <option value="gathering">gathering</option>
                              <option value="basket">basket</option>

                              <option value="fruits">fruits</option>
                              <option value="clocks">clocks</option>
                              <option value="melting">melting</option>
                              <option value="apple">apple</option>
                              <option value="green">green</option>
                              <option value="costume">costume</option>
                              <option value="musicians">musicians</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- Emfanisi twn pinakwn se galerry -->
          <div class="row" id="lightgallery">
            <?php
              require("connect_db.php");
              // Δημιουργία και εκτέλεση SQL ερωτήματος
              $sql = "SELECT * FROM paintings ORDER BY title";
              $result = mysqli_query($conn, $sql);
              // Διατρέχουμε τον πίνακα των αποτελεσμάτων
              $num_rows = mysqli_num_rows($result);
              // output data of each row
              require ("single_painting.php");
              while($row = mysqli_fetch_assoc($result)) {          
                print_single_painting($row["title"], $row["thumbnail_name"], $row["img_name"], $row["description"], 
                                      $row["painter"], $row["date"], $row["rating"], $row["movement"], $row["location"]);
              }
            ?>
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