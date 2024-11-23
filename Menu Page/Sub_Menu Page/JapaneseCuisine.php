<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japanese Cuisine</title>
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
        <h2 class="food-menu-heading">Authentic Japanese Cuisine</h2>
        <p class="food-menu-subheading">Experience the harmony of flavors, aesthetics, and tradition!</p>

        <div class="food-menu-container container">
            <!-- Sushi -->
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.justonecookbook.com/wp-content/uploads/2021/06/Sushi-Roll-Recipe-768x1024.jpg" alt="Sushi" />
                </div>
                <div class="food-description">
                    <h2 class="food-title">Sushi Platter</h2>
                    <p>
                        A variety of sushi rolls featuring fresh seafood, seaweed, and perfectly seasoned rice.
                    </p>
                    <p class="food-price">Price: &#8377; 599</p>
                    <button class="order-btn">Order Now</button>
                </div>
            </div>

            <!-- Ramen -->
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.recipetineats.com/wp-content/uploads/2020/05/Ramen_6.jpg" alt="Ramen" />
                </div>
                <div class="food-description">
                    <h2 class="food-title">Traditional Ramen</h2>
                    <p>
                        A hearty noodle soup served in a rich broth with slices of tender pork, eggs, and scallions.
                    </p>
                    <p class="food-price">Price: &#8377; 450</p>
                    <button class="order-btn">Order Now</button>
                </div>
            </div>

            <!-- Tempura -->
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.justonecookbook.com/wp-content/uploads/2011/04/Shrimp-Tempura.jpg" alt="Tempura" />
                </div>
                <div class="food-description">
                    <h2 class="food-title">Crispy Tempura</h2>
                    <p>
                        Lightly battered and fried shrimp and vegetables, served with a savory dipping sauce.
                    </p>
                    <p class="food-price">Price: &#8377; 350</p>
                    <button class="order-btn">Order Now</button>
                </div>
            </div>

            <!-- Teriyaki Chicken -->
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.recipetineats.com/wp-content/uploads/2019/06/Chicken-Teriyaki_9.jpg" alt="Teriyaki Chicken" />
                </div>
                <div class="food-description">
                    <h2 class="food-title">Teriyaki Chicken</h2>
                    <p>
                        Grilled chicken glazed with a sweet and savory teriyaki sauce, served with steamed rice.
                    </p>
                    <p class="food-price">Price: &#8377; 400</p>
                    <button class="order-btn">Order Now</button>
                </div>
            </div>

            <!-- Matcha Ice Cream -->
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.justonecookbook.com/wp-content/uploads/2013/05/Matcha-Ice-Cream-New-2.jpg" alt="Matcha Ice Cream" />
                </div>
                <div class="food-description">
                    <h2 class="food-title">Matcha Ice Cream</h2>
                    <p>
                        A refreshing dessert made with premium Japanese green tea, offering a rich and creamy flavor.
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