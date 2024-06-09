<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart';
   }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<!-- heading start -->

<section class="home">

   <div class="content">
      <h3>Shruti's craft corner</h3>
      <p>Arts and Crafts Store</p>
      <a href="shop.php" class="btn">shop now</a>
   </div>

</section>

<!-- heading end -->

<!-- about section starts -->

<h1 class="title">About us</h1>

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

<!-- product start -->

<section class="products">

   <h1 class="title">our products</h1>

   <div class="box-container">

      <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <form action="" method="POST" class="box">
         <div class="price">₹<?php echo $fetch_products['price']; ?>/-</div>
         <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
         <div class="name"><?php echo $fetch_products['name']; ?></div>
         <input type="number" name="product_quantity" value="1" min="0" class="qty">
         <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>

   </div>

</section>

<!-- product end -->

<!-- home cantact start -->

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>If you wants to say something,or wants to send something details of your required orders &if you wants to send feedback then you can go through here....</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>

<!-- home contact end -->

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>