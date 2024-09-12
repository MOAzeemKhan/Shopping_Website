<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style2.css"> <!-- Same CSS file as index page -->
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
            <i><img src="./image/search.png" alt="" width="20px"></i>
            <i><img src="./image/heart.png" alt="" width="20px"></i>
            <i><img src="./image/shopping-cart.png" alt="" width="25px"></i>
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
                    <a class="nav-link" href="#">Shop</a>
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

<!-- Main content section for contact page -->
<div class="container contact-form-container">
    <h1>Contact Us</h1>
    <p>If you have any queries, feel free to reach out to us.</p>

    <!-- PHP Code to handle form submission and display success message -->
    <?php
    // Initialize variables
    $successMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        // You can add validation and form handling logic here
        // For now, we just display a success message

        $successMessage = "Your record has been saved successfully, $name!";
    }
    ?>

    <!-- Show success message after form submission -->
    <?php if (!empty($successMessage)): ?>
        <div class="alert alert-success">
            <?php echo $successMessage; ?>
        </div>
    <?php endif; ?>

    <form action="contact.php" method="POST">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>

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
