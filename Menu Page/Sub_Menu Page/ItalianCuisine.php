<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Italian Cuisine</title>
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
    <h2 class="food-menu-heading">Authentic Italian Cuisine</h2>
    <p class="food-menu-subheading">Indulge in the flavors of Italy with our expertly crafted dishes.</p>

    <div class="food-menu-container container">
        <!-- Pizza -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.foodandwine.com/thmb/ncA14Wu7R7yMZUKevfqqLZQXU-s=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/pizza-margherita-FT-BLOG1218-1-2e244b3af81641bfa44b22c6465d0d2f.jpg" alt="Pizza Margherita" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Pizza Margherita</h2>
                <p>
                    A classic Italian favorite with fresh tomato sauce, mozzarella cheese, and a touch of fresh basil.
                </p>
                <p class="food-price">Price: &#8377; 399</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Pasta -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://images.immediate.co.uk/production/volatile/sites/30/2023/03/pasta-primavera-1448824-e991b1f.jpg" alt="Pasta Primavera" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Pasta Primavera</h2>
                <p>
                    A delightful blend of pasta and fresh vegetables tossed in a light garlic and olive oil sauce.
                </p>
                <p class="food-price">Price: &#8377; 350</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Risotto -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.simplyrecipes.com/thmb/FqxItdI6qunlGvI1lCOJdybh1-Q=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Mushroom-Risotto-Lead-5b4f77de09d34b1e8094d6a0a70515f4.jpg" alt="Mushroom Risotto" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Mushroom Risotto</h2>
                <p>
                    A creamy and flavorful risotto made with Arborio rice, mushrooms, and Parmesan cheese.
                </p>
                <p class="food-price">Price: &#8377; 450</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Tiramisu -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.theflavorbender.com/wp-content/uploads/2019/12/Tiramisu-Featured-Image-1-500x500.jpg" alt="Tiramisu" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Tiramisu</h2>
                <p>
                    A classic Italian dessert with layers of coffee-soaked ladyfingers, mascarpone, and cocoa.
                </p>
                <p class="food-price">Price: &#8377; 300</p>
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
