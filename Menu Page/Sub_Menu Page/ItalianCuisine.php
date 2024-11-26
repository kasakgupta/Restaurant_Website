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
                <img src="https://t3.ftcdn.net/jpg/04/44/86/70/360_F_444867086_79U7yvSiS6LaEWo8nN0ZYX8CJ7NhvhJh.jpg" alt="Pizza Margherita" />
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
                <img src="https://i.guim.co.uk/img/media/cb683d50e1a7141d4ac294bfa80e8df8a57168b2/604_1535_2669_2669/master/2669.jpg?width=700&quality=85&auto=format&fit=max&s=7f0a5c7fe097072a390ba8752b070fa1" alt="Pasta Primavera" />
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
                <img src="https://media.istockphoto.com/id/1368433094/photo/risotto-with-mushrooms-cheese-and-thyme-vegetarian-food-italian-food.jpg?s=612x612&w=0&k=20&c=VW3ZwcvFVeiF8DCXtyGH-QHd_opB_U799dZuiz8fgpU=" />
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
                <img src="https://t3.ftcdn.net/jpg/03/28/01/60/360_F_328016056_Ro67OjyMT2dnGFL6v4VKKoAkIcakElTW.jpg" alt="Tiramisu" />
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
    <a href="../menu.php" target="_blank"><button class="showMore-btn">View Full Menu</button></a>
    </div>
</section>
</body>
</html>