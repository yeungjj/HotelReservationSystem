<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>justinyeungPHP</title>
    <link rel="stylesheet" href="styles.css">
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
    <form action="roomSelection.php" method="post">
        <hr>
        <div class="elem-group inlined">
          <label for="checkindate">Check-in Date</label>
          <input type="date" id="checkindate" name="checkindate" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkout-date">Check-out Date</label>
          <input type="date" id="checkoutdate" name="checkoutdate" required>
        </div>
        <div class="elem-group inlined">
            <label for="total-adults">Adults</label>
            <select id="total-adults" name="total-adults" required>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
            </select>
        </div>
        <div class="elem-group inlined">
            <label for="total-children">Children</label>
            <select id="total-children" name="total-children" required>
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
            </select>
        </div>
        <div class="elem-group">
          <label for="total-rooms">Number of Rooms</label>
          <select id="total-rooms" name="total-rooms" required>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
          </select>
        </div>
        <hr>
        <center>
        <button type="submit">Book</button>
        </center>
    </form>
    </div>
</body>
</html>