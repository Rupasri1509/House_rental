<?php
// Start the session to access session variables
session_start();

// Check if 'uname' is set in the session
if (isset($_SESSION['uname'])) {
    // 'uname' is set, proceed with the code

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "house_rent";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve 'uname' from the session
    $uname = $_SESSION['uname'];

    // Query to retrieve the owner ID using 'uname'
    $sql = "SELECT owner_id FROM owner WHERE name='$uname'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row1 = $res->fetch_assoc();
        $owner_id = $row1['owner_id'];

        // Query to retrieve houses of the logged-in owner
        $sql = "SELECT * FROM house WHERE owner_id = '$owner_id'";
        $result = $conn->query($sql);

        echo '<html>
                <head>
                    <style>
                        /* Style for navigation bar */
                        .navbar {
                            overflow: hidden;
                            background-color: #333;
                        }

                        .navbar a {
                            float: left;
                            font-size: 16px;
                            color: white;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                        }

                        .navbar a:hover {
                            background-color: #ddd;
                            color: black;
                        }

                        /* Style for welcome message */
                        .welcome {
                            margin: 20px 0;
                            text-align: center;
                        }
                    </style>
                </head>
                <body>
                    <div class="navbar">
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#contact">Contact</a>
                    </div>
                    <div class="welcome">
                        <p>Welcome ' . $uname . '</p>
                    </div>';

        if ($result->num_rows > 0) {
            echo '<table style="border-collapse: collapse; width: 100%;">';
            echo '<tr>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">House ID</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Address</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Name</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Location</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Sq_feet</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Cost</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Description</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Features</th>';
            echo '<th style="border: 1px solid #dddddd; background-color: #f2f2f2; text-align: left; padding: 8px;">Ratings</th>';
            echo '</tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['house_id'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['location'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['name'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['location'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['sq_feet'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['cost'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['description'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $row['features'] . '</td>';

                // Display star ratings based on the 'ratings' field
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">';
                $ratings = $row['ratings'];
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $ratings) {
                        echo '<span style="color: gold;">&#9733;</span>'; // Full star
                    } else {
                        echo '<span style="color: gold;">&#9734;</span>'; // Empty star
                    }
                }
                echo '</td>'; // Close the "ratings" column

                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>No houses found.</p>';
        }

        echo '</body>
            </html>';
    } else {
        echo 'Owner not found.';
    }

    $conn->close();
} else {
    // 'uname' is not set in the session, handle this case as needed
    echo "Session variable 'uname' is not defined.";
}
?>
