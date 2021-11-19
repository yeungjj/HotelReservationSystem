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

    <div class="body">
<?php
    echo "We warmly welcome all to our New York City hotel<br><br>";
    echo "Our city boasts a lively sense of adventure and discovery, inspiring our enticing list of hotel 
        services and amenities that keep guests physically and mentally stimulated. We encourage wellness for 
        the mind, body, and soul through perks like evening hosted wine hour, a 24/7 onsite gym, yoga mats 
        available in each room and access to free public bikes and seasonal equipment. Go on a group run 
        led by our GM, or delve into deep discussions either in our welcoming courtyard or popular restaurant + bar.<br><br><br>";
    echo "Amenities + Services<br><br>";
    echo "--------------------------------<br><br>";
    echo "Take one of The Grandeur's custom designed public bikes for a ride around town. 
        Our hotel bikes are there for all of our guests to enjoy.<br><br>";
    echo "It gives us peace of mind to know your body and mind's at peace. That's why we supply a yoga mat 
        in every room, free of charge.<br><br>";
    echo "Luxury Atelier Bloom bath amenities<br><br>";
    echo "Complimentary high-speed WiFi throughout the hotel during every stay<br><br>";
    echo "Premium onsite fitness center, open to guests from 7AM - 9 PM daily, however it is closed from 2PM - 3PM
         for sanitization and deep cleaning.<br><br>";
    echo "Hosted wine reception in our lobby from 5 to 6 p.m.<br><br>";
    echo "Complimentary morning coffee and tea service daily from 7:00 a.m to 9:30 a.m. in our lobby living room<br><br>";
    echo "Overnight valet parking is $45/night. Daytime valet parking is $25/day. Parking after 5:00 p.m. is $15.<br><br>";
    echo "Fully accessible hotel for people with disabilities; ADA compliant<br><br>";
    echo "Full concierge<br><br>";
    echo "Pet-friendly accommodations<br><br>";
    echo "Complimentary morning newspaper available in the lobby<br><br>";
    echo "24-hour room service provided by The Grandeur Restaurant + Bar<br><br>";
    echo "Late Check-in<br><br>";
    echo "Express Checkout<br><br>";
?>
        </hr>
    </div>    
    <img src="theamenities.jpg"style="max-width: 100%;" height="auto">
</center>
</body>
</html>
