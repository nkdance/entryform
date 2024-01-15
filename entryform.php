<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $country = $_POST["country"];
    $studio = $_POST["studio"];
    $names = $_POST["names"];
    $age = $_POST["age"];
    $category = $_POST["category"];

    // Process data (you can save it to a database here)

    // Display confirmation message
    echo "<h2>Registration Successful</h2>";
    echo "<p>Thank you for registering for the dance competition!</p>";
    echo "<p>Details:</p>";
    echo "<p>Country: $country</p>";
    echo "<p>Dancing Studio: $studio</p>";
    echo "<p>Full Names: $names</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Category: $category</p>";
} else {
    // Redirect to the registration form if accessed directly
    header("Location: index.html");
    exit();
}
?>

