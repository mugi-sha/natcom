# Natcom - Admin Management System

A PHP-based admin management system with CRUD operations for managing admin users. Features a modern, responsive interface with Bootstrap 5 styling.

## 🌐 Features

- **Admin Registration** - Add new admin users
- **Admin Listing** - View all registered admins
- **Admin Update** - Edit admin user details
- **Admin Deletion** - Remove admin users
- **Responsive Design** - Mobile-friendly interface
- **Modern UI** - Glassmorphism effects with Bootstrap 5

## 🛠 Tech Stack

- **PHP** - Backend logic
- **MySQL** - Database management
- **Bootstrap 5** - Frontend framework
- **Font Awesome** - Icons
- **Animate.css** - CSS animations

## 🚀 Getting Started

### Prerequisites

- PHP 7.0 or higher
- MySQL 5.0 or higher
- Web server (Apache/Nginx) or XAMPP/WAMP

### Installation

1. Clone the repository:
```bash
git clone https://github.com/mugi-sha/natcom.git
```

2. Navigate to the project directory:
```bash
cd natcom
```

3. Configure database connection:
   - Edit `conn.php` or `connection.php` with your database credentials:
```php
$conn = mysqli_connect("localhost", "username", "password", "database_name");
```

4. Create the database table:
```sql
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Running the Project

1. Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP)
2. Access the application via your browser:
```
http://localhost/natcom/admin.php
```

## 📁 Project Structure

```
natcom/
├── admin.php          # Admin registration form
├── list.php           # Display all admins
├── insert.php         # Handle admin insertion
├── update.php         # Handle admin updates
├── delete.php         # Handle admin deletion
├── conn.php           # Database connection
├── connection.php     # Alternative database connection
├── bg form.jpg        # Background image
└── README.md          # Project documentation
```

## 🔧 Configuration

### Database Connection
Update the connection details in `conn.php`:
```php
$conn = mysqli_connect("localhost", "your_username", "your_password", "your_database");
```

### Security Notes
- **Important**: This is a basic implementation. For production use:
  - Implement password hashing (use `password_hash()` and `password_verify()`)
  - Add input validation and sanitization
  - Implement CSRF protection
  - Add session management and authentication
  - Use prepared statements to prevent SQL injection

## 📱 Pages & Functionality

| Page | Description |
|------|-------------|
| `admin.php` | Registration form for new admin users |
| `list.php` | Displays all registered admins in a table |
| `insert.php` | Processes the admin registration form |
| `update.php` | Handles admin user updates |
| `delete.php` | Processes admin deletion requests |

## 🐛 Troubleshooting

**Database connection error:**
- Verify MySQL is running
- Check connection credentials in `conn.php`
- Ensure the database exists

**Form not submitting:**
- Check PHP error logs
- Verify file permissions
- Ensure form action paths are correct

## 👤 Author

**Mugisha David** - [GitHub](https://github.com/mugi-sha)

## 📄 License

This project is open source and available under the MIT License.
