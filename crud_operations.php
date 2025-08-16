<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations - Student Management</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 10px;
            font-size: 2.5rem;
        }

        h2 {
            text-align: center;
            color: #28a745;
            margin-bottom: 30px;
        }

        /* Form Styles */
        .form-container {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.5rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        label {
            color: #555;
            font-weight: 500;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            padding: 12px 15px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        button {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        .btn-success {
            background: #28a745;
            color: white;
        }

        .btn-success:hover {
            background: #1e7e34;
            transform: translateY(-2px);
        }

        .btn-warning {
            background: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background: #e0a800;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
            transform: translateY(-2px);
        }

        /* Card Styles */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .student-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid #007bff;
        }

        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .student-info {
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .student-info p {
            margin: 8px 0;
        }

        .student-info strong {
            color: #007bff;
            font-weight: 600;
        }

        .card-actions {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 0.875rem;
        }

        .no-data {
            text-align: center;
            font-size: 18px;
            margin-top: 40px;
            color: #999;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Navigation */
        .nav-link {
            display: inline-block;
            padding: 10px 20px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 20px;
            transition: background 0.3s ease;
        }

        .nav-link:hover {
            background: #545b62;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .form-group.full-width {
                grid-column: span 1;
            }
            .card-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="portfolio.php" class="nav-link">← Back to Portfolio</a>
        
        <h1>🎓 CRUD Operations</h1>
        <h2>Student Management System</h2>

        <?php
        require_once 'db_connect.php';

        // Check if table exists, if not, show setup instructions
        $table_check = mysqli_query($conn, "SHOW TABLES LIKE 'crud_operations'");
        if (mysqli_num_rows($table_check) == 0) {
            echo "<div class='alert alert-danger'>
                    <h3>⚠️ Database Setup Required</h3>
                    <p>The 'crud_operations' table doesn't exist in your database.</p>
                    <p><strong>Please run:</strong> <a href='setup_crud_table.php' style='background: #007bff; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px;'>Setup Database Table</a></p>
                    <p><small>Or manually import the SQL file: <code>crud_operations_table.sql</code></small></p>
                  </div>";
            mysqli_close($conn);
            echo "</div></body></html>";
            exit;
        }

        $message = '';
        $message_type = '';

        // Handle form submissions
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['action'])) {
                switch ($_POST['action']) {
                    case 'create':
                        $name = mysqli_real_escape_string($conn, $_POST['name']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                        $address = mysqli_real_escape_string($conn, $_POST['address']);
                        
                        $sql = "INSERT INTO crud_operations (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
                        if (mysqli_query($conn, $sql)) {
                            $message = "Student record created successfully!";
                            $message_type = 'success';
                        } else {
                            $message = "Error: " . mysqli_error($conn);
                            $message_type = 'danger';
                        }
                        break;
                        
                    case 'update':
                        $id = (int)$_POST['id'];
                        $name = mysqli_real_escape_string($conn, $_POST['name']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                        $address = mysqli_real_escape_string($conn, $_POST['address']);
                        
                        $sql = "UPDATE crud_operations SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";
                        if (mysqli_query($conn, $sql)) {
                            $message = "Student record updated successfully!";
                            $message_type = 'success';
                        } else {
                            $message = "Error: " . mysqli_error($conn);
                            $message_type = 'danger';
                        }
                        break;
                        
                    case 'delete':
                        $id = (int)$_POST['id'];
                        $sql = "DELETE FROM crud_operations WHERE id=$id";
                        if (mysqli_query($conn, $sql)) {
                            $message = "Student record deleted successfully!";
                            $message_type = 'success';
                        } else {
                            $message = "Error: " . mysqli_error($conn);
                            $message_type = 'danger';
                        }
                        break;
                }
            }
        }

        // Display messages
        if ($message) {
            echo "<div class='alert alert-$message_type'>$message</div>";
        }

        // Get student for editing
        $edit_student = null;
        if (isset($_GET['edit'])) {
            $edit_id = (int)$_GET['edit'];
            $edit_sql = "SELECT * FROM crud_operations WHERE id=$edit_id";
            $edit_result = mysqli_query($conn, $edit_sql);
            $edit_student = mysqli_fetch_assoc($edit_result);
        }
        ?>

        <!-- Form Section -->
        <div class="form-container">
            <h3 class="form-title">
                <?php echo $edit_student ? '📝 Update Student' : '➕ Add New Student'; ?>
            </h3>
            <form method="POST">
                <input type="hidden" name="action" value="<?php echo $edit_student ? 'update' : 'create'; ?>">
                <?php if ($edit_student): ?>
                    <input type="hidden" name="id" value="<?php echo $edit_student['id']; ?>">
                <?php endif; ?>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required 
                               value="<?php echo $edit_student ? htmlspecialchars($edit_student['name']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required 
                               value="<?php echo $edit_student ? htmlspecialchars($edit_student['email']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" 
                               value="<?php echo $edit_student ? htmlspecialchars($edit_student['phone']) : ''; ?>">
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="address">Address</label>
                        <textarea id="address" name="address"><?php echo $edit_student ? htmlspecialchars($edit_student['address']) : ''; ?></textarea>
                    </div>
                </div>
                
                <div class="btn-group">
                    <button type="submit" class="btn-primary">
                        <?php echo $edit_student ? '🔄 Update Student' : '➕ Add Student'; ?>
                    </button>
                    <?php if ($edit_student): ?>
                        <a href="crud_operations.php" class="btn-warning" style="text-decoration: none; display: inline-block;">
                            ❌ Cancel Edit
                        </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <?php
        // Display student count
        $sql_count = "SELECT COUNT(*) AS total FROM crud_operations";
        $count_result = mysqli_query($conn, $sql_count);
        if ($count_row = mysqli_fetch_assoc($count_result)) {
            echo "<h2>📊 Total Students: {$count_row['total']}</h2>";
        }

        // Query to get all students
        $sql = "SELECT * FROM crud_operations ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='card-container'>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='student-card'>
                        <div class='student-info'>
                            <p><strong>ID:</strong> {$row['id']}</p>
                            <p><strong>Name:</strong> " . htmlspecialchars($row['name']) . "</p>
                            <p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>
                            <p><strong>Phone:</strong> " . htmlspecialchars($row['phone']) . "</p>
                            <p><strong>Address:</strong> " . htmlspecialchars($row['address']) . "</p>
                            <p><strong>Created:</strong> " . date('M j, Y g:i A', strtotime($row['created_at'])) . "</p>
                        </div>
                        <div class='card-actions'>
                            <a href='crud_operations.php?edit={$row['id']}' class='btn-warning btn-sm'>✏️ Edit</a>
                            <form method='POST' style='display: inline;' onsubmit='return confirm(\"Are you sure you want to delete this student?\");'>
                                <input type='hidden' name='action' value='delete'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit' class='btn-danger btn-sm'>🗑️ Delete</button>
                            </form>
                        </div>
                      </div>";
            }
            echo "</div>";
        } else {
            echo "<div class='no-data'>📋 No students found in the database.<br><small>Add your first student using the form above!</small></div>";
        }

        mysqli_close($conn);
        ?>
    </div>

    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.opacity = '0';
                alert.style.transition = 'opacity 0.5s ease';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
    </script>
</body>
</html>
