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
$sql = "SELECT name, location, cost, features, description, sq_feet, ratings, photo FROM house";
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
    <!-- Your existing HTML head section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="houses.css">
    <title>Property Listing</title>
    <style>
        /* CSS to style the properties */
        .property {
            display: flex;
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .prop-image {
            width: 300px; /* Set a fixed width for the image */
            height: 350px; /* Set a fixed height for the image */
            object-fit: cover;
            margin-right: 20px;
        }

        .prop-details {
            flex-grow: 1;
        }

        .prop-title {
            font-size: 20px;
        }

        .prop-ratings {
            margin-top: 5px;
            color: #f0a500; /* Star color */
        }

        .star {
            font-size: 18px;
        }

        .prop-loc,
        .prop-size,
        .prop-rent,
        .prop-features,
        .prop-description {
            margin: 10px 0;
        }

        .details-button {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <!-- Your navigation bar code here -->
    <div class="topnav">
        <!-- ... Your existing top navigation ... -->
        <a class="active" href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#"><span class="glyphicon glyphicon-user"></span>Hi 
        <?php session_start();echo $_SESSION['uname'];?></a>
        <span>Find House</span>
        <input type="text" id="locationSearch" placeholder="Location..">
        <a href="index.html"><span class="glyphicon glyphicon-user"></span>Sign Out</a>
    </div>
    <div id="propertyList">
        <?php
        // Loop through property data
        foreach ($propertyData as $property) {
            echo '<section class="property">';
            echo '<img src="' . $property['photo'] . '" alt="Property image" class="prop-image">';

            echo '<div class="prop-details">';
            echo '<h1 class="prop-title">' . $property['name'] . '</h1>';
            echo '<div class="prop-ratings">';
            
            // Display star ratings based on the 'ratings' field
            $ratings = $property['ratings'];
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $ratings) {
                    echo '<span class="star">&#9733;</span>'; // Full star
                } else {
                    echo '<span class="star">&#9734;</span>'; // Empty star
                }
            }
            
            echo '</div>'; // Close prop-ratings div
            echo '<p class="prop-loc">Location: ' . $property['location'] . '</p>';
            echo '<p class="prop-size">Size: ' . $property['sq_feet'] . ' Sq.ft</p>';
            echo '<p class="prop-rent">Cost: RS: ' . $property['cost'] . ' per month</p>';
            echo '<p class="prop-features">Features: ' . $property['features'] . '</p>';
            echo '<p class="prop-description">Description: ' . $property['description'] . '</p>';
            
            // Add a booking button that links to book.php with house details
            echo '<a href="book.php?name=' . $property['name'] . '&location=' . $property['location'] . '&cost=' . $property['cost'] . '&features=' . $property['features'] . '&description=' . $property['description'] . '&sq_feet=' . $property['sq_feet'] . '" class="details-button">Book Now </a>';
            echo '<br>';
            echo '<br>';
            echo '<a href="give_ratings.php?name=' . $property['name'] . '" class="details-button">Give Ratings</a>';
            echo '</div>'; // Close prop-details div
            echo '</section>';
        }
        ?>
    </div>
    <!-- JavaScript for filtering/searching properties -->
    <script>
        const locationSearch = document.getElementById('locationSearch');
        const propertyList = document.getElementById('propertyList');

        locationSearch.addEventListener('input', () => {
            const searchInput = locationSearch.value.toLowerCase();
            const properties = propertyList.getElementsByClassName('property');

            // Filter and reorder properties based on search input
            for (const property of properties) {
                const location = property.querySelector('.prop-loc').textContent.toLowerCase();
                if (location.includes(searchInput)) {
                    property.style.display = 'block';
                } else {
                    property.style.display = 'none';
                }
            }
        });
    </script>
</body>
</html>
