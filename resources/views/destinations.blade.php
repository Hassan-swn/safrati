<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destinations | Safrati</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="navbar-container">
        <div class="logo"><a href="/">Safrati</a></div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/destinations" class="active">Destinations</a></li>
            <li><a href="/book">Book</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/reviews">Reviews</a></li>
        </ul>
    </div>
</nav>

<!-- Destinations -->
<section class="section">
    <h2 style="text-align: center; margin-bottom: 30px;">Explore Our Destinations</h2>
    <div class="destinations">

        <!-- Repeat for each destination -->
        <div class="card">
            <img src="{{ asset('images/paris.jpg') }}" alt="Paris">
            <h3>Paris</h3>
            <p>Romantic city with iconic landmarks like the Eiffel Tower.</p>
            <p class="price">From $499</p>
            <p class="guests">👥 1,240 guests</p>
            <p class="rating">⭐ 4.8/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/tokyo.jpg') }}" alt="Tokyo">
            <h3>Tokyo</h3>
            <p>Futuristic city with cherry blossoms and temples.</p>
            <p class="price">From $699</p>
            <p class="guests">👥 2,010 guests</p>
            <p class="rating">⭐ 4.7/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/bali.jpg') }}" alt="Bali">
            <h3>Bali</h3>
            <p>Tropical paradise with beaches and rice terraces.</p>
            <p class="price">From $599</p>
            <p class="guests">👥 3,450 guests</p>
            <p class="rating">⭐ 4.9/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/dubai.jpg') }}" alt="Dubai">
            <h3>Dubai</h3>
            <p>Luxury shopping, desert adventures, and skyscrapers.</p>
            <p class="price">From $550</p>
            <p class="guests">👥 2,870 guests</p>
            <p class="rating">⭐ 4.6/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/rome.jpg') }}" alt="Rome">
            <h3>Rome</h3>
            <p>Walk through ancient history and enjoy Italian cuisine.</p>
            <p class="price">From $520</p>
            <p class="guests">👥 1,980 guests</p>
            <p class="rating">⭐ 4.5/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/cairo.jpg') }}" alt="Cairo">
            <h3>Cairo</h3>
            <p>Visit the pyramids and explore Egyptian history.</p>
            <p class="price">From $460</p>
            <p class="guests">👥 2,200 guests</p>
            <p class="rating">⭐ 4.4/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/london.jpg') }}" alt="London">
            <h3>London</h3>
            <p>Explore Big Ben, British culture, and modern attractions.</p>
            <p class="price">From $610</p>
            <p class="guests">👥 3,300 guests</p>
            <p class="rating">⭐ 4.6/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/istanbul.jpg') }}" alt="Istanbul">
            <h3>Istanbul</h3>
            <p>A unique blend of European and Asian culture.</p>
            <p class="price">From $490</p>
            <p class="guests">👥 2,800 guests</p>
            <p class="rating">⭐ 4.5/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
        </div>

        <div class="card">
            <img src="{{ asset('images/newyork.jpg') }}" alt="New York">
            <h3>New York</h3>
            <p>The city that never sleeps – Broadway, Times Square, and more.</p>
            <p class="price">From $720</p>
            <p class="guests">👥 3,950 guests</p>
            <p class="rating">⭐ 4.9/5</p>
            <button class="fav-btn" onclick="toggleFavorite(this)">♡ Add to Favorites</button>
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

<!-- JavaScript for Favorite Button -->
<script>
    function toggleFavorite(btn) {
        btn.classList.toggle('active');
        btn.innerText = btn.classList.contains('active') ? '❤️ Favorited' : '♡ Add to Favorites';
    }
</script>

</body>
</html>
