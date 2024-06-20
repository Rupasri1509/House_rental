<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="topnav">
    <h1>Rental House Management</h1>
    <a class="active" href="home.php">Home </a>
    <a href="home.php">View houses</a>
    <a href="booking.php">Booking</a>
  <a href="#"><span class="glyphicon glyphicon-user"></span>Hi <?php session_start();echo $_SESSION['uname'];?></a>
  <a href="index.html"><span class="glyphicon glyphicon-user"></span>Sign Out</a>

  </div>
  <div class="container">
    <?php
  if($_SESSION['ltype']=="tenant")
  {
  echo "<a href='addrating.html' class='btn btn-primary'>Add Ratings to houses</a><br><br>";
  }
  ?>
    <table border="1" id="customers">
    <br><br>
    <tr>
      <th>Tenant ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Mobile No</th>
      <th>Occupation</th>
    </tr>
<?php
include("connection.php");
$query="select * from tenant";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['t_id']."</td><td>".$result['fname']."</td><td>".$result['lname']."</td><td>".$result['email']."</td><td>".$result['mobile_no']."</td><td>".$result['occupation']."</td></tr>";
}
echo "</table>";
?>

  </div>
    
</body>
</html>