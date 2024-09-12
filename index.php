<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
    <link rel="stylesheet" href="style2.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- PHP: A simple greeting -->
    <?php
    date_default_timezone_set("Asia/Kolkata");  // Set the timezone to India, modify this based on your location.
    $hour = date("H");  // Get the current hour in 24-hour format

    // Determine the greeting based on the current time
    if ($hour >= 5 && $hour < 12) {
        $greeting = "Good Morning!";
    } elseif ($hour >= 12 && $hour < 17) {
        $greeting = "Good Afternoon!";
    } elseif ($hour >= 17 && $hour < 21) {
        $greeting = "Good Evening!";
    } else {
        $greeting = "Good Night!";
    }
?>

    <!-- navbar top -->
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
                <i><img src="./image/search.png" alt="" width="20px"></i>
                <i><img src="./image/heart.png" alt="" width="20px"></i>
                <i><img src="./image/shopping-cart.png" alt="" width="25px"></i>
            </div>
        </div>
    </div>
    <!-- navbar top -->

    <!-- main content -->
    <div class="main-content">
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
                    <a class="nav-link" href="shop.php">Shop</a> <!-- Link to the shop page -->
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


          <div class="content">
            <h1>Make Your Home<br>Modern Design.</h1>
            <p><?php echo $greeting; ?> Welcome to our furniture store!</p> <!-- Dynamic Greeting -->
            <div id="btn1"><button>Shop Now</button></div>
          </div>
    </div>
    <!-- main content -->

    <!-- card1 -->
    <div class="container">
        <h3 class="text-center" style="padding-top: 30px;">SERVICES WE OFFER</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="./image/c1.png" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">CUSTOM MENUS</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div>
            <!-- More cards here -->
        </div>
    </div>
    <!-- card1 -->

    <!-- JavaScript for button interaction -->
    <script>
        // Alert when the "Shop Now" button is clicked
        document.getElementById('btn1').addEventListener('click', function() {
            alert('Shop Now button clicked!');  // You can replace this with actual redirection or more functionality
        });

        // Add more JS functions as needed, e.g., toggle content, etc.
    </script>

    <!-- footer -->
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
    <!-- footer -->
</body>
</html>
