<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home - EW</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .swiper-slide.slide {
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         height: 220px;
         text-align: center;
         background-color: ##007bff;
         border-radius: 10px;
         transition: background-color 0.3s ease;
      }

      .swiper-slide.slide:hover {
         background-color: #e2e2e2;
      }

      .swiper-slide.slide i {
         font-size: 50px;
         color: #333;
         margin-bottom: 10px;
         transition: color 0.3s ease;
      }

      .swiper-slide.slide:hover i {
         color: #007bff;
      }

      .swiper-slide.slide h3 {
         font-size: 18px;
         font-weight: bold;
         color: ##007bff;
         margin: 0;
      }
   </style>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>Baju Hoodie</h3>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
         <span>discount to 30%</span>
            <h3>Headsets Terbaru</h3>
         </div>
      </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Our product categories</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="shop.php?shop=men" class="swiper-slide slide">
   <i class="fa-solid fa-person"></i>
      <h3>Men's</h3>
   </a>

   <a href="shop.php?shop=women" class="swiper-slide slide">
   <i class="fa-solid fa-person-dress"></i>
      <h3>Women's</h3>
   </a>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:false,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>