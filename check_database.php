<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Status Check</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }
        .status { padding: 15px; margin: 10px 0; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        .btn { background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h1>🔍 Database Status Check</h1>
    
    <?php
    require_once 'db_connect.php';
    
    echo "<div class='status success'>✅ Database connection successful!</div>";
    
    // Check if harvard database exists
    $db_check = mysqli_query($conn, "SELECT DATABASE()");
    $current_db = mysqli_fetch_row($db_check);
    echo "<div class='status info'>📊 Current database: " . $current_db[0] . "</div>";
    
    // Check if crud_operations table exists
    $table_check = mysqli_query($conn, "SHOW TABLES LIKE 'crud_operations'");
    
    if (mysqli_num_rows($table_check) > 0) {
        echo "<div class='status success'>✅ Table 'crud_operations' exists!</div>";
        
        // Count records
        $count_check = mysqli_query($conn, "SELECT COUNT(*) as count FROM crud_operations");
        $count_result = mysqli_fetch_assoc($count_check);
        echo "<div class='status info'>📈 Records in table: " . $count_result['count'] . "</div>";
        
        echo "<a href='crud_operations.php' class='btn'>Go to CRUD Operations</a>";
    } else {
        echo "<div class='status error'>❌ Table 'crud_operations' does not exist!</div>";
        echo "<p><strong>Solutions:</strong></p>";
        echo "<a href='setup_crud_table.php' class='btn'>Auto-Create Table</a>";
        echo "<p><em>Or manually run the SQL from crud_operations_table.sql in phpMyAdmin</em></p>";
    }
    
    // Show all tables in harvard database
    echo "<h3>Tables in 'harvard' database:</h3>";
    $tables_result = mysqli_query($conn, "SHOW TABLES");
    if (mysqli_num_rows($tables_result) > 0) {
        echo "<ul>";
        while($table = mysqli_fetch_row($tables_result)) {
            echo "<li>" . $table[0] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No tables found in database.</p>";
    }
    
    mysqli_close($conn);
    ?>
    
    <p><a href="portfolio.php">← Back to Portfolio</a></p>
</body>
</html>
