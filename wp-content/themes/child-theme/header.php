<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de3d46c928.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
<?php wp_head();?>
</head>
<body>
    <nav class="navbar navbar-first mb-0">
        <div class="container-fluid">
          <div class="left">
            <span class="navbar-brand  fw-light">We've got you covered for all your covid-19 supplies </span>
          </div>
          <div class="right">
            <div class="phone">
                <i class="fa fa-phone"></i>
                <span><small>Call Us</small> +1 647-517-4454</span>
            </div>
            <div class="icon">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
            </div>
                <button class="btn rounded-pill" ><i class="fa fa-user-circle-o "> </i>    MY ACCOUNT</button>
        </div>
        </div>
      </nav>
      <!-- second nav -->
     <nav class="navbar navbar-second navbar-expand-lg navbar-light sticky-top  "> 
        <div class="container-fluid fixed">
          <a class="navbar-brand" href="#"><img src="http://localhost/wordpress/wp-content/uploads/2022/03/logo.png" alt="" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
           <?php 
           wp_nav_menu(
             array(
              'menu'=>'Main Menu',
              'container'=>'',
              'menu_class'=>'',
              'theme_location'=>'primary',
              'items_wrap'=>'<ul  class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" >%3$s</ul>'
             )
           )
       
          ?>
          
            <div class="nav-right">
              <div class=" height  justify-content-center align-items-center">
                    <div class="search"> <i class="fa fa-search"></i>  <input type="text" placeholder="Search Product" class=" rounded-pill"></div>
            </div>
            <img src="http://localhost/wordpress/wp-content/uploads/2022/03/cart.png" alt="" class="img-fluid">
          </div>
          </div>
        </div>
      </nav> 
