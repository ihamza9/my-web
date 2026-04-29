# TechSolutions - Professional Service Booking Website

A complete, modern, and responsive service booking website built with HTML, CSS, JavaScript, PHP, and MySQL.

## Features

- **Fully Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Modern UI/UX**: Clean design with professional color palette and smooth animations
- **Service Booking System**: Functional booking form connected to MySQL database
- **Contact Form**: Working contact form with message storage
- **Admin Dashboard**: Secure admin panel to view bookings and messages
- **SEO Friendly**: Semantic HTML structure optimized for search engines
- **Fast Loading**: Optimized code structure for quick page loads

## Pages

1. **Home Page**: Hero section, features, testimonials, footer
2. **About Us**: Company story, mission/vision, team section
3. **Services**: Service cards with pricing and booking buttons
4. **Booking Page**: Functional booking form
5. **Contact Us**: Contact form, company info, map placeholder
6. **Admin Dashboard**: View bookings and contact messages

## Technologies Used

- **HTML5**: Semantic markup
- **CSS3**: Modern styling with Flexbox and Grid
- **JavaScript**: Interactive features and form validation
- **PHP**: Server-side processing and database interaction
- **MySQL**: Database for storing bookings and messages

## Setup Instructions

### Prerequisites

1. **Web Server**: Apache/Nginx with PHP support (XAMPP, WAMP, or similar)
2. **PHP**: Version 7.4 or higher
3. **MySQL**: Version 5.7 or higher

### Installation Steps

1. **Clone/Download the Project**:
   - Place all files in your web server's root directory (e.g., `htdocs` for XAMPP)

2. **Database Setup**:
   - Open phpMyAdmin or MySQL command line
   - Create a new database named `service_booking`
   - Import the `database.sql` file (this will create all necessary tables and insert default admin user)

3. **Database Configuration**:
   - The PHP files are configured to connect to MySQL with these default settings:
     - Host: `localhost`
     - Username: `root`
     - Password: (empty)
     - Database: `service_booking`
   - If your MySQL credentials are different, update the connection details in:
     - `booking.php`
     - `contact.php`
     - `admin.php`

4. **Start the Server**:
   - Start Apache and MySQL services in XAMPP/WAMP
   - Open your browser and navigate to `http://localhost/index.php`

### Default Admin Credentials

- **Username**: admin
- **Password**: admin123

Access the admin dashboard at `http://localhost/admin.php`

## File Structure

```
/
├── index.php          # Home page
├── about.php          # About Us page
├── services.php       # Services page
├── booking.php        # Booking form page
├── contact.php        # Contact page
├── admin.php          # Admin dashboard
├── style.css          # Main stylesheet
├── script.js          # JavaScript functionality
└── database.sql       # Database schema and data
```

## Features Overview

### Frontend Features
- Responsive navigation with mobile hamburger menu
- Smooth scrolling between sections
- Form validation with visual feedback
- Hover animations on buttons and cards
- Scroll-triggered animations
- Professional color scheme and typography

### Backend Features
- Secure database connections using prepared statements
- Password hashing for admin authentication
- Session-based admin login system
- Data sanitization and validation
- Error handling and user feedback

### Database Tables
- `bookings`: Stores service booking requests
- `messages`: Stores contact form messages
- `admin`: Stores admin user credentials

## Customization

### Colors
The website uses a professional blue and green color palette. To change colors, modify the CSS custom properties in `style.css`.

### Content
All text content is hardcoded in the PHP files. Replace placeholder text with your actual company information.

### Services
Add or modify services in `services.php` and update the booking form options accordingly.

## Security Notes

- Admin passwords are hashed using PHP's `password_hash()` function
- All database queries use prepared statements to prevent SQL injection
- User inputs are sanitized before database insertion
- Session management for admin authentication

## Browser Compatibility

- Chrome (recommended)
- Firefox
- Safari
- Edge

## Performance

- Optimized images using placeholder URLs (replace with actual optimized images)
- Minimal JavaScript for fast loading
- CSS Grid and Flexbox for efficient layouts
- Semantic HTML for better SEO

## Troubleshooting

### Database Connection Issues
- Ensure MySQL service is running
- Check database credentials in PHP files
- Verify database name matches the one created

### PHP Errors
- Check PHP error logs
- Ensure PHP version is 7.4+
- Verify file permissions

### Admin Login Issues
- Ensure database is properly imported
- Check if admin user exists in database
- Verify password hashing

## Academic Notes

This project demonstrates:
- Full-stack web development skills
- Database design and management
- Responsive web design principles
- User experience design
- Security best practices
- Professional coding standards
