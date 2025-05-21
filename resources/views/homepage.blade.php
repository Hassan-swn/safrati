<!DOCTYPE html>
<html lang="en">

    <nav class="navbar">
    <div class="navbar-container">
        <div class="logo"><a href="/">Safrati</a></div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/destinations">Destinations</a></li>
            <li><a href="/book">Book</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/reviews">Reviews</a></li>
        </ul>
    </div>
</nav>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safrati</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>
  


    <!-- Hero Section -->
    <header>
        <div>
            <h1>Welcome to Safrati</h1>
            <a href="{{ url('/book') }}" class="btn">Book a Ticket</a>

        </div>
    </header>

    <!-- Destinations Section -->
    <section class="section">
        <h2 style="text-align: center; margin-bottom: 30px;">Popular Destinations</h2>
        <div class="destinations">
            <div class="card">
                <img src="{{ asset('images/paris.jpg') }}" alt="Paris">
                <h3>Paris</h3>
                <p>Enjoy romantic vibes and iconic landmarks in the City of Lights.</p>
                <p class="price">Price: $499</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/tokyo.jpg') }}" alt="Tokyo">
                <h3>Tokyo</h3>
                <p>Explore futuristic city life and rich traditions in Japan’s capital.</p>
                <p class="price">Price: $699</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/bali.jpg') }}" alt="Bali">
                <h3>Bali</h3>
                <p>Relax on beautiful beaches and immerse yourself in tropical serenity.</p>
                <p class="price">Price: $599</p>
            </div>
        </div>
    </section>

   


    <!-- Testimonial Reviews Section -->
    <!-- Testimonial Reviews Section -->
<section class="section testimonials">
    <h2>Traveler Testimonials</h2>
    <div class="review-boxes">
        <div class="review-box">
            <img src="{{ asset('images/users/amina.jpg') }}" alt="Amina">
            <p>“Safrati helped me plan the best honeymoon ever. Highly recommend!”</p>
            <span>– Amina R.</span>
        </div>
        <div class="review-box">
            <img src="{{ asset('images/users/kashmir.jpg') }}" alt="Kashmir">
            <p>“Super easy booking and great customer support. Tokyo was amazing!”</p>
            <span>– Kashmir K.</span>
        </div>
        <div class="review-box">
            <img src="{{ asset('images/users/ali.jpg') }}" alt="Ali">
            <p>“Affordable and beautiful destinations. Will use Safrati again.”</p>
            <span>– Ali M.</span>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Book Now</a></li>
                    <li><a href="#">Contact</a></li>
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
