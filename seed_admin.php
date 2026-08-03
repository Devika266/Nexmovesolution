<?php
$mysqli = new mysqli('localhost', 'root', '', 'nexmove');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if admin table exists
$tableCheck = $mysqli->query("SHOW TABLES LIKE 'admin'");
if ($tableCheck->num_rows == 0) {
    $mysqli->query("CREATE TABLE admin (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "Admin table created.\n";
}

// Check if admin user exists
$result = $mysqli->query("SELECT id, username, email FROM admin");
echo "Existing admin users:\n";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "  - Username: " . $row['username'] . " / Email: " . $row['email'] . "\n";
    }
} else {
    // Seed default admin
    $username = 'admin';
    $email = 'admin@admin.com';
    $password = password_hash('admin123', PASSWORD_DEFAULT);
    $stmt = $mysqli->prepare("INSERT INTO admin (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $username, $email, $password);
    if ($stmt->execute()) {
        echo "Default admin user created!\n";
        echo "  Username: admin (or admin@admin.com)\n";
        echo "  Password: admin123\n";
    } else {
        echo "Error creating user: " . $stmt->error . "\n";
    }
    $stmt->close();
}
$mysqli->close();

