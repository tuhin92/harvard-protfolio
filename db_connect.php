<?php
// --- Database Credentials ---
$servername = "localhost";    // Your server name, usually "localhost"
$username = "root";           // Your database username, usually "root" for local setups
$password = "";               // Your database password, often empty for local setups
$dbname = "harvard";      // The name of the database you created in Step 1

// --- Create Connection ---
$conn = mysqli_connect($servername, $username, $password, $dbname);

// --- Check Connection ---
if (!$conn) {
    // If the connection fails, stop the script and show the error.
    die("Database Connection Failed: " . mysqli_connect_error());
}
