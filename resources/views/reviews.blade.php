<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveler Reviews | Safrati</title>
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
                <li><a href="/contact">Contact</a></li>
                <li><a href="/reviews" class="active">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <!-- Reviews Section -->
    <section class="section testimonials">
        <h2 style="text-align: center; margin-bottom: 30px;">What Our Travelers Say</h2>
        <div class="review-boxes">
            <div class="review-box">
                <img src="{{ asset('images/users/amina.jpg') }}" alt="Amina">
                <p>“Safrati helped me plan the best honeymoon ever. Highly recommend!”</p>
                <span>– Amina R.</span>
            </div>
            <div class="review-box">
                <img src="{{ asset('images/users/fadi.jpg') }}" alt="Fadi">
                <p>“Super easy booking and great customer support. Tokyo was amazing!”</p>
                <span>– Fadi K.</span>
            </div>
            <div class="review-box">
                <img src="{{ asset('images/users/nour.jpg') }}" alt="Nour">
                <p>“Affordable and beautiful destinations. Will use Safrati again.”</p>
                <span>– Nour M.</span>
            </div>
            <div class="review-box">
                <img src="{{ asset('images/users/samir.jpg') }}" alt="Samir">
                <p>“I went to Rome through Safrati, and it was unforgettable. Everything was well organized!”</p>
                <span>– Samir T.</span>
            </div>
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
