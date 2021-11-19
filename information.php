<?php
session_start();
?>

<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if($_POST["room"] == 100){
    mysql_query("UPDATE justinyeungdatabase.rooms SET numOfRooms = numOfRooms - 1
            WHERE roomID = 1");
}elseif($_POST["room"] == 110){
    mysql_query("UPDATE justinyeungdatabase.rooms SET numOfRooms = numOfRooms - 1
            WHERE roomID = 2");
}elseif($_POST["room"] == 150){
    mysql_query("UPDATE justinyeungdatabase.rooms SET numOfRooms = numOfRooms - 1
            WHERE roomID = 3");
}else{
    echo "Room(s) not available, please return to home page and start again";
}
mysql_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>justinyeungPHP</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="logo"> 
        <img src="theGrandeurLogo.png">
    </div>
<center>
    <div class="heading">
        <h1>The Grandeur</h1>
        <h2>80 Columbus Circle New York, New York 10023, USA</h2>
        <h3>Phone: +1 (555)-543-8752 Email: reservations@thegrandeur.com</h3>
        <h4>From Manhattan: 2 minute walk from the A train @ Columbus Circle Station... From NJ: 10 blocks north of the Lincoln Tunnel</h4>
    </div>

    <div class="topnav">
        <a href="welcome.php">Reserve</a>
        <a href="Dining.php">Eat + Drink</a>
        <a href="Amenities.php">Amenities</a>
        <a href="Visit.php">Visit</a>
    </div>
</center>

    <div class="body">
        <form action="book.php" method="post">
            <hr>
<center>
<?php

$checkin = new DateTime($_SESSION["checkindate"]);
$checkout = new DateTime($_SESSION["checkoutdate"]);
$datediff = $checkout->diff($checkin)->format("%a");
$staycost = $datediff * $_POST["room"];

if($_POST["room"] == 100){
    $theRoom = "The Classic";
}elseif($_POST["room"] == 110){
    $theRoom = "The Premium";
}elseif($_POST["room"] == 150){
    $theRoom = "The Executive";
}

echo "Your check-in date is: " . $_SESSION["checkindate"] . ".<br>";
echo "Your check-out date is: " . $_SESSION["checkoutdate"] . ".<br>";
echo 'Your stay is for ' . $datediff . ' day(s) in "' . $theRoom . '" hotel suite.<br>';
echo "You reserved " . $_SESSION["total-rooms"] . " room(s) at a rate of $"  . $_SESSION["room"] . " per night per room.<br>";
echo "Your total cost for your stay is: $" . $staycost . ".<br>";
?>

</center>
            <div class="elem-group inlined">
              <label for="name">Name: </label>
              <input type="text" id="name" name="name" placeholder="Ex. John Smith" required>
            </div>
            <div class="elem-group inlined">
                <label for="streetaddress">Street Address:</label>
                <input type="text" id="streetaddress" name="streetaddress" placeholder="Ex. 80 1st Ave" required>
            </div>
            <div class="elem-group inlined">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" placeholder="Ex. Queens" required>
            </div>
            <div class="elem-group inlined">
                <label for="state">State:</label>
                <input type="text" id="state" name="state" placeholder="Ex. New York" required>
            </div>
            <div class="elem-group inlined">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Ex. abc@gmail.com" required>
            </div>
            <div class="elem-group inlined">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Ex. (555)-543-8752" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            </div>
            <hr>
            <center>
            <button type="submit">Confirm Reservation</button>
        </center>
        </form>
    </div>
</body>
</html>

<?php
    $_SESSION['room'] = $_POST['room'];
?>