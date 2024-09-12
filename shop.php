<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar section copied from index.php -->
<div class="container">
    <div class="navbar-top">
        <div class="social-link">
            <i><img src="./image/twitter.png" alt="" width="30px"></i>
            <i><img src="./image/facebook.png" alt="" width="30px"></i>
            <i><img src="./image/google-plus.png" alt="" width="30px"></i>
        </div>
        <div class="logo">
            <h3>FURNITURE</h3>
        </div>
        <div class="icons">
            <!-- Cart icon with cart count -->
            <i><img src="./image/shopping-cart.png" alt="" width="25px"></i>
            <span id="cart-count" class="badge badge-primary">0</span> <!-- Cart count -->
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-md" id="navbar-color">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span><i><img src="./image/menu.png" alt="" width="30px"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a> <!-- Current page link -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Top Chair</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chair</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main content section for the Shop page -->
<div class="container">
    <h1 class="text-center" style="padding-top: 30px;">Shop Our Products</h1>
    <p class="text-center">Browse our exclusive collection of furniture.</p>

    <!-- Shop products with JS interaction -->
    <div class="row" id="product-list">
        <!-- Product 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="./image/sofa.png" class="card-img-top" alt="Sofa">
                <div class="card-body">
                    <h5 class="card-title">Luxury Sofa</h5>
                    <p class="card-text">$1000.50</p>
                    <button class="btn btn-primary" onclick="showDetails('Luxury Sofa', '$1000.50')">View Details</button>
                    <button class="btn btn-success" onclick="addToCart()">Add to Cart</button> <!-- Add to Cart Button -->
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="./image/chair.png" class="card-img-top" alt="Chair">
                <div class="card-body">
                    <h5 class="card-title">Ergonomic Chair</h5>
                    <p class="card-text">$300.75</p>
                    <button class="btn btn-primary" onclick="showDetails('Ergonomic Chair', '$300.75')">View Details</button>
                    <button class="btn btn-success" onclick="addToCart()">Add to Cart</button> <!-- Add to Cart Button -->
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="./image/desk.png" class="card-img-top" alt="Desk">
                <div class="card-body">
                    <h5 class="card-title">Modern Desk</h5>
                    <p class="card-text">$500.00</p>
                    <button class="btn btn-primary" onclick="showDetails('Modern Desk', '$500.00')">View Details</button>
                    <button class="btn btn-success" onclick="addToCart()">Add to Cart</button> <!-- Add to Cart Button -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to handle product details and cart functionality -->
<script>
    // Function to show product details
    function showDetails(productName, productPrice) {
        alert("Product: " + productName + "\nPrice: " + productPrice);
    }

    // Load cart count from localStorage
    let cartCount = localStorage.getItem('cartCount') ? parseInt(localStorage.getItem('cartCount')) : 0;
    document.getElementById('cart-count').textContent = cartCount; // Update cart count display

    // Function to add product to the cart and update the cart count
    function addToCart() {
        cartCount++; // Increment cart count
        localStorage.setItem('cartCount', cartCount); // Store updated count in localStorage
        document.getElementById('cart-count').textContent = cartCount; // Update the cart count display
    }
</script>

<!-- Footer copied from index.php -->
<footer id="footer">
    <h1 class="text-center">Furniture</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, ab?</p>
    <div class="icons text-center">
        <i class="bx bxl-twitter"></i>
        <i class="bx bxl-facebook"></i>
        <i class="bx bxl-google"></i>
        <i class="bx bxl-skype"></i>
        <i class="bx bxl-instagram"></i>
    </div>
    <div class="copyright text-center">
        &copy; Copyright <strong><span>Furniture</span></strong>. All Rights Reserved
    </div>
    <div class="credite text-center">
        Designed By <a href="#">SA Coding</a>
    </div>
</footer>

</body>
</html>
