<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dental Plaza</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Dental<span> Plaza </span></a>

         <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#reviews">Reviews</a>
            <a href="#contact">Contact</a>
         </nav>

         <a href="#contact" class="link-btn">Make Appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us brighten your smile!</h3>
            <p>Welcome to Dental Plaza, we strive to bring you quality of care that is like no other dental experience
                you have had. Our cosmetic dentist, and staff are comforting, genuine, and completely devoted to your well being and comfort.</p>
            <a href="#contact" class="link-btn">Make Appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>We understand that the dental chair can bring a lot of anxiety to some patients, but with our 
               gentle dentist, amazing staff, state of the art facilities, and breathtaking views of city, you can 
               leave all your fears at the door.</p>
            <a href="#contact" class="link-btn">Make Appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
         <p>Using precision automotive tools or computer equipment, you make sure the wheels, axles, torsion bars, and steering mechanisms 
            on vehicles all point the same direction (straight) at the same time. If you find damaged parts, you replace or repair those.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>Cosmetic dentistry is the branch of dentistry that focuses on improving the appearance of your smile. 
            Cosmetic dentists are medical professionals who specialize in the appearance of the teeth and gums. </p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
         <p>Oral hygiene is the practice of keeping your mouth clean and disease-free. 
            It involves brushing and flossing your teeth as well as visiting your dentist regularly for dental X-rays, exams and cleanings.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>The root canal procedure is performed to save a 
            damaged or badly infected tooth, instead of extracting it. This procedure is performed by an endodontist or a 
            root canal specialist.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>Our primary purpose is to protect patient safety and maintain public confidence in dental services.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>A full body cavity search is a visual 
            search or manual internal inspection of body cavities for prohibited material such as illegal drugs, money, jewellery, or weapons. </p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Cosmetic dentistry is the branch of dentistry that focuses on improving the appearance of your smile.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>A pediatric dentist offers a wide range of treatment options, as well as expertise and training to care for your child's teeth, gums and mouth.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>Dental implants are artificial structures that a dental surgeon inserts into a person’s jawbone. 
            A person may need an implant if they have lost one or more teeth.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Dr. Kalasho is very caring, considerate, and communicative! I recently had to have 3 fillings and a crown done, and she made sure.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Do yourself a huge favor and go visit Dr. Rhonda Kalasho for your dental needs if you live in the area. 
            She is extremely professional.
</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>daisy d'souza</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>This review has been long overdue. Dr Kalasho has been my dentist for over a year now, and she literally saved my teeth.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jack William</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>Your Name :</span>
      <input type="text" name="name" placeholder="Enter your Name" class="box" required>
      <span>Your Email :</span>
      <input type="email" name="email" placeholder="Enter your Email" class="box" required>
      <span>Your Number :</span>
      <input type="number" name="number" placeholder="Enter your Number" class="box" required>
      <span>Appointment Date & Time :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Delhi, India - 110052</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Opening Hours</h3>
         <p>09:00AM to 09:00PM</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email Address</h3>
         <p>poojajindal1020@gmail.com</p>
      
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Pooja Jindal</span>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>