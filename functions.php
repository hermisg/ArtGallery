<?php
    //Gia kataskevi thumbnain eikonas
    function create_thumbnail ($filename)
    {
        require'config.php';
        if (preg_match('/[.]jpg$/',$filename)) {
            //imagecreatefrom: methodos pou dimiourgei eikona apo arxeio h URL
            $im= imagecreatefromjpeg($path_to_image_directory. $filename);
        }
        elseif (preg_match('/[.]gif$/',$filename)) {
            $im= imagecreatefromgif($path_to_image_directory. $filename);
        }
        elseif (preg_match('/[.]png$/',$filename)) {
            $im= imagecreatefrompng($path_to_image_directory. $filename);
        }

        $oldx= imagesx($im);//imagesx: methodos pou pairnei to platos mias eikonas
        $oldy= imagesy($im);//imagesx: methodos pou pairnei to ipsos mias eikonas

        //pername neo x kai y gia na dimiourgisoume to thumbnail
        $newx= $final_width_of_image;
        $newy=$final_height_of_image;
        
        //imagecreate: methodos pou dimioygrei nea eikona, pairnei parametrous tis nees diastaseis
        $nm = imagecreatetruecolor($newx, $newy); 
        //imagecopyresized: Copy and resize part of an image
        imagecopyresized($nm,$im,0,0,0,0,$newx,$newy,$oldx,$oldy);
        
        //elegxos an uparxei o fakelos, an den iparxei, ton dhmioyrgei me to mkdir
        if(!file_exists($path_to_thumbs_directory)) {
            if(!mkdir($path_to_thumbs_directory)) {
                die("There was a problem. Please try again!");
            } 
        }
    
        //imagejpeg: Output image to browser or file
        //stelnei to thumbnail sto fakelo mas
        imagejpeg($nm, $path_to_thumbs_directory . $filename);
    }

?>