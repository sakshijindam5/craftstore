<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<!-- headeing start -->

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<!-- heading end -->

<!-- about start -->

<section class="about" id="about">

    <div class="image">
        <img src="images/blog-1.jpg" alt="">
    </div>

    <div class="content">
        <div class="box">
            <h3>welcome to our shop</h3>
                <p>Hello I'm Shruti Dyawarshetti founder of Shruti's Craft
                 Corner!! Welcome to my website. We are a team of craft 
                 lovers (Me & My Sis) who enjoy creating beautiful and 
                 unique products for our customers. We specialize in 
                 handmade crafts and gifts. We love to create unique 
                 and personalized items for any occasion, such as 
                 birthdays, weddings, anniversaries, holidays, and more.
                 more. Our products include greeting cards, phone cases, 
                 photo album, memory book, vintage frames, calendar and 
                 polaroids.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </div>

</section>

<!-- about section ends  -->

<!-- team section starts  -->

<section class="team" id="team">

   <h1 class="title">our creative team</h1>

   <div class="box-container">

      <div class="box">
      <!-- C:\xampp\htdocs\craft store\images\shruti.jpg -->
         <img src="images/shreya.jpeg" alt="">
         <h3>Shreya Dyawarshetti</h3>
         <p>I'm Shreya me and my sister are loved to create crafts and we enjoy the process of creating products for our customers...</p>

         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/shreya_dyawarshetti/" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
         <img src="images/shruti.jpg" alt="">
         <h3>shruti dyawarshetti</h3>
         <p>I'm Shruti me and my sister are loved to create crafts and we enjoy the process of creating products for our customers...</p>

         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/shruti_dyawarshetti/" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>
   </div>

</section>

<!-- team section ends  -->

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>