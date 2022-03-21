<?php
/*
Template Name: Home Page
 */

get_header();
?>
  <!-- banner -->
<div class="container-fluid banner-main " >
    <div class="banner">
        <div class="col-md-6 ">
            <?php if( get_field('banner_h5') ): ?>
                <h5>  <?php the_field('banner_h5'); ?> </h5>
                <?php endif; ?>
            
            <?php if( get_field('banner_h1') ): ?>
                <h1>  <?php the_field('banner_h1'); ?> </h1>
            <?php endif; ?>

            <?php if( get_field('banner_p') ): ?>
                <p>  <?php the_field('banner_p'); ?> </p>
            <?php endif; ?>

            <div class="button-group">
                <!-- <button class="btn rounded-pill">SHOP NOW <i class="fa fa-plus"></i></button> -->
                <!-- <button class="btn rounded-pill button-2 ">WHOLE SALE <i class="fa fa-plus"></i></button> -->
            </div>
        </div>
        <div class="col-md-6 images">
            <?php if( get_field('mask') ): ?>
            <img class="image-fluid" src="<?php the_field('mask'); ?>" />
            <?php endif; ?>
            <?php if( get_field('thermal') ): ?>
                <img  class="image-fluid thermal" src="<?php the_field('thermal');  ?>" />
            <?php endif; ?>
        </div>
    </div>
</div>
  <!-- about -->
<div class=" container-fluid">
    <div class=" about  ">
        <div class="col-md-6 image-about">
            <?php if( get_field('image-about') ): ?>
                 <img  class="image-fluid " src="<?php the_field('image-about');  ?>" />
             <?php endif; ?>
        </div>
        <div class="col-md-6 main-content">
            <div class="container content">
               <?php if( get_field('content_h5') ): ?>
                    <h5><?php the_field('content_h5');  ?></h5>
                <?php endif; ?>
                <?php if( get_field('content_h1') ): ?>
                     <h1><?php the_field('content_h1');  ?></h1>
                <?php endif; ?>
                <div class="d-flex align-items-start justify-content-center">
                    <img src="<?php the_field('list-image');  ?>" alt="" class="img-fluid">
                    <span><strong><?php the_field('efficiency');  ?></strong><?php the_field('efficiency_text');  ?></span>
                </div>
                <div class="d-flex align-items-start justify-content-center">
                    <img src="<?php the_field('list-image');  ?>" alt="" class="img-fluid">
                    <span><strong><?php the_field('quality');  ?></strong><?php the_field('quality_text');  ?></span>
                    </span>
                </div>
                <div class="d-flex align-items-start justify-content-center">
                    <img src="<?php the_field('list-image');  ?>" alt="" class="img-fluid">
                    <span><strong><?php the_field('integrity');  ?></strong><?php the_field('integrity_text');  ?></span>
                    </span>
                </div>
                <div class="d-flex align-items-start justify-content-center">
                    <img src="<?php the_field('list-image');  ?>" alt="" class="img-fluid">
                    <span><strong><?php the_field('teamwork');  ?></strong><?php the_field('teamwork_text');  ?></span>
                </span>
                </div>
                <div class="d-flex align-items-start justify-content-start">
                    <img src="<?php the_field('list-image');  ?>" alt="" class="img-fluid">
                    <span><strong><?php the_field('excellence');  ?></strong><?php the_field('excellence_text');  ?></span>
                    </span>
                </div>
                <div class="button">
                      <button class="btn rounded-pill">LEARN MORE ABOUT US</button>
                </div>
            </div>
        </div>
     </div>
</div>
<!-- featured -->
<div class="featured">
        <img src="<?php the_field('featured-image') ?>" alt="" class="img-fluid">
</div>
  <!-- featured categories -->
<div class="position-relative">
    <div class="">
        <div class="row col-md-12 featured-categories ">
            <div class="col-md-4 " >
                <div class="card">
                    <div class="sales ">
                        <h5><?php the_field('card_h5') ?></h5>
                        <h1><?php the_field('card_h1') ?></h1>
                        <button class="btn rounded-pill">SHOP NOW</button>
                    </div>
                    <div class="sales-image ">
                        <img src="<?php the_field('card_image') ?>" alt="" class="img-fluid">
                    </div>
               </div>
          </div>
            <div class="col-md-4 " >
                <div class="card" style="background-color: #f3f5f7;">
                    <div class="sales ">
                        <h5><?php the_field('card2_h5') ?></h5>
                        <h1><?php the_field('card2_h1') ?></h1>
                        <button class="btn rounded-pill">SHOP NOW</button>
                    </div>
                    <div class="sales-image ">
                        <img src="<?php the_field('card2_image') ?>" alt="" class="img-fluid thermal-2" >
                    </div>
                </div>
            </div>
            <div class="col-md-4 " >
                <div class="card" >
                    <div class="sales ">
                        <h5><?php the_field('card3_h5') ?></h5>
                        <h1><?php the_field('card3_h1') ?></h1>
                        <button class="btn rounded-pill">SHOP NOW</button>
                    </div>
                    <div class="sales-image ">
                        <img src="<?php the_field('card3_image') ?>" alt="" class="img-fluid Tracheostomy" >
                    </div>
                </div>
            </div>
            <div class="col-md-4 " >
                <div class="card" style="background-color: #f3f5f7;">
                    <div class="sales ">
                        <h5><?php the_field('card4_h5') ?></h5>
                        <h1><?php the_field('card4_h1') ?></h1>
                        <button class="btn rounded-pill">SHOP NOW</button>
                    </div>
                    <div class="sales-image ">
                       <img src="<?php the_field('card4_image') ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-4 " >
                <div class="card  " style="background-color: #f3f5f7;">
                    <div class="sales ">
                        <h5><?php the_field('card5_h5') ?></h5>
                        <h1><?php the_field('card5_h1') ?></h1>
                        <button class="btn rounded-pill">SHOP NOW</button>
                    </div>
                    <div class="sales-image " >
                      <img src="<?php the_field('card5_image') ?>" alt="" class="img-fluid Isolation">
                    </div>
                </div>
            </div>
            <div class="col-md-4 " >
                <div class="card  " style="background-color: #f3f5f7;">
                    <div class="sales ">
                        <h5><?php the_field('card6_h5') ?></h5>
                        <h1><?php the_field('card6_h1') ?> </h1>
                        <button class="btn rounded-pill">SHOP NOW</button>
                    </div>
                    <div class="sales-image ">
                         <img src="<?php the_field('card6_image') ?>" alt="" class="img-fluid Laryngeal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- featured Products -->
<div class=" products ">
    <div class="col-md-12">
        <h5 class="featured"><?php the_field('featured_h5') ?></h5>
    </div>
    <nav class="navbar heading ">
        <div class="left">
          <h1><?php the_field('nav_h1') ?> </h1>
        </div>
        <div class=" right">
            <ul class="nav ">
                <li class="nav-item">
                    <?php 
                        $best_seller_link = get_field('best_seller_link');
                    ?>
                    <a class="nav-link active" aria-current="page" href="<?php echo esc_url( $best_seller_link ); ?>"> <i class="fa fa-plus"></i>
                    <span >Best Seller</span></a>
                </li>
                <li class="nav-item">
                    <?php 
                        $popular_link = get_field('popular_link');
                    ?>
                    <a class="nav-link" href="<?php echo esc_url( $popular_link ); ?>"><i class="fa fa-plus"></i>
                    <span>Popular</span></a>
                </li>
                <li class="nav-item">
                    <?php 
                        $top_rated_link = get_field('top_rated_link');
                    ?>
                    <a class="nav-link" href="<?php echo esc_url( $top_rated_link ); ?>">  <i class="fa fa-plus"></i>
                    <span>Top Rated</span></a>
                </li>
              
            </ul>
        </div>
    </nav>   
     <div class="featured-image">
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text_h5') ?></h5>
                <p><?php the_field('featured_text_p') ?></p>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image2') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text2_h5') ?></h5>
                <p><?php the_field('featured_text2_p') ?></p>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image3') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text3_h5') ?></h5>
                <p><?php the_field('featured_text3_p') ?></p>
            </div>
        </div>
     
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image4') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text4_h5') ?></h5>
                <p><?php the_field('featured_text4_p') ?></p>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image5') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text5_h5') ?></h5>
                <p><?php the_field('featured_text5_p') ?></p>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image6') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text6_h5') ?></h5>
                <p><?php the_field('featured_text6_p') ?></p>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image7') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text7_h5') ?></h5>
                <p><?php the_field('featured_text7_p') ?></p>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('featured_image8') ?>" alt="" class="img-fluid">
            </div>
            <div class="text">
                <h5><?php the_field('featured_text8_h5') ?></h5>
                <p><?php the_field('featured_text8_p') ?></p>
            </div>
        </div>
    </div>
</div>

   <!-- featured brands -->
<div class="featured-brands">
    <div class="header">
        <div>
            <h5>Featured</h5>
        </div>
        <div>
            <h1>Product Brands</h1>
        </div>
    </div>
    <div class="Product-brands">
        <div class="col">
            <div class="image">
                <img src="<?php the_field('3M') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('wellead') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('paramedic') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('intco') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('niosh') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('hetaida') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('nitrile') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('lysol') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('deyo') ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <div class="image">
                <img src="<?php the_field('jason') ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>


  <!-- testimonial -->
<div class="testimonial">
    <div class="container">
        <div class="title">
            <h5>Testimonials</h5>
            <h1>What Our Client's Say</h1>
        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="profile position-relative">
                    <div class="card ">
                        <div class="header">
                            <h1>John Doe, <small>M.D.</small></h1>
                            <h5>Jan 10, 2021</h5>
                        </div>
                        <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus convallis suscipit. Duis posuere lectus tellus, non efficitur quam dapibus et.
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="avatar position-absolute top-0  end-0 translate-middle-y">
                            <div class="position-relative img-avatar">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2022/03/avatar3.png" alt="" class="img-fluid">
                                <span class="position-absolute top-0  end-0 translate-middle-y">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2022/03/quote.png" alt="" class="img-fluid">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile position-relative">
                    <div class="card">
                        <div class="header">
                            <h1>John Doe, <small>M.D.</small></h1>
                            <h5>Jan 10, 2021</h5>
                        </div>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus convallis suscipit. Duis posuere lectus tellus, non efficitur quam dapibus et.
                        </div>
                        <div class="avatar position-absolute top-0  end-0 translate-middle-y">
                        <div class="position-relative img-avatar">
                                <img src="http://localhost/wordpress/wp-content/uploads/2022/03/avatar.png" alt="" class="img-fluid">
                            <span class="position-absolute top-0  end-0 translate-middle-y">
                                <img src="http://localhost/wordpress/wp-content/uploads/2022/03/quote.png" alt="" class="img-fluid">
                            </span>
                        </div>
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile position-relative">
                    <div class="card ">
                        <div class="header">
                            <h1>John Doe, <small>M.D.</small></h1>
                            <h5>Jan 10, 2021</h5>
                        </div>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus convallis suscipit. Duis posuere lectus tellus, non efficitur quam dapibus et.
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="avatar position-absolute top-0  end-0 translate-middle-y">
                            <div class="position-relative img-avatar">
                                <img src="http://localhost/wordpress/wp-content/uploads/2022/03/avatar2.png" alt="" class="img-fluid">
                                <span class="position-absolute top-0  end-0 translate-middle-y">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2022/03/quote.png" alt="" class="img-fluid">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile position-relative">
                    <div class="card ">
                        <div class="header">
                            <h1>John Doe, <small>M.D.</small></h1>
                            <h5>Jan 10, 2021</h5>
                        </div>
                        <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus convallis suscipit. Duis posuere lectus tellus, non efficitur quam dapibus et.
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="avatar position-absolute top-0  end-0 translate-middle-y">
                            <div class="position-relative img-avatar">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2022/03/avatar3.png" alt="" class="img-fluid">
                                <span class="position-absolute top-0  end-0 translate-middle-y">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2022/03/quote.png" alt="" class="img-fluid">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile position-relative">
                    <div class="card">
                        <div class="header">
                            <h1>John Doe, <small>M.D.</small></h1>
                            <h5>Jan 10, 2021</h5>
                        </div>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus convallis suscipit. Duis posuere lectus tellus, non efficitur quam dapibus et.
                        </div>
                        <div class="avatar position-absolute top-0  end-0 translate-middle-y">
                        <div class="position-relative img-avatar">
                                <img src="http://localhost/wordpress/wp-content/uploads/2022/03/avatar.png" alt="" class="img-fluid">
                            <span class="position-absolute top-0  end-0 translate-middle-y">
                                <img src="http://localhost/wordpress/wp-content/uploads/2022/03/quote.png" alt="" class="img-fluid">
                            </span>
                        </div>
                        </div>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php
get_footer();
