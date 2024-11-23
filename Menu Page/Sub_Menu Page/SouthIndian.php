<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="./cuisineCSS.css">
  <script src="./script.js" defer></script>



</head>
<body>
<section id="food-menu">
     <!-- Search Section -->
     <div class="search-container">
      <input type="text" id="search-input" placeholder="Search for a dish..." onkeyup="searchDish()">
      <button onclick="searchDish()" class="search-btn">Search</button>
    </div>
    <h2 class="food-menu-heading">Food Menu</h2>
    <div class="food-menu-container container">
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://img.freepik.com/premium-photo/indian-food-square-post_1032986-201038.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Explore Our SouthIndian Cuisine</h2>
          <p>
          Indian cuisine is a rich blend of spices, flavors, and regional traditions.
           From aromatic curries to tangy dosas, each dish offers a unique, unforgettable taste experience.
          </p>
          <p class="food-price">Price: &#8377; 55</p>
          <a href="../Menu Page/Sub_Menu Page/IndianCuisine.php" target="_blank"> <button class="order-btn">Explore</button> </a>
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
          <a href="../Menu Page/Sub_Menu Page/ItalianCuisine.php" target="_blank"> <button class="order-btn">Explore</button> </a>

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

          <a href="../Menu Page/Sub_Menu Page/KoreanCuisine.php" target="_blank"> <button class="order-btn">Explore</button> </a>

        </div>
      </div>
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://holytequila.com/wp-content/uploads/2022/05/history-of-mexican-food.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Mexican Cuisine</h2>
          <p>
          Mexican cuisine is vibrant and full of flavor, featuring dishes like tacos, enchiladas, and guacamole. With a blend of spices, herbs, and fresh ingredients, it offers a rich combination of savory, spicy, and tangy tastes.
          </p>
          <p class="food-price">Price: &#8377; 265</p>
          <a href="../Menu Page/Sub_Menu Page/MexicanCuisine.php" target="_blank"> <button class="order-btn">Explore</button> </a>

        </div>
      </div>
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://www.thespruceeats.com/thmb/D9hctWPH31A5oiQ34J4Hknc6x0Y=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1042998066-518ca1d7f2804eb09039e9e42e91667c.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Thai Cuisine</h2>

          <p>
          Thai cuisine is known for its bold flavors, balancing sweet, sour, spicy, and savory. Popular dishes like pad thai, green curry, and tom yum soup highlight fresh herbs, spices, and vibrant ingredients.
          </p>
          <p class="food-price">Price: &#8377; 350</p>
          <a href="../Menu Page/Sub_Menu Page/ThaiCuisine.php" target="_blank"> <button class="order-btn">Explore</button> </a>

        </div>
      </div>
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://sukhis.com/app/uploads/2022/04/image3-4.jpg" alt="" />
        </div>
        <div class="food-description">
          <h2 class="food-title">South Indian Cuisine</h2>
          <p>
          South Indian cuisine features flavorful dishes like dosa, idli, and sambar, with rice, lentils, and spices creating a balance of tangy, spicy, and savory flavors.
          <p class="food-price">Price: &#8377; 599</p>
          <a href="../Menu Page/Sub_Menu Page/SouthIndianCuisine.php" target="_blank"> <button class="order-btn">Explore</button> </a>

        </div>
      </div>


    </div>
    <div class="showMoreBtnDiv">
      <a href="../Menu Page/menu.php" target="_blank"><button class="showMore-btn">Show More</button></a>
    </div>


  </section>
</body>
</html>