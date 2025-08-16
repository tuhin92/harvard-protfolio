<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Info Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            color: #28a745;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .student-card {
            background: #fff;
            border-radius: 8px;
            padding: 15px 20px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .student-card:hover {
            transform: scale(1.03);
        }

        .student-info {
            line-height: 1.6;
        }

        .student-info strong {
            color: #007bff;
        }

        .no-data {
            text-align: center;
            font-size: 18px;
            margin-top: 40px;
            color: #999;
        }
    </style>
</head>
<body>

    <h1>🎓 Student Information</h1>

    <?php
    require_once 'db_connect.php';

    // Query to count total students
    $sql_count = "SELECT COUNT(*) AS total FROM users";
    $count_result = mysqli_query($conn, $sql_count);

    if ($count_row = mysqli_fetch_assoc($count_result)) {
        echo "<h2>📊 Total Students: {$count_row['total']}</h2>";
    } else {
        echo "<h2 style='color: #dc3545;'>Unable to fetch student count.</h2>";
    }

    echo "<h3 style='text-align:center;'>Fetching student records from the database...</h3>";

    // Query to get student details
    $sql = "SELECT id, name, email FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='card-container'>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='student-card'>
                    <div class='student-info'>
                        <p><strong>ID:</strong> {$row['id']}</p>
                        <p><strong>Name:</strong> {$row['name']}</p>
                        <p><strong>Email:</strong> {$row['email']}</p>
                    </div>
                  </div>";
        }
        echo "</div>";
    } else {
        echo "<div class='no-data'>No students found in the database.</div>";
    }

    mysqli_close($conn);
    ?>

</body>
</html>