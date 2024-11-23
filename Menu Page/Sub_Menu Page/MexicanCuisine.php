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
          <img src="https://www.simplyrecipes.com/thmb/O8PxMBNLP48LLYmgPQ6YhGzRUig=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Beef-Tacos-LEAD-3b-3dd2a7ac4c244b4ba22b7603c658ca37.jpg" alt="Tacos" />
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
          <img src="https://www.acouplecooks.com/wp-content/uploads/2020/03/Enchiladas-007.jpg" alt="Enchiladas" />
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
          <img src="https://downshiftology.com/wp-content/uploads/2019/04/Guacamole-Recipe-6.jpg" alt="Guacamole" />
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
          <img src="https://www.cookingclassy.com/wp-content/uploads/2020/05/churros-19.jpg" alt="Churros" />
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
          <img src="https://cookieandkate.com/images/2021/04/quesadilla-recipe-3-768x1153.jpg" alt="Quesadillas" />
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
      <a href="../Menu Page/menu.php" target="_blank"><button class="showMore-btn">View Full Menu</button></a>
    </div>
  </section>
</body>

</html>