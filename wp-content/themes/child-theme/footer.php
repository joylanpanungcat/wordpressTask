<button
              type="button"
              class="btn  btn-floating btn-lg"
              id="btn-back-to-top"
              >
        <i class="fas fa-arrow-up"></i>
      </button>
<div class="main-footer">
    <div class="footer">
      <div class="col-md-12">
        <div class="item">
          <h5>About</h5>
          <div class="item-content">
            <!-- <div>Core Values</div>
          <div>Vision, Mission & Mission Values</div>
          <div>Our History</div>
          <div>Our Strengths Marketing</div>
          <div>Branded and Generic markets Sales</div>
          <div>Project Management & Regulatory</div> -->
          <?php 
           wp_nav_menu(
             array(
              'menu'=>'about',
              'container'=>'',
              'menu_class'=>'',
              'theme_location'=>'primary',
              'items_wrap'=>'<ul  class="about-footer" >%3$s</ul>'
             )
           )
       
          ?>
          </div>
        </div>
        <div class="item">
          <h5>Product Categories</h5>
         <div class="item-content">
          <!-- <div> <span><i class="fa fa-plus"></i></span>Thermometers</div>
          <div><span><i class="fa fa-plus"></i></span>Masks</div>
          <div> <span><i class="fa fa-plus"></i></span>Oxygen Masks</div>
          <div> <span><i class="fa fa-plus"></i></span>Wipes, Disinfectants & Cleaning Agents</div>
          <div><span><i class="fa fa-plus"></i></span>Anaesthesia</div>
          <div> <span><i class="fa fa-plus"></i></span>Tracheostomy tubes</div>
           -->
           <?php 
           wp_nav_menu(
             array(
              'menu'=>'Product Categories',
              'container'=>'',
              'menu_class'=>'',
              'theme_location'=>'primary',
              'items_wrap'=>'<ul  class="about-Product-Categories" >%3$s</ul>'
             )
           )
       
          ?>
         </div>
        </div>
        <div class="item">
         <h5></h5>
         <div class="item-content" style="margin-top: 55px;">
         <?php 
           wp_nav_menu(
             array(
              'menu'=>'Product Categories2',
              'container'=>'',
              'menu_class'=>'',
              'theme_location'=>'primary',
              'items_wrap'=>'<ul  class="about-Product-Categories about-Product-Categories2" >%3$s</ul>'
             )
           )
       
          ?>
          <!-- <div>  <span><i class="fa fa-plus"></i></span>Gloves</div>
          <div> <span><i class="fa fa-plus"></i></span>Infection control/Eye Protection</div>
          <div> <span><i class="fa fa-plus"></i></span>Non-Woven Medical Protective Products</div> -->
         </div>
        </div>
        <div class="item">
          <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.404276643291!2d125.61072921584748!3d7.0790409044832145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96da180e21987%3A0x2ba812e7a2b31673!2sSan%20Pedro%20Hospital%20of%20Davao%20City%2C%20Inc.!5e0!3m2!1sen!2sph!4v1646634777277!5m2!1sen!2sph" width="360" height="245" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    <div class="second-footer">
      <div class="col-md-6">
       <div class="left">
         <h5>keep touch :</h5>
         <div class="icon">
           <!-- <i class="fa fa-facebook"></i>
           <i class="fa fa-twitter"></i>
           <i class="fa fa-linkedin"></i> -->
           <?php 
           wp_nav_menu(
             array(
              'menu'=>'social-icon',
              'container'=>'',
              'menu_class'=>'',
              'theme_location'=>'primary',
              'items_wrap'=>'<ul  class="" >%3$s</ul>'
             )
           )
          ?>
         </div>
       </div>
      </div>
       <div class="col-md-6">
         <div class="right">
           <h5>CALL  +1 647-571-4454</h5>
           <button class="btn rounded-pill">EMAIL US</button>
         </div>
       </div>
   </div>
   <div class="third-footer ">
     <div class="col-md-6">
       <div class="left">
         <p>© 2021 Jayson Myers-Health. All Right Reserved
             </p>
        <div class="sitemap">
        <?php 
           wp_nav_menu(
             array(
              'menu'=>'third-footer',
              'container'=>'',
              'menu_class'=>'',
              'theme_location'=>'primary',
              'items_wrap'=>'<p >%3$s</p>'
             )
           )
          ?>
          <!-- <p> Sitemap  &nbsp; |&nbsp; </p>
          <p>Disclaimer &nbsp;  | &nbsp; </p>
          <p>Privacy Policy&nbsp;   | &nbsp; </p>
          <p>Terms and Conditions </p> -->
        </div>
        </div>
     </div>
     <div class="col-md-6">
       <div class="right">
         <div class="payment">
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment1.png" alt="" class="img-fluid">
              </div>
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment2.png" alt="" class="img-fluid">
              </div>
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment3.png" alt="" class="img-fluid">
              </div>
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment4.png" alt="" class="img-fluid">
              </div>
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment5.png" alt="" class="img-fluid">
              </div>
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment6.png" alt="" class="img-fluid">
              </div>
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment7.png" alt="" class="img-fluid">
              </div>
              <div>
              <img src="http://localhost/wordpress/wp-content/uploads/2022/03/payment8.png" alt="" class="img-fluid">
              </div>
              
         </div>
       </div>
     </div>
   </div>
  </div>
  
      <button
              type="button"
              class="btn  btn-floating btn-lg"
              id="btn-back-to-top"
              >
        <i class="fas fa-arrow-up"></i>
      </button>
      <?php wp_footer();?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  
</script>
</html>