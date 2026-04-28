<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Service - TechSolutions</title>
    <meta name="description" content="Book your technology service with TechSolutions. Fill out our booking form to get started.">
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

    <section class="booking-hero">
        <div class="container">
            <h2>Book Your Service</h2>
            <p>Fill out the form below to schedule your consultation or service.</p>
        </div>
    </section>

    <section class="booking-form">
        <div class="container">
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

                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $service_type = $_POST['service_type'];
                $preferred_date = $_POST['preferred_date'];
                $notes = $_POST['notes'];

                $sql = "INSERT INTO bookings (full_name, email, phone, service_type, preferred_date, notes) VALUES (?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $full_name, $email, $phone, $service_type, $preferred_date, $notes);

                if ($stmt->execute()) {
                    echo "<div class='success-message'>Thank you! Your booking request has been submitted successfully. We'll contact you soon.</div>";
                } else {
                    echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                }

                $stmt->close();
                $conn->close();
            }
            ?>

            <form action="booking.php" method="post" id="bookingForm">
                <div class="form-group">
                    <label for="full_name">Full Name *</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="service_type">Service Type *</label>
                    <select id="service_type" name="service_type" required>
                        <option value="">Select a service</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Mobile App Development">Mobile App Development</option>
                        <option value="IT Consulting">IT Consulting</option>
                        <option value="Cloud Services">Cloud Services</option>
                        <option value="Data Analytics">Data Analytics</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="preferred_date">Preferred Date *</label>
                    <input type="date" id="preferred_date" name="preferred_date" required>
                </div>
                <div class="form-group">
                    <label for="notes">Additional Notes</label>
                    <textarea id="notes" name="notes" rows="4"></textarea>
                </div>
                <button type="submit" class="submit-button">Submit Booking</button>
            </form>
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