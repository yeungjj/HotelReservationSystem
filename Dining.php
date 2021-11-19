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
    echo "Savor the flavors of New York City at The Grandeur Kitchen + Bar!<br><br>";
    echo "Located within The Grandeur Hotel - (555)-543-8752<br><br>";
    echo "A New York City Restaurant with regional pride!<br><br>";
    echo "The Grandeur Kitchen + Bar opened its doors in New York City over 15 years ago.
        The restaurant's welcoming cool blues and rich wood paneling are enhanced with intimate lighting 
        and locally focused art, featuring a large glass map of New York City and its surroundings.<br><br>";
    echo "Our Team showcases globally-inspired, new American cuisine and classic and modern techniques, 
        delivering a menu that is original yet approachable. The cuisine is complimented by team's sincere 
        hospitality focusing on detailed and warm service. Local residents and travelers alike enjoy the personable
        atmosphere while imbibing specialty cocktails that accent the flavors profiles from the kitchen.<br><br>";
    echo "Our flexible space becomes extra special when hosting your private event. From graduations and
        rehearsal dinners or company parties, our combination of food, service and New York City location 
        is unparalleled. We look forward to serving you.";
?>
        </hr>
    </div>    
    <img src="monkifish.jpg"style="max-width: 100%;" height="auto">
</center>
</body>
</html>
