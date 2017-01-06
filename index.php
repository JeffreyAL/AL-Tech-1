<?php
include 'inc/php/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- head -->
  <?php include "inc/head.html" ?>
  <!--end of head  -->

  <body>

<!-- Nav Bar begins  -->
<?php include 'inc/nav.html'; ?>
<!-- Nav ends  -->

<!-- Carousel start  -->
<?php include "inc/carousel.html" ?>
<!-- Carousel ends  -->


<!-- page body  -->
<div class="container bg-2">

<div class="row">

<h1 class="page-header text-center al">
       <img src="img/logo/al-logo.png" alt="Logo" id="a-logo">
       <!-- this is the logo for AL tech for now but I woudl want someone
       with desgin expiarances, later down the line.
        -->
  </h1>



  <!--
  col box left
  -->

  <!--
        the link, img h5 are all going to be stored in a database,
     -->


  <div class="col-lg-3 col-md-6 col-sm-6 ">

  <!--
    1-1 Item pulled from DataBase
  -->
   <div class="home-product-sm">
   <?php
          $query = mysql_query("SELECT id, name, subt, text, url, type FROM post WHERE  id = '23' ");
          while($run = mysql_fetch_array($query)){
          $pname = $run['name'];
          $psubt = $run['subt'];
          $text = $run['text'];
          $url = $run['url'];
          $id = $run['id'];
      ?>

    <a href="#">
     <div class="img-box">
      <img class="img-responsive" src="uploads/<?php echo "$url"; ?>" alt="">
     </div>
     <div class="title-box">
      <h5><strong><?php echo $pname; ?></strong></h5>
      <h5><small><?php echo substr("$text",0,110);  echo "....";  ?></small></h5>
     </div>
    </a>
    <?php } ?> <!-- end of php -->
   </div> <!-- end of div -->

<!--
    1-2 Item pulled from DataBase
  -->
   <div class="home-product-sm">
   <?php
          $query = mysql_query("SELECT id, name, subt, text, url, type FROM post WHERE  id = '16' ");
          while($run = mysql_fetch_array($query)){
          $pname = $run['name'];
          $psubt = $run['subt'];
          $text = $run['text'];
          $url = $run['url'];
          $id = $run['id'];
      ?>

    <a href="#">
     <div class="img-box">
      <img class="img-responsive" src="uploads/<?php echo "$url"; ?>" alt="">
     </div>
     <div class="title-box">
      <h5><strong><?php echo $pname; ?></strong></h5>
      <h5><small><?php echo substr("$text",0,110);  echo "....";  ?></small></h5>
     </div>
    </a>
    <?php } ?> <!-- end of php -->
   </div> <!-- end of div -->

      <div class="home-product-sm">
    <a href="#">
     <div class="img-box">
     <img class="img-responsive" src="img/home/3.gif" alt="">
     </div>
     <div class="title-box">
      <h5>Electronics Portflio (Example)</h5>
      <h5><small>@@@@@@@@@@@@@@@@@@@@</small></h5>
      <h5><small>@@@@@@@@@@@@@@@@@@@@</small></h5>
     </div>
    </a>
   </div>




  </div> <!-- end of left-->

  <!-- col box right -->
  <div class="col-lg-3 col-md-6 col-sm-6 ">

    <div class="home-product-sm">
    <a href="#">
     <div class="img-box">
     <img class="img-responsive" src="img/home/1.gif" alt="">
     </div>
     <div class="title-box">
      <h5>our page should have one inch margins all the way aroun </h5>
      <h5><small>our page should have one inch margins all the way aroun</small></h5>
     </div>
    </a>
   </div>

   <div class="home-product-sm">
    <a href="https://github.com/Jeffreyumd/PHP-Practice#php-practice">
     <div class="img-box">
      <img class="img-responsive" src="img/home/phpicon.png" alt="">
     </div>
     <div class="title-box">
      <h5>PHP-Practice (GitHub)</h5>
      <h5><small>Check out a few of my php source code on github. GitHub is a code hosting platform for version control and
      collaboration. It lets you and others work together on projects from </small></h5>
     </div>
    </a>
   </div>

   <div class="home-product-sm">
    <a href="#">
     <div class="img-box">
      <img class="img-responsive" src="img/home/Space Survivor.gif" alt="">
     </div>
     <div class="title-box">
      <h5>our page should have one inch margins all the way aroun </h5>
      <h5><small>our page should have one inch margins all the way aroun</small></h5>
     </div>
    </a>
   </div>


  </div> <!-- end of right-->



    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 "> <!-- col box left start -->

   <!-- image on the left -->
    <div class="home-product">
    <a href="https://github.com/Jeffreyumd">
     <div class="img-box">
      <img class="img-responsive" src="img/home/git2.png" alt="">
     </div>
     <div class="title-box">
      <h5><span class="label label-default">New</span></h5>
      <h3>Check out some of my source codes on (GitHub)</h3>
      <h4><small>GitHub is a code hosting platform for version control and
      collaboration. It lets you and others work together on projects from
      anywhere.</small></h4>
     </div>
    </a>
   </div>

   <!-- image on the right -->
   <div class="home-product">
    <a href="http://alhassan.tech/portfolio.php">
     <div class="img-box">
      <img class="img-responsive" src="img/home/ard.jpg"   alt="">
     </div>
     <div class="title-box">
      <h3>Electronic Portfolio</h3>
      <h4><small>This is my personal Electronics protfolio, where you can check
      out some projects </small></h4>
     </div>
    </a>
   </div>
  </div> <!-- end col box left -->

</div>

</div> <!-- end of body page -->



<!-- Footer -->
<?php include "inc/footer.html" ?>
<!-- end of Footer -->


  </body>
</html>
