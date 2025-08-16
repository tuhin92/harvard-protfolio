<?php
// This script creates the crud_operations table automatically
require_once 'db_connect.php';

echo "<h2>Setting up CRUD Operations Database...</h2>";

// Create the table
$create_table_sql = "CREATE TABLE IF NOT EXISTS crud_operations (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $create_table_sql)) {
    echo "<p style='color: green;'>✅ Table 'crud_operations' created successfully!</p>";
    
    // Check if table has data
    $check_data = "SELECT COUNT(*) as count FROM crud_operations";
    $result = mysqli_query($conn, $check_data);
    $row = mysqli_fetch_assoc($result);
    
    if ($row['count'] == 0) {
        // Insert sample data
        $insert_data = "INSERT INTO crud_operations (name, email, phone, address) VALUES 
            ('Ali Emam Al Mamun', 'mamun15-4861@diu.edu.bd', '+880 1234567890', 'Dhaka, Bangladesh'),
            ('Tuhin Al Mamun', 'tuhinalmamun71m@gmail.com', '+880 9876543210', 'Chittagong, Bangladesh')";
        
        if (mysqli_query($conn, $insert_data)) {
            echo "<p style='color: green;'>✅ Sample data inserted successfully!</p>";
        } else {
            echo "<p style='color: red;'>❌ Error inserting sample data: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p style='color: blue;'>ℹ️ Table already contains {$row['count']} records.</p>";
    }
    
    echo "<p><strong>Setup completed!</strong></p>";
    echo "<p><a href='crud_operations.php'>Go to CRUD Operations →</a></p>";
    echo "<p><a href='portfolio.php'>← Back to Portfolio</a></p>";
    
} else {
    echo "<p style='color: red;'>❌ Error creating table: " . mysqli_error($conn) . "</p>";
}

mysqli_close($conn);
?>
