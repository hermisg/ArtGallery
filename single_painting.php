<?php
    // Tipwnei tis plhrofories gia ton kathe pinaka
    function print_single_painting($title, $thumbnail_name, $img_name, $description, 
                                   $painter, $date, $rating, $movement, $location) 
    { 
?>
    <!-- Sthn arxikh titlos + thumbnail kai mesa sto lightbbox (full image + oles oi plirofories) -->
    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" 
        data-src="<?php echo $img_name;?>"  
        data-sub-html="<h4><?php echo $title ?></h4>
        <p>
        <?php echo $description ?> <br>
        Painter: <?php echo $painter ?> <br>
        Date: <?php echo $date ?> <br>
        Rating: <?php echo $rating ?> <br>
        Movement: <?php echo $movement ?> <br>
        Location: <?php echo $location ?>
        </p>">
        <a href="#"><img src="<?php echo $thumbnail_name;?>" alt="<?php echo $description;?>"></a>
        <br>
        <a href=""><?php echo $title ?></a>	
    </div>
<?php
    }
?>
