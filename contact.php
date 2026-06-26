
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Store</title>
<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <!--navbar section-->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">

            <a class="navbar-brand logo" href="#">
                <img src="Online Library.jpg" alt="">
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                </ul>
                <div class="search-box">
                    <button>
                        <input type="text" placeholder="🔍 Search...">
                    </button>
                </div>
                <button class="buy-now">Get in touch</button>

            </div>
        </div>
    </nav>

    <!--shop banner-->
    <section class="shop-banner">
        <div class="banner-contant">
            <h1>Contact us</h1>
            <p>Home &gt; <span>Contact us</span></p>
        </div>
    </section>

    <!--contact form section-->
    <section class="contact">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Have questions or need assistance? We'd love to hear from you.</p>

            <div class="contact-wrapper">

                <div class="contact-info">
                    <img src="contactus pic.jpg" alt="Contact Us" class="contact-img">
                    <h2>Get In Touch</h2>
                    <p><strong>📍 Address:</strong> 123 Book Street, City, Country</p>
                    <p><strong>📞 Phone:</strong> +91 98765 43210</p>
                    <p><strong>✉ Email:</strong> info@bookstore.com</p>
                    <p><strong>⏰ Hours:</strong> Mon - Sat, 9:00 AM - 7:00 PM</p>
                </div>

                <form class="contact-form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject" required>
                    <textarea placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>

            </div>
        </div>
    </section>
    
     <!--footer section-->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-box">
                <h3>BookStore</h3>
                <p>
                Your trusted destination for discovering inspiring stories,
                educational resources, and bestselling books. We are passionate
                about connecting readers with the books they love.
                </p>
            </div>

            <div class="footer-box">
                 <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About US</a></li>
                    <li><a href="#">shop</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Customer Support</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping policy</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Contact Info</h3>
                <p>📍 Jamshedpur, Jharkhand</p>
                <p>📞 +91 98765 43210</p>
                <p>✉ info@bookstore.com</p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 BookStore. All Rights Reserved.</p>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>