<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
        /* Add your CSS styles here */
        .event-container {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .event-name {
            font-weight: bold;
        }
        .event-date {
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Events</h1>
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $database = "your_database";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Prepare and execute a SQL query
    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='event-container'>";
            echo "<p class='event-name'>Event: " . $row["event_name"] . "</p>";
            echo "<p class='event-date'>Date: " . $row["event_date"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }

    // Step 5: Close the database connection
    $conn->close();
    ?>
</div>

</body>
</html>