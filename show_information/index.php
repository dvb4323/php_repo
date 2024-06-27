<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
</head>
<body>
    <?php
        // Display a success message if registration is successful (optional)
        if (isset($_GET["success"])) {
            echo "<p style='color:green;'>Registration successful!</p>";
        }
    ?>
    <h1>User Registration</h1>
    <form action="register.php" method="post">
        <label for="username">Name:</label>
        <input type="text" name="username" placeholder="Your Name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="youremail@example.com" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
