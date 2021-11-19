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
    echo "Your essential guide to New York<br><br>";
    echo "Find your bearings<br><br>";
    echo "When you first arrive at Mandarin Oriental, New York, get a feel for the area by wandering through Central Park,
        which is on the hotel doorstep. Whatever the season, there’s something magical about this world-famous public park, 
        from people-watching at Bethesda Fountain to ice skating at Wollman Rink in the winter. Alternatively, stroll 
        through the tree-lined side streets of the Upper West Side and admire the rows of historic brownstones, many 
        dating back to the 1880s.<br><br>";
    echo "--------------------------------<br><br>";
    echo "Feed your mind<br><br>";
    echo "New York City has a world-class cultural landscape and the Lincoln Center is at the forefront. 
    It's five minutes' walk from the hotel and on any given day you can catch awe-inspiring opera, ballet 
    and musical performances. The Metropolitan Opera, with its opulent red carpets and starburst chandeliers, 
    is an unforgettable experience. Step into the era of the dinosaurs at the American Museum of Natural History, 
    an Upper West Side landmark founded in 1869. For art buffs, the Museum of Modern Art (MoMA) is also near the 
    hotel. Further afield, head to the Upper East Side for the Metropolitan Museum of Art and Frank Lloyd Wright's 
    Guggenheim. The city's newest gallery is The Whitney Museum of American Art in the Meatpacking District
     - combine a visit with a walk along the High Line.<br><br>";
    echo "--------------------------------<br><br>";
    echo "Shop like a local<br><br>";
    echo "You have some of the city's best shopping directly next door, including Stuart Weitzman, Hugo Boss, 
    and Diptyque at The Shops in Columbus Circle. Fifth Avenue's array of luxury offerings, from Bergdorf Goodman 
    to Cartier, are a short walk away. To shop like a local, stroll up Columbus Avenue on the Upper West Side 
    and discover boutiques such as Jonathan Adler for upscale home décor. Design lovers should head downtown to 
    Howard Street in SoHo, where you'll find British designer Tom Dixon's new store. While in the area, stop by 
    Kirna Zabête boutique on Broome Street, for myriad cool designer fashion brands.<br><br>";
    echo "--------------------------------<br><br>";
    echo "See some sights<br><br>";
    echo "You could spend all your time in New York City simply looking up at the breathtaking skyline. 
    Iconic architectural landmarks including the Empire State Building, the Chrysler Building and the World Trade Center. 
    There are also more unusual sights, such as the captivating Flatiron Building, and the High Line, 
    an elevated public park built on abandoned railway tracks, which is beautiful at sunset.<br><br>";
    echo "--------------------------------<br><br>";
    echo "Toast your arrival<br><br>";
    echo "Once you catch a glimpse of the sweeping views over Central Park from atop The Grandeur, 
    step into The Ascent Lounge in the Deutsche Bank Center. A sophisticated cocktail lounge, it offers light 
    bites and gorgeous views of the park. Live music fans might want to check out Jazz at Lincoln Center, which 
    showcases many prestigious names.<br><br>";
    echo "--------------------------------<br><br>";
    echo "Dine in style<br><br>";
    echo "For exceptional modern American fare with Asian influences, don’t miss Daniel restaurant 
    on the Upper East Side is the best of the best – the French cuisine is heavenly and it’s the perfect spot 
    for marking a special occasion. <br><br>";
    echo "--------------------------------<br><br>";
?>
        </hr>
    </div>    
    <img src="location.png"style="max-width: 100%;" height="auto">
</center>
</body>
</html>
