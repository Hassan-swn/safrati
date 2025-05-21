<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book a Trip | Safrati</title>
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
                <li><a href="/book" class="active">Book</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/reviews">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <!-- Booking Section -->
    <section class="section booking-form" style="max-width: 700px; margin: auto;">
        <h2 style="text-align: center; margin-bottom: 20px;">Book Your Trip</h2>

        <form id="bookingForm" class="form-container">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" required placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="destination">Destination:</label>
                <select id="destination" required>
                    <option value="">-- Select a Destination --</option>
                    <option value="Paris">Paris</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="Bali">Bali</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Rome">Rome</option>
                    <option value="Cairo">Cairo</option>
                    <option value="London">London</option>
                    <option value="Istanbul">Istanbul</option>
                    <option value="New York">New York</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Travel Date:</label>
                <input type="date" id="date" required>
            </div>

            <div class="form-group">
                <label for="tickets">Number of Tickets:</label>
                <input type="number" id="tickets" min="1" max="10" required>
            </div>

            <button type="submit" class="btn">Submit Booking</button>
        </form>
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

    <!-- JavaScript Validation -->
  <script>
    document.getElementById('bookingForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const destination = document.getElementById('destination').value;
        const date = document.getElementById('date').value;
        const tickets = parseInt(document.getElementById('tickets').value);

        let errors = [];

        // Validate name
        if (!name) {
            errors.push("Name is required.");
        }

        // Validate email format
        const emailPattern = /^\S+@\S+\.\S+$/;
        if (!email || !emailPattern.test(email)) {
            errors.push("A valid email is required.");
        }

        // Validate destination
        if (!destination) {
            errors.push("Please select a destination.");
        }

        // Validate travel date (today or future)
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        const selectedDate = new Date(date);
        selectedDate.setHours(0, 0, 0, 0);

        if (!date || selectedDate < today) {
            errors.push("Travel date must be today or in the future.");
        }

        // Validate number of tickets
        if (isNaN(tickets) || tickets < 1 || tickets > 10) {
            errors.push("Tickets must be between 1 and 10.");
        }

        // Show alert or reset form
        if (errors.length > 0) {
            alert("Please fix the following:\n\n" + errors.join("\n"));
        } else {
            alert("Booking submitted successfully! (Frontend only)");
            document.getElementById('bookingForm').reset();
        }
    });
</script>



</body>
</html>
