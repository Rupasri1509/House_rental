<?php
// Database connection details (same as in your existing code)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house_rent";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve house details from the form
    $name = $_POST["name"];
    $location = $_POST["location"];
    $cost = $_POST["cost"];
    $features = $_POST["features"];
    $description = $_POST["description"];
    $sq_feet = $_POST["sq_feet"];
    $ratings = $_POST["ratings"];
    $photo = $_POST["photo"];
    $owner_id = $_POST["owner_id"];

    // Insert the new house details into the 'house' table
    $sql = "INSERT INTO house (name, location, cost, features, description, sq_feet, ratings, photo,owner_id)
            VALUES ('$name', '$location', '$cost', '$features', '$description', '$sq_feet', '$ratings' , '$photo' , 'owner_id')";

    if ($conn->query($sql) == TRUE) {
        echo "House added successfully.";
        header('location: owner_house1.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>