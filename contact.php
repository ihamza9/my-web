<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TechSolutions</title>
    <meta name="description" content="Get in touch with TechSolutions. Contact us for inquiries, support, or to learn more about our services.">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>TechSolutions</h1>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="booking.php">Book Now</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section class="contact-hero">
        <div class="container">
            <h2>Contact Us</h2>
            <p>We're here to help. Reach out with any questions or inquiries.</p>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "service_booking";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];

                        $sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";

                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sss", $name, $email, $message);

                        if ($stmt->execute()) {
                            echo "<div class='success-message'>Thank you! Your message has been sent successfully. We'll get back to you soon.</div>";
                        } else {
                            echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                        }

                        $stmt->close();
                        $conn->close();
                    }
                    ?>

                    <form action="contact.php" method="post" id="contactForm">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <div class="info-item">
                        <h4>Email</h4>
                        <p>info@techsolutions.com</p>
                    </div>
                    <div class="info-item">
                        <h4>Phone</h4>
                        <p>(555) 123-4567</p>
                    </div>
                    <div class="info-item">
                        <h4>Address</h4>
                        <p>123 Tech Street<br>Silicon Valley, CA 94043<br>United States</p>
                    </div>
                    <div class="info-item">
                        <h4>Business Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                    </div>
                    <div class="map-placeholder">
                        <h4>Our Location</h4>
                        <div class="map">
                            <p>Google Map Placeholder</p>
                            <p>123 Tech Street, Silicon Valley, CA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>TechSolutions</h3>
                    <p>Empowering businesses through technology since 2018.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p>Email: info@techsolutions.com</p>
                    <p>Phone: (555) 123-4567</p>
                    <p>Address: 123 Tech Street, Silicon Valley, CA</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 TechSolutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>