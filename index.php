<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar section -->
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
                    <a class="nav-link" href="shop.php">Shop</a>
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

<!-- JavaScript to retrieve cart count from localStorage -->
<script>
    // Load cart count from localStorage on page load
    let cartCount = localStorage.getItem('cartCount') ? parseInt(localStorage.getItem('cartCount')) : 0;
    document.getElementById('cart-count').textContent = cartCount; // Update cart count display
</script>

<!-- Footer (same as before) -->
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
