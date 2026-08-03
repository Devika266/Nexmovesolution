<?php
$mysqli = new mysqli('localhost', 'root', '', 'nexmove');
$result = $mysqli->query("SELECT id, username, email, password FROM admin WHERE username='admin'");
if ($row = $result->fetch_assoc()) {
    echo "User found:\n";
    echo "  ID: " . $row['id'] . "\n";
    echo "  Username: " . $row['username'] . "\n";
    echo "  Email: " . $row['email'] . "\n";
    echo "  Password hash: " . $row['password'] . "\n";
    if (password_verify('admin123', $row['password'])) {
        echo "  ✓ Password 'admin123' matches!\n";
    } else {
        echo "  ✗ Password 'admin123' does NOT match. Updating...\n";
        $newHash = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $mysqli->prepare("UPDATE admin SET password=? WHERE id=?");
        $stmt->bind_param('si', $newHash, $row['id']);
        $stmt->execute();
        echo "  ✓ Password updated to match 'admin123'\n";
    }
} else {
    echo "No admin user found. Creating...\n";
    $hash = password_hash('admin123', PASSWORD_DEFAULT);
    $stmt = $mysqli->prepare("INSERT INTO admin (username, email, password) VALUES (?, ?, ?)");
    $user = 'admin';
    $email = 'admin@admin.com';
    $stmt->bind_param('sss', $user, $email, $hash);
    $stmt->execute();
    echo "  ✓ Created admin / admin123\n";
}
echo "\nYou can login at: http://localhost/adminpanel/index.php/admin/login\n";
echo "Username: admin (or admin@admin.com)\n";
echo "Password: admin123\n";
$mysqli->close();

