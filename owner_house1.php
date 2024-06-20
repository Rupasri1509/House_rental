<?php
// Database connection details
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

// Query to fetch property data from the 'house' table
$sql = "SELECT name, location, cost, features, description, sq_feet, ratings FROM house";
$result = $conn->query($sql);
$propertyData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $propertyData[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Your existing HTML head section ... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="houses.css">
    <title>Property Listing</title>
    <style>
        /* Add CSS styles as needed */
        .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 12px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.grid img{
  width: 100%;
  height: 100%;
  cursor: pointer;
}
body {
    background-image: url('Welcome.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Optional: This makes the background image fixed while scrolling */
}

    </style>
</head>
<body>
    <div class="topnav">
        <!-- ... Your existing top navigation ... -->
        <a class="active" href="#home">Home</a>
        <a href="addhouse.html">Add a house</a>
        <a href="houses.php">Houses</a>
       <a href="index.html">Sign Out</a>
    </div>

    <div class="wel"></div>
    

   <!-- ... Your existing HTML ... -->

<!-- ... Your existing HTML ... -->
</body>
</html>
