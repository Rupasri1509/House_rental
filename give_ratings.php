<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Ratings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin: 20px 0;
        }

        form {
            margin: 20px auto;
            max-width: 400px;
            padding: 40px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }

        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Handle the rating submission here
        $property_name = $_POST['property_name'];
        $rating = $_POST['rating'];
        $feedback = $_POST['feedback'];

        // You can save the rating and feedback in your database or perform any other necessary actions
        // For simplicity, we'll just print the submitted rating and feedback here

        echo "Thanks for the review!<br>";
        echo "You rated the property '$property_name' with $rating/5.<br>";
        echo "Your feedback: $feedback";

        // You can add a link to return to the tenant page
        echo '<br><a href="tenant_house1.php" style="color: #007bff;">Back to Tenant Page</a>';

        // You can also use a meta tag to automatically redirect after a few seconds
        // Uncomment the following line to automatically redirect after 5 seconds
        // echo '<meta http-equiv="refresh" content="5;url=tenant_page.php">';

        // Make sure to adjust the redirection URL to your tenant page

    } else {
        // If not a POST request, display the rating form
        $property_name = $_GET['name'];
    ?>
        <h2>Give Ratings for Property: <?php echo $property_name; ?></h2>
        <form method="POST" action="give_ratings.php">
            <input type="hidden" name="property_name" value="<?php echo $property_name; ?>">
            <label for="rating" style="color: #333;">Rating (1-5):</label>
            <input type="number" name="rating" min="1" max="5" required style="border: 1px solid #007bff; border-radius: 5px; padding: 10px;"><br>

            <label for="feedback" style="color: #333;">Feedback:</label><br>
            <textarea name="feedback" rows="4" cols="50" required style="border: 1px solid #007bff; border-radius: 5px; padding: 10px;"></textarea><br>

            <button type="submit">Submit Rating</button>
        </form>
    <?php
    }
    ?>
</body>
</html>
