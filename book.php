<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book House</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #ecf0f1; /* Light gray background */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #3498db; /* Blue title color */
            margin-top: 20px;
        }

        /* Slideshow Styles */
        .slideshow-container {
            max-width: 100%;
            text-align: center;
            position: relative;
        }

        .mySlides {
            display: none;
            text-align: center; /* Center images horizontally */
        }

        .mySlides img {
            max-width: 100%;
            height: auto;
        }

        /* Updated CSS for the slideshow arrows */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            color: #3498db;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
        }

        .next {
            right: 10px; /* Adjust the distance from the right */
        }

        .prev {
            left: 10px; /* Adjust the distance from the left */
        }

        .prev:hover, .next:hover {
            background-color: #3498db;
        }
          /* Payment Form Styles (if needed) */
          .payment-form {
            margin-top: 20px;
            border: 1px solid #3498db; /* Blue border color */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9; /* Light gray background */
        }

        #card-element {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #3498db; /* Blue border color */
            border-radius: 5px;
        }

        #card-errors {
            color: #e74c3c; /* Red text color for errors */
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #3498db; /* Blue background color */
            color: #fff; /* White text color */
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9; /* Darker blue on hover */
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
        // Retrieve house details from query parameters (same as before)
        $name = $_GET['name'];
        $location = $_GET['location'];
        $cost = $_GET['cost'];
        $features = $_GET['features'];
        $description = $_GET['description'];
        $sq_feet = $_GET['sq_feet'];

        // Display the house details in the booking form (same as before)
        echo '<h1>Book This House</h1>';
        echo '<p>Name: ' . $name . '</p>';
        echo '<p>Location: ' . $location . '</p>';
        echo '<p>Cost: RS: ' . $cost . ' per month</p>';
        echo '<p>Features: ' . $features . '</p>';
        echo '<p>Description: ' . $description . '</p>';
        echo '<p>Size: ' . $sq_feet . ' Sq.ft</p>';
        ?>
         

        <!-- Slideshow Container -->
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="house1.jpg" alt="Image 1">
            </div>
            <div class="mySlides">
                <img src="house2.jpg" alt="Image 2">
            </div>
            
            <!-- Arrows are now centered with the images -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <h2>Payment Information</h2>
        <form action="process_payment.php" method="POST" class="payment-form">
            <!-- Replace with your Stripe publishable key -->
            <input type="hidden" name="stripe-key" value="your-stripe-publishable-key">

            <label for="card-element">
                Credit or Debit Card
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>

            <button type="submit">Submit Payment</button>
        </form>
    </div>

    <!-- JavaScript for Slideshow -->
    <script>
        let slideIndex = 1;

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) { slideIndex = 1; }
            if (n < 1) { slideIndex = slides.length; }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }

        showSlides(slideIndex);
        </script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Replace with your actual Stripe publishable key
        const stripe = Stripe('your-stripe-publishable-key');

        // Create an instance of Elements
        const elements = stripe.elements();

        // Create an instance of the card Element.
        const cardElement = elements.create('card');

        // Add an instance of the card Element into the `card-element` div.
        cardElement.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    </script>
</body>
</html>
