<?php
include("database_f.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $feed = $_POST['feed'];

  // Check for empty fields
  if (empty($username)) {
    echo "Please Enter a Username";
  } elseif (empty($email)) {
    echo "Please Enter an Email";
  } else {
    // Attempt to insert data into the database
    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$username', '$email', '$feed')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Feedback submitted successfully!');</script>";
    } else {
      // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo "<script>alert('Feedback submitted successfully!');</script>";
    }
  }
}
mysqli_close($conn);
?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav class="navbar">
    <div class="navbar-container container">
      <input type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>
      <ul class="menu-items">
        <li>
          <a href="#home"> <i class="fas fa-home"></i> Home</a>
        </li>
        <li><a href="#about">About</a></li>
        <li><a href="#food">Category</a></li>
        <li><a href="#food-menu">Menu</a></li>
        <li><a href="#testimonials">Testimonial</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="../Login Page/login.php">Login</a></li>
        <li><i class="fas fa-search"></i></li> 

      </ul>
    
      <h1 class="logo">IGDTUW Restaurant</h1>
    </div>
  </nav>
  <section class="showcase-area" id="showcase">
    <div class="showcase-container">
      <h1 class="main-title" id="home">Eat Right Food</h1>
      <p class="title">Eat Healthy, it is good for our health.</p>
      <a href="#food-menu" class="btn btn-primary">Menu</a>
    </div>
  </section>

  <section id="about">
    <div class="about-wrapper container">
      <div class="about-text">
        <p class="small">About Us</p>
        <h2>
          Crafting healthy, flavorful meals for a decade, nourishing lives and
          communities.
        </h2>
        <p>
          For a decade, we've dedicated ourselves to crafting delicious,
          healthy meals. Starting as a family kitchen, we've grown into a
          community hub, celebrating fresh, locally-sourced ingredients. Our
          aim is to serve not just meals, but experiences that nourish and
          inspire. Sustainability is key, from our eco-friendly practices to
          supporting local growers. Join us on a flavorful journey toward
          health and happiness.
        </p>
      </div>
      <div class="about-img">
        <img src="https://www.cypressgreen.in/blog/wp-content/uploads/2021/03/food.jpg" alt="food" />
      </div>
    </div>
    <div class="showMoreBtnDiv">
      <a href="../About us Page/aboutUs.php" target="_blank"><button class="showMore-btn">Know More</button></a>
    </div>
  </section>
  <section id="food">
    <h2>Types of food</h2>
    <div class="food-container container">

      <div class="food-type fruite">
        <div class="img-container">
          <img src="https://i.postimg.cc/yxThVPXk/food1.jpg" alt="error" />
          <div class="img-content">
            <h3>Fruit</h3>
            <a href="https://blinkit.com/cn/fresh-fruits/cid/1487/1503" class="btn btn-primary" target="blank">Show More</a>
          </div>
        </div>
      </div>
      <hr>

      <div class="food-type vegetable">
        <div class="img-container">
          <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="error" />
          <div class="img-content">
            <h3>Vegetable</h3>
            <a href="https://blinkit.com/cn/fresh-vegetables/cid/1487/1489" class="btn btn-primary" target="blank">Show More</a>
          </div>
        </div>
      </div>
      <hr>

      <div class="food-type grin">
        <div class="img-container">
          <img src="https://i.postimg.cc/76ZwsPsd/food3.jpg" alt="error" />
          <div class="img-content">
            <h3>Grain</h3>
            <a href="https://blinkit.com/cn/poha-daliya-other-grains/cid/16/1295" class="btn btn-primary" target="blank">Show More</a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section id="food-menu">
    <h2 class="food-menu-heading">Food Menu</h2>
    <div class="food-menu-container container">
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://img.freepik.com/premium-photo/indian-food-square-post_1032986-201038.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Indian Cuisine</h2>
          <p>
          Indian cuisine is a rich blend of spices, flavors, and regional traditions.
           From aromatic curries to tangy dosas, each dish offers a unique, unforgettable taste experience.
          </p>
          <p class="food-price">Price: &#8377; 55</p>
          <a href="https://www.zomato.com/ncr/the-egg-company-1-rohini-new-delhi" target="_blank"> <button class="order-btn">Explore</button> </a>
        </div>
      </div>

      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://thumbs.dreamstime.com/b/italian-food-table-image-shows-full-delicious-theres-pizza-pasta-bread-more-all-arranged-beautiful-appetizing-323626017.jpg" alt="error" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Italian Cuisine</h2>
          <p>
          Italian cuisine is all about fresh ingredients and simple, rich flavors. From pasta and pizza to risotto, each dish is a celebration of tradition and taste.
          </p>
          <p class="food-price">Price: &#8377; 430</p>
          <a href="https://www.zomato.com/ncr/oodles-noodles-malviya-nagar-new-delhi" target="_blank"> <button class="order-btn">Explore</button> </a>

        </div>
      </div>
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKUZGiNnFa6F6H7hhw6SuVMm1wqJZtOthv6g&s" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Korean Cuisine</h2>
          <p>
          Korean cuisine is known for its bold flavors, featuring dishes like bulgogi and kimchi jjigae. It combines spicy, savory, and tangy elements, often served with a variety of banchan (side dishes)
          </p>

          <p class="food-price">Price: &#8377; 99</p>

          <a href="https://www.zomato.com/ncr/royal-thalis-new-ashok-nagar-noida" target="_blank"> <button class="order-btn">Explore</button> </a>

        </div>
      </div>
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://www.shutterstock.com/image-photo/sumptuous-taco-feast-detailed-realistic-260nw-2472438793.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Mexican cuisine</h2>
          <p>
          Mexican cuisine is vibrant and full of flavor, featuring dishes like tacos, enchiladas, and guacamole. With a blend of spices, herbs, and fresh ingredients, it offers a rich combination of savory, spicy, and tangy tastes.
          </p>
          <p class="food-price">Price: &#8377; 265</p>
          <a href="https://www.zomato.com/ncr/indian-tandoori-chicken-vasundhara-enclave-new-delhi" target="_blank"> <button class="order-btn">Explore</button> </a>

        </div>
      </div>
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://images.deliveryhero.io/image/fd-bd/LH/a0vv-hero.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Sizzling Pizza Fusion</h2>

          <p>
            Experience a fusion of Indian flavors on a crispy crust with our
            unique selection of locally-inspired pizzas topped with spicy
            masalas and fresh herbs.
          </p>
          <p class="food-price">Price: &#8377; 350</p>
          <a href="https://www.zomato.com/ncr/dominos-pizza-1-janakpuri-new-delhi" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
      </div>
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://sukhis.com/app/uploads/2022/04/image3-4.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">South Indian Dosa</h2>
          <p>
            Crispy, golden dosas served with zesty chutneys and flavorful
            sambar, a tantalizing South Indian delight straight from our
            griddle to your plate.
          </p>
          <p class="food-price">Price: &#8377; 599</p>
          <a href="https://www.zomato.com/ncr/south-indian-dosa-point-connaught-place-new-delhi" target="_blank"> <button class="order-btn">Order</button> </a>

        </div>
      </div>


    </div>
    <div class="showMoreBtnDiv">
      <a href="../Menu Page/menu.php" target="_blank"><button class="showMore-btn">Show More</button></a>
    </div>


  </section>
  <section id="testimonials">
    <h2 class="testimonial-title">What Our Customers Say</h2>
    <div class="testimonial-container container">
      <!-- <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="../Images/Customer 1.jpg" alt="" />
            <p class="customer-name">Ankit Chauhan</p>
          </div>
        </div>
        <div class="star-rating">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked "></span>
          <span class="fa fa-star checked"></span>
        </div>
        <p class="testimonial-text">
          "Exceptional service and delicious food! I ordered their special
          pasta dish, and it was beyond my expectations. The ambiance was
          cozy, and the staff was incredibly friendly. Definitely coming
          back!" 
        </p> -->
      <!-- </div>
      <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="../Images/Customer 2.jpg" alt="" />
            <p class="customer-name">Kiran Arya</p>
          </div>
        </div>
        <div class="star-rating">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
        <p class="testimonial-text">
          "Great place for a casual hangout! Loved the variety of dishes on
          the menu. The staff was attentive, and the food was served promptly.
          The only suggestion would be to add more vegetarian options."
        </p>
      </div> -->
      <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="../Images/Customer 4.jpg" alt="" />
            <p class="customer-name">Kasak Gupta</p>
          </div>
        </div>
        <div class="star-rating">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
        <p class="testimonial-text">
          "Great place for a casual hangout! Loved the variety of dishes on
          the menu. The staff was attentive, and the food was served promptly.
          The only suggestion would be to add more vegetarian options."
        </p>
      </div>
      <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="../Images/Customer 3.jpg" alt="" />
            <p class="customer-name">Kiran Arya</p>
          </div>
        </div>
        <div class="star-rating">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        </div>
        <p class="testimonial-text">
          "I had a fantastic dining experience! The food was fresh, flavorful,
          and beautifully presented. The atmosphere was delightful, perfect
          for a family dinner. Highly recommended!"
        </p>
      </div>
      <div class="testimonial-box">
        <div class="customer-detail">
          <div class="customer-photo">
            <img src="../Images/Customer 5.jpg" alt="" />
            <p class="customer-name">Diksha</p>
          </div>
        </div>
        <div class="star-rating">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        </div>
        <p class="testimonial-text">
          "I had a fantastic dining experience! The food was fresh, flavorful,
          and beautifully presented. The atmosphere was delightful, perfect
          for a family dinner. Highly recommended!"
        </p>
      </div>
    </div>
    <div class="showMoreBtnDiv">
      <a href="../Review Page/review.php" target="_blank"><button class="showMore-btn">See More</button></a>
    </div>
    </div>

  </section>

  <section id="contact">
    <div class="contact-container container">
      <div class="contact-img">
        <img src="../Images/IGDTUW RESTAURANT LOGO.png" alt="Restaurant Image" />
      </div>
      <div class="form-container">
        <h2 class="feedback-title">Feedback</h2>
        <form  action ="link-to-google-form"class="feedback-form" >
          <div class="form-group">
            <!-- <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" />
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <input type="text" id="message" name="feed" placeholder="Enter your Message" />

          </div> -->
          
          
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfIkyjc65_DXu7t-E7d0Apm0EZ99igUo_zMMSmuG7n-GJGKVQ/viewform?usp=sf_link">
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            Give a Feedback
          </a>


          
        </form>
      </div>
    </div>
  </section>

  <footer id="footer">
    <h2>IGDTUW Restaurant &copy; All rights reserved</h2>
  </footer>
</body>
<!-- 
    .................../ JS Code for smooth scrolling /...................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on("click", function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $("html, body").animate({
            scrollTop: $(hash).offset().top,
          },
          800,
          function() {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          }
        );
      } // End if
    });
  });
</script>

</html>