<?php
session_start();
?>

<?php
$checkin = new DateTime($_POST["checkindate"]);
$checkout = new DateTime($_POST["checkoutdate"]);
$datediff = $checkout->diff($checkin)->format("%a");
$classicCost = $datediff * 100 * $_POST["total-rooms"];
$premiumCost = $datediff * 110 * $_POST["total-rooms"];
$executiveCost = $datediff * 150 * $_POST["total-rooms"];
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

    <div class="table">
            <form action = "information.php" method="post">
            <hr>
                <table>
                <tr>
                    <td width = "200" align ="center" bgcolor = "#E6E6FA">Room</td>
                    <td width = "400" align ="center" bgcolor = "#E6E6FA">Description</td>
                    <td width = "150" align ="center" bgcolor = "#E6E6FA">Price($) per night</td>
                    <td width = "150" align ="center" bgcolor = "#E6E6FA">Total stay cost($)</td>
                    <td width = "100" align ="center" bgcolor = "#E6E6FA">Select below</td>
                </tr>
                
                <tr align = "center">
                    <td><img src="theclassic.jpg"></td>
                    <td><label for="theClassic">The Classic: 2 Queen-sized beds</label></td>
                    <td>100</td>
                    <td><?php echo $classicCost?></td>
                    <td><input type="radio" name="room" value="100" checked></td>
                </tr>
                
                <tr align = "center">
                    <td><img src="thepremium.jpg"></td>
                    <td><label for="thePremium">The Premium: 1 King-sized bed</label></td>
                    <td>110</td>
                    <td><?php echo $premiumCost?></td>
                    <td><input type="radio" name="room" value="110"></td>
                </tr>
                    
                <tr align = "center">
                    <td><img src="theexecutive.jpg"></td>
                    <td><label for="theExecutive">The Executive: 1 King-sized bed (Oceanview)</label></td>
                    <td>150</td>
                    <td><?php echo $executiveCost?></td>
                    <td><input type="radio" name="room" value="150"></td>
                </tr>
                </table>
            <hr>
                <button type="submit">Reserve Selected Room</button>
            </form>
    </div>
</center>
</body>
</html>

<?php
    $_SESSION['checkindate'] = $_POST['checkindate'];
    $_SESSION['checkoutdate'] = $_POST['checkoutdate'];
    $_SESSION['total-adults'] = $_POST['total-adults'];
    $_SESSION['total-children'] = $_POST['total-children'];
    $_SESSION['total-rooms'] = $_POST['total-rooms'];
?>