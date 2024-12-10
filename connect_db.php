<!-- Sindesh me DataBase -->
<?php
   $dbserver = "localhost";
   $mysql_username = "dpsd16025";
   $mysql_password = "dpsd16025";
   $db_name = "dpsd16025";
   
   $conn = mysqli_connect ($dbserver, $mysql_username, $mysql_password, $db_name);

   if(!$conn) {
      echo "Failed";
      exit;
   }

?>