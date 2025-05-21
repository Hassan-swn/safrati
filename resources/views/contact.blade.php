<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Safrati</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo"><a href="/">Safrati</a></div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/destinations">Destinations</a></li>
                <li><a href="/book">Book</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact" class="active">Contact</a></li>
                <li><a href="/reviews">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="section" style="max-width: 700px; margin: auto;">
        <h2 style="text-align: center; margin-bottom: 30px;">Get in Touch</h2>
        
        <p style="text-align: center; margin-bottom: 20px;">
            Have a question or suggestion? Fill out the form below and we’ll get back to you!
        </p>

        <form class="form-container" onsubmit="event.preventDefault(); alert('Message sent! (Front-end only)');">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" required placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" rows="5" required placeholder="Type your message here..." style="padding: 10px; border-radius: 6px; border: 1px solid #ccc; width: 100%; font-size: 1rem;"></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>

        <div style="margin-top: 40px;">
            <h4>Contact Info</h4>
            <p>Email: support@safrati.com</p>
            <p>Phone: +961 123 456</p>
            <p>Address: Beirut, Lebanon</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Safrati</h3>
                <p>Your reliable travel companion for unforgettable experiences around the world.</p>
            </div>
            <div class="footer-section links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/destinations">Destinations</a></li>
                    <li><a href="/book">Book</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h4>Contact Us</h4>
                <p>Email: support@safrati.com</p>
                <p>Phone: +961 123 456</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Safrati. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
