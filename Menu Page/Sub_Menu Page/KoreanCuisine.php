<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korean Cuisine</title>
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
    <h2 class="food-menu-heading">Authentic Korean Cuisine</h2>
    <p class="food-menu-subheading">Experience the bold and dynamic flavors of Korea.</p>

    <div class="food-menu-container container">
        <!-- Kimchi -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://sugaryums.com/wp-content/uploads/2023/03/Baechu-Kimchi-Cabbage-Kimchi-Recipe-SugarYums-17.jpg" alt="Kimchi" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Kimchi</h2>
                <p>
                    A traditional Korean side dish made from fermented vegetables, seasoned with chili, garlic, and ginger.
                </p>
                <p class="food-price">Price: &#8377; 150</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Bibimbap -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Dolsot-bibimbap.jpg" alt="Bibimbap" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Bibimbap</h2>
                <p>
                    A colorful mixed rice dish topped with vegetables, gochujang, egg, and your choice of protein.
                </p>
                <p class="food-price">Price: &#8377; 400</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Bulgogi -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://static01.nyt.com/images/2023/11/14/multimedia/JM-Bulgogi-qmfj/JM-Bulgogi-qmfj-superJumbo.jpg" alt="Bulgogi" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Bulgogi</h2>
                <p>
                    Sweet and savory marinated beef grilled to perfection, served with rice or lettuce wraps.
                </p>
                <p class="food-price">Price: &#8377; 550</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Japchae -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2FPhoto%2FRecipes%2F2023-01-Japchae%2F11-JAPCHAE-018" alt="Japchae" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Japchae</h2>
                <p>
                    Stir-fried glass noodles with vegetables and beef, seasoned with soy sauce and sesame oil.
                </p>
                <p class="food-price">Price: &#8377; 350</p>
                <button class="order-btn">Order Now</button>
            </div>
        </div>

        <!-- Tteokbokki -->
        <div class="food-menu-item">
            <div class="food-img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSflz5_Oq9zOrxBQ--VA4Yr0WYNaZ9sZUKf8Q&s" alt="Tteokbokki" />
            </div>
            <div class="food-description">
                <h2 class="food-title">Tteokbokki</h2>
                <p>
                    Chewy rice cakes simmered in a spicy and sweet gochujang sauce, a favorite street food.
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