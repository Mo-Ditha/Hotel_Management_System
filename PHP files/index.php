
<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Booking Management System | Home :: Page </title>


    <link rel="shortcut icon" href="images/favicon.ico" />

<!--swiper css link-->
<link rel ="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

<!-- font awesome cdn link --->
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- custome css file link --->
<link rel ="stylesheet" href="css/style1.css"> 
	<script>
		$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		});
		});
	</script>

</head>
<body>

 <!-- header start -->
 <section class="header">
         <a href="index.php" class ="logo">RoyalGrand</a>
         
         <nav class ="navbar">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="category-details.php">Rooms</a>
              <a href="gallery.php">Gallery</a>
              <a href="admin/login.php">Admin</a>
              <a href="contact.php">Contact</a>
              <a href="signup.php">Signup</a>
              <a href="signin.php">Login</a>

         </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
         
     </section>
 <!-- header section ends -->
 
 

 <!-- Back to top button-->
 <button class="scroll-to-top" onclick="scrollToTop()"><i class="fa-solid fa-angles-up"></i></button>
 
 
 <!-- Back to top end -->

<!--home section start-->

 <section class="home">
     

    <div class="swiper home-slider">
 
       <div class="swiper-wrapper">
 
          <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
             <div class="content">
                <span>Visit us</span>
                <h3>Bring your wedding dreams to life..</h3>
                <a href="gallery.php" class="btn">discover more</a>
             </div>
          </div>
 
          <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
             <div class="content">
                <span>Royel Grand hotel</span>
                <h3>-A distinctive location that steal minds.</h3>
                <a href="gallery.php" class="btn">discover more</a>
             </div>
          </div>
 
          <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
             <div class="content">
                <span>See What's difference</span>
                <h3> we make your event special..</h3>
                <a href="gallery.php" class="btn">discover more</a>
             </div>
          </div>
          
       </div>
 
       <div class="swiper-button-next"></div>
       <div class="swiper-button-prev"></div>
 
    </div>
 
 </section>
 

 <!--home section end-->

 


 
<!-- home facility section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our facilities </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Wedding venue</h3>
            <p>Our grand banquet hall is adored with  carefully-selected furniture, it is the perfect location for you to arrange your special day.Be it a wedding,birthday party etc.It can host up to 100-350 guests.</p>
            <a href="gallery.php" class="btn">Discover more</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Restaurant & pub</h3>
            <p>Our chefs are committed to bring forth the best and the freshest cuisines to the table and also we offer an European style bar counter along with 0 corkage charge for hard liquor.</p>
            <a href="gallery.php" class="btn">Discover more</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Photo locations</h3>
            <p>As we are located in one of the most beautiful districts of Sri Lanka, we are rich in natural beauty. We are well known for the picturesque locations loved by the guests who visit us.Of course its ideal for your wedding shoot!</p>
            <a href="gallery.php" class="btn">Discover more</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>conference & events</h3>
            <p>Royal Grand Reception is also very ideal for official conferences and also big organized events as indoor  musical shows.</p>
            <a href="gallery.php" class="btn">Discover more</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Accommodation</h3>
            <p>Choose from a selection of standard rooms and deluxe rooms that come with amenities that will help make your stay more enjoyable.</p>
            <a href="s.php" class="btn">Discover more</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Wining and dining</h3>
            <p>We provide the best standards in catering services to meet the requirements of any event held at the venue.</p>
            <a href="gallery.php" class="btn">Discover more</a>
         </div>
      </div>




   </div>

   <div class="load-more"> <a href="services.php" class="btn">load more</a> </div>

</section>

<!-- home facility section end -->
 

    <!-- home about section start -->

<section class="home-about">

   <div class="image">
      <img src="images/about1-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Royal Grand Reception Hall, one of the most prestigious and picturesque reception halls in the district of Kurunagala, situated in Kelimune,Wariyapola, gained its recognition throughout 10 years of service to the hospitality industry. We were able to grow immensely over the years and we dote on our homely atmosphere, situated in a serene location which is perfect to capture the many events in your life which we are fortunate enough to take part in.
      </p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->


<!--Home discover start-->
   
<section class="home-middle">
   <div class="box-container">
      <div class="box">
         <h3>ROYAL GRAND RESIDENCES</h3>
   </div>
</section>


<!--Home discover end-->


<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 20% off</h3>
      <p>Visit us today and make your reservation with Royal Grand Reception Hall and get the 20% discount in the month of August<br>Hurry! up now</p>
      <a href="signin.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->












 
 <!---footer start--> 

  <section class="footer">
       <div class="box-container">
           <div class="box">
               <h3>Quick links</h3>
               <a href="index.php"> <i class="fas fa-angle-right"></i>Home</a>
              <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
              <a href="services.php"><i class="fas fa-angle-right"></i>Rooms</a>
              <a href="gallery.php"><i class="fas fa-angle-right"></i>Gallery</a>
              <a href="admin/login.php"><i class="fas fa-angle-right"></i>Admin</a>
              <a href="contact.php"><i class="fas fa-angle-right"></i>Contact</a>
              <a href="signup.php"><i class="fas fa-angle-right"></i>Signup</a>
              <a href="signin.php"><i class="fas fa-angle-right"></i>Login</a>

               
           </div>  

           <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
           <a href="#"><i class="fas fa-angle-right"></i> about us</a>
           <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
           <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
         
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+94372-236-932</a>
           <a href="#"><i class="fas fa-phone"></i> +9411-111-111<br> (also available on whatsapp)</a>
           <a href="#"><i class="fas fa-envelope"></i> royelgrand@gmail.com</a>
           <a href="#"><i class="fas fa-map"></i>Royal Grand Hotel, Kelimune,Kurunegala</a>
         
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fa-brands fa-facebook"></i> facebook</a>
           <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
           <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
           <a href="#"><i class="fa-brands fa-whatsapp"></i> whatsapp</a>
         
        </div>
         
        <div class="log" >
         <img src="images/logo.png" alt="" class ="logo">
        </div>


       </div>
       <div class="credit">created by <span>Team RUMS</span> | all rights reserved!</div>
  </section>

 <!---footer end-->  


  <!-- swiper js link-->
     <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

 <!-- js file link--->
      <script src="js/script1.js"></script>
    
</body>
</html>