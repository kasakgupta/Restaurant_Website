<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mexican Cuisine</title>
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
    <h2 class="food-menu-heading">Delicious Mexican Cuisine</h2>
    <p class="food-menu-subheading">A fiesta of flavors in every bite!</p>

    <div class="food-menu-container container">
      <!-- Tacos -->
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://www.allrecipes.com/thmb/vG-of0Xa0W0eodSXPWV1KXD009U=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/70935-taqueria-style-tacos-mfs-3x2-35-9145991a0ef94ceb8be05ae8d6be4f0f.jpg" alt="Tacos" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Tacos</h2>
          <p>
            Soft or crispy tortillas filled with seasoned meat, fresh veggies, and zesty toppings.
          </p>
          <p class="food-price">Price: &#8377; 200</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <!-- Enchiladas -->
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Enchilada_Rice_Beans.jpg/640px-Enchilada_Rice_Beans.jpg" alt="Enchiladas" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Enchiladas</h2>
          <p>
            Rolled tortillas stuffed with meat and cheese, smothered in a rich chili sauce.
          </p>
          <p class="food-price">Price: &#8377; 300</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <!-- Guacamole -->
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8J9EV-vOS0cdm75JVqXb6YGaBYC2ELTQvzw&s" alt="Guacamole" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Guacamole</h2>
          <p>
            Creamy avocado dip mixed with lime, cilantro, and a touch of spice. Perfect with tortilla chips!
          </p>
          <p class="food-price">Price: &#8377; 150</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <!-- Churros -->
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://cdn.zeptonow.com/production///tr:w-600,ar-100-100,pr-true,f-auto,q-80/web/recipes/churros-con-chocolate.png" alt="Churros" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Churros</h2>
          <p>
            Crispy fried dough coated in cinnamon sugar, served with chocolate dipping sauce.
          </p>
          <p class="food-price">Price: &#8377; 180</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <!-- Quesadillas -->
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://www.simplyrecipes.com/thmb/S77yyGItsM98kjwNacwU0hC9XpI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Quesadilla-LEAD-4-523a569564b4453484be4cdf05ce0d6a.jpg" alt="Quesadillas" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Quesadillas</h2>
          <p>
            Grilled tortillas filled with melted cheese and savory fillings like chicken or veggies.
          </p>
          <p class="food-price">Price: &#8377; 250</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>
    </div>

    <!-- Show More Button -->
    <div class="showMoreBtnDiv">
    <a href="../menu.php" target="_blank"><button class="showMore-btn">View Full Menu</button></a>
    </div>
  </section>
</body>

</html>