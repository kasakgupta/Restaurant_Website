<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indian Cuisine</title>
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

    <h2 class="food-menu-heading">Authentic Indian Cuisine</h2>
    <p class="food-menu-subheading">
      Dive into the rich flavors of India with a variety of dishes representing the diverse culinary traditions of the country.
    </p>
    <div class="food-menu-container container">
      <!-- Example Dish Item -->
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://t3.ftcdn.net/jpg/06/01/41/66/360_F_601416673_Tn9dqtXuujNiavuJnNNspgcDezsStYpD.jpg" alt="Butter Chicken" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Butter Chicken</h2>
          <p>
            A rich and creamy dish made with marinated chicken simmered in a flavorful tomato-based curry.
          </p>
          <p class="food-price">Price: &#8377; 350</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <!-- Add More Dishes Here -->
      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://example.com/biryani.jpg" alt="Hyderabadi Biryani" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Hyderabadi Biryani</h2>
          <p>
            A fragrant and flavorful rice dish cooked with tender meat, aromatic spices, and saffron.
          </p>
          <p class="food-price">Price: &#8377; 299</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://example.com/idli.jpg" alt="Idli Sambar" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Idli Sambar</h2>
          <p>
            Soft and fluffy steamed rice cakes served with a tangy and spicy lentil soup.
          </p>
          <p class="food-price">Price: &#8377; 150</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://example.com/paneer-tikka.jpg" alt="Paneer Tikka" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Paneer Tikka</h2>
          <p>
            Marinated and grilled cubes of paneer served with mint chutney.
          </p>
          <p class="food-price">Price: &#8377; 250</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <div class="food-menu-item">
        <div class="food-img">
          <img src="https://example.com/samosa.jpg" alt="Samosa" />
        </div>
        <div class="food-description">
          <h2 class="food-title">Samosa</h2>
          <p>
            A crispy and golden fried pastry filled with spiced potatoes and peas.
          </p>
          <p class="food-price">Price: &#8377; 50</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>
    </div>

    <!-- Show More Button -->
    <div class="showMoreBtnDiv">
      <a href="../Menu Page/menu.php" target="_blank">
        <button class="showMore-btn">Show Full Menu</button>
      </a>
    </div>
  </section>
</body>

</html>