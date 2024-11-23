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
                <img src="https://cdn.tasteatlas.com/images/dishes/d60bb5bc555b4d89b87278fcabb4882e.jpg" alt="Kimchi" />
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
                <img src="https://www.feastingathome.com/wp-content/uploads/2020/06/Bibimbap-Recipe-9-1.jpg" alt="Bibimbap" />
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
                <img src="https://rasamalaysia.com/wp-content/uploads/2021/05/bulgogi-thumb.jpg" alt="Bulgogi" />
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
                <img src="https://koreanbapsang.com/wp-content/uploads/2019/02/DSC_3273-e1549598183640.jpg" alt="Japchae" />
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
                <img src="https://mykoreankitchen.com/wp-content/uploads/2015/02/1.-Tteokbokki.jpg" alt="Tteokbokki" />
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
        <a href="../Menu Page/menu.php" target="_blank"><button class="showMore-btn">View Full Menu</button></a>
    </div>
</section>
</body>
</html>
