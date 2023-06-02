<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/portfolio/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php 

include_once('../views/elements/head.php')
?>  
  <body>
<?php 
  include_once('../views/elements/header.php');
?>
    <main>
  <?php 
   include_once('../views/elements/intro.php');
   include_once('../views/elements/reach.php');
   include_once('../views/elements/social-media.php');
   include_once('../views/elements/services.php');
   include_once('../views/elements/mail.php');
   include_once('../views/elements/banner.php');
   include_once('../views/elements/about.php');
   include_once('../views/elements/mentors.php');
   include_once('../views/elements/photography.php');
   include_once('../views/elements/videos.php');
   include_once('../views/elements/thumbnail.php');

  ?>

    </main>
<?php 
 include_once('../views/elements/footer.php');
 include_once('../views/elements/script.php');

?>
   

  </body>

  </html>
