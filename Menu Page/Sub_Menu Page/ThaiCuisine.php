<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thai Cuisine</title>
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
    <h2 class="food-menu-heading">Exquisite Thai Cuisine</h2>
    <p class="food-menu-subheading">A perfect harmony of flavors that tantalizes your taste buds!</p>

    <div class="food-menu-container container">
        <!-- Pad Thai -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.recipetineats.com/wp-content/uploads/2018/06/Pad-Thai_0.jpg" alt="Pad Thai" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Pad Thai</h2>
                <p>
                    Stir-fried noodles with a savory sauce, topped with crushed peanuts, lime, and fresh herbs.
                </p>
                <p class="food-price">Price: &#8377; 350</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Green Curry -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.cookingclassy.com/wp-content/uploads/2019/05/thai-green-curry-12.jpg" alt="Green Curry" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Green Curry</h2>
                <p>
                    A fragrant curry made with coconut milk, green chilies, and fresh Thai basil, served with steamed rice.
                </p>
                <p class="food-price">Price: &#8377; 450</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Tom Yum Soup -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.recipetineats.com/wp-content/uploads/2019/09/Tom-Yum-Soup_3.jpg" alt="Tom Yum Soup" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Tom Yum Soup</h2>
                <p>
                    A spicy and sour soup with shrimp, lemongrass, galangal, and kaffir lime leaves.
                </p>
                <p class="food-price">Price: &#8377; 300</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Mango Sticky Rice -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.simplyrecipes.com/thmb/sVJ5uhvExj6MeSw4jjzPtLh7pDQ=/960x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Mango-Sticky-Rice-LEAD-04-144872fd1c5f4f8cb29384587b5a373e.jpg" alt="Mango Sticky Rice" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Mango Sticky Rice</h2>
                <p>
                    A sweet and creamy dessert made with sticky rice, coconut milk, and fresh ripe mangoes.
                </p>
                <p class="food-price">Price: &#8377; 250</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Som Tum (Papaya Salad) -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://www.seriouseats.com/thmb/oZTWScNPE6ePKaH9nY39MQ9TTmQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/som-tum-thai-papaya-salad-recipe-hero-2c7cfb482eed487587de2c825fa59f26.jpg" alt="Som Tum" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Som Tum (Papaya Salad)</h2>
                <p>
                    A refreshing salad with shredded green papaya, lime juice, chilies, and peanuts.
                </p>
                <p class="food-price">Price: &#8377; 200</p>
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
