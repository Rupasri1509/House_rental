<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Booking</title>
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
    <h1>Hall Booking</h1>
    <div class="container" id="hallContainer" class="star">
        <?php
        // Replace this with your database connection code
        $db = mysqli_connect('localhost', 'root', '', 'Booking') or die(mysqli_error());

        if ($db->connect_error) {
            die('Connection failed: ' . $db->connect_error);
        }

        // Replace this with a query to fetch hall data from your database
        $query = "SELECT * FROM info";
        $result = $db->query($query);

        while ($row = $result->fetch_assoc()) {
            $hallID = $row['id'];
            $hallName = $row['name'];
            $area = $row['area'];
            $location = $row['location'];
            $costPerDay = $row['cpd'];
            $numRooms = $row['num_rooms'];
            $imagePath = $row['image_path'];
            $rating = $row['rating']; // Fetch the rating from the database

            echo '<div class="hall">';
            echo '<img src="' . $imagePath . '" alt="' . $hallName . '">';
            echo '<h2>' . $hallName . '</h2>';
            echo '<p>Area: ' . $area . '</p>';
            echo '<p>Location: ' . $location . '</p>';
            echo '<p>Cost per Day: $' . $costPerDay . '</p>';
            echo '<p>Number of Rooms Available: ' . $numRooms . '</p>';

            // Display star rating based on the fetched rating value
            echo '<p>Rating: ';
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $rating) {
                    echo '<span class="star">&#9733;</span>'; // Filled star
                } else {
                    echo '<span class="star">&#9734;</span>'; // Empty star
                }
            }
            echo '</p>';

            echo '</div>';
        }

        // Close the database connection
        $db->close();
        ?>
    </div>
</body>
</html>