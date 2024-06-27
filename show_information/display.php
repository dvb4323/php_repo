<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Users List</h1>

    <?php
        // Database connection details (replace with your actual credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL statement to fetch all users
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        // Check if any users found
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "</tr>";

            // Loop through each user and display information
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No users found in the database.";
        }

        $conn->close();
    ?>

</body>
</html>
