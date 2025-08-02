📋 Contact Management System 🚀
Welcome to the Contact Management System! 🎉 This is a simple yet powerful web application built with PHP and MySQL to manage your contacts efficiently. Whether you want to add, edit, view, or delete contacts, this app has got you covered! 💼✨
🌟 Features

➕ Add Contacts: Easily add new contacts with details like name, phone, email, and address.
📝 Edit Contacts: Update contact information with a user-friendly form.
🗑️ Delete Contacts: Remove unwanted contacts with a confirmation prompt for safety.
📋 View Contacts: Display all contacts in a clean, responsive table.
🔒 Secure: Uses PDO with prepared statements to prevent SQL injection and htmlspecialchars to avoid XSS attacks.
🎨 Responsive Design: Built with Bootstrap 5 for a modern and mobile-friendly interface.
🕒 Timestamp Tracking: Automatically tracks when contacts are added.

🛠️ Technologies Used

PHP 8.x 🐘: Backend logic and database interaction.
MySQL 🗄️: Database for storing contact information.
Bootstrap 5 🎨: For a sleek and responsive front-end.
HTML/CSS/JavaScript 🌐: For structure, styling, and interactivity.
Apache 🌍: Web server to host the application.

📦 Prerequisites
Before you dive in, make sure you have the following installed:

🖥️ Web Server: Apache (or any server supporting PHP, e.g., Nginx).
🐘 PHP: Version 8.0 or higher with pdo_mysql and mysqli extensions.
🗄️ MySQL: Version 5.7 or higher (or MariaDB).
🌐 Browser: Any modern browser (Chrome, Firefox, Edge, etc.).
(Optional) Git to clone the repository.

⚙️ Installation
Follow these steps to get the project up and running on your local machine! 🚀

Clone the Repository 📥:
git clone https://github.com/your-username/contact-management-system.git
cd contact-management-system


Set Up the Database 🗄️:

Create a MySQL database named contact_management.
Run the following SQL to create the contacts table:CREATE DATABASE contact_management;
USE contact_management;
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(15),
    email VARCHAR(100),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);




Configure Database Connection 🔗:

Open config.php and update the database credentials:<?php
$host = 'localhost';
$dbname = 'contact_management';
$username = 'root';
$password = 'your_mysql_password'; // Replace with your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>




Set Up Web Server 🌍:

Place the project folder in your web server's root directory (e.g., C:\Apache24\htdocs\contact-management for Apache).
Ensure Apache and MySQL services are running.


Access the Application 🚀:

Open your browser and navigate to:http://localhost/contact-management/index.php


You should see the contact management interface! 🎉



🖱️ Usage

View Contacts 📋: The main page (index.php) displays all contacts in a table.
Add a Contact ➕: Click the "Add New Contact" button to go to add.php and fill in the contact details.
Edit a Contact 📝: Click the "Edit" button next to a contact to modify its details in edit.php.
Delete a Contact 🗑️: Click the "Delete" button and confirm to remove a contact via delete.php.

📂 Project Structure
contact-management-system/
├── config.php         # Database configuration
├── index.php         # Main page to view contacts
├── add.php           # Page to add a new contact
├── edit.php          # Page to edit a contact
├── delete.php        # Script to delete a contact
├── css/              # Custom styles (optional)
└── README.md         # This file

🐛 Troubleshooting

White Screen or Errors? 😕
Ensure PHP error reporting is enabled in php.ini:display_errors = On
error_reporting = E_ALL


Check Apache logs (error.log) and PHP logs for details.


Database Connection Failed? 🔌
Verify MySQL is running and credentials in config.php are correct.


Page Not Found? 🌐
Ensure the project is in the correct web server directory and the URL is correct (e.g., http://localhost/contact-management/).



🚀 Future Enhancements

🔍 Add a search feature to filter contacts.
📄 Implement pagination for large contact lists.
🖼️ Allow uploading contact photos.
🔐 Add user authentication for secure access.
📊 Export contacts to CSV or PDF.

🤝 Contributing
Contributions are welcome! 🙌 Fork the repository, make your changes, and submit a pull request. Please follow the coding style and add tests for new features.

Fork the repo 🍴
Create a new branch (git checkout -b feature/awesome-feature) 🌿
Commit your changes (git commit -m 'Add awesome feature') 💾
Push to the branch (git push origin feature/awesome-feature) 🚀
Open a Pull Request 📬

📜 License
This project is licensed under the MIT License. See the LICENSE file for details.
🙏 Acknowledgments

Thanks to Bootstrap for the awesome CSS framework! 🎨
Inspired by simple CRUD applications for learning PHP. 📚
Built with ❤️ for the open-source community!
