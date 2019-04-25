<?php
/*variables*/
$videoHeader = 'WELCOME EXPERIENCES';
$locationOne = 'St Mary\'s';
$locationTwo = 'Tresco';
$locationThree = 'St Martin\'s';








?>
<!DOCYPE hmtl>
<html>

<head>
    <title>ST MARY'S ISLAND</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery.parallaxer.css">
</head>


<body>
    <?php include 'components/Header.html'; ?>
    <div class="islandPage">

        <h1 class="islandTitle">ST MARY'S ISLAND</h1>
            <img src="images/stMarys.jpg" />
            <p class="islandDescription">St. Mary’s is the Isles of Scilly’s largest island (population 1,800) and the gateway to the rest of the islands. Covering an area less than 2.5 square miles, not exactly bustling but it’s more than likely to be your first port of call when you visit.</p>
            <img src="images/stmary.jpg" />
            <p class="islandDescription">St Mary's is the only island of the Isles of Scilly with a significant road network and the only island with public highways, including three A roads (measuring 4.7 miles in total length) which are numbered in Zone 3 of the British numbering scheme (the A3110, A3111 and A3112); these 'A' roads are generally country lanes in nature. Roads and streets across Scilly have very few signs or markings, and route numbers are not marked at all. </p>
            <img src="images/stmary1.jpg" />
            <p class="islandDescription">The Quay is where the Scillonian III passenger ferry docks every day. It’s also where you'll find yourself travelling from if you’re staying on any of the “off islands”.
                Old Town is the other “major” settlement on St. Mary’s, closer to the airport and with its own beautiful beach, nature reserve, shop, pub and cafés.</p>
            <img src="images/stmary3.jpg" />
            <p class="islandDescription">Up country, away from the relative hustle and bustle, St. Mary’s is an easy going safe haven of hidden treasures. The coastline features large stretches of deserted white sandy beaches, dramatic rocky coves, stunning seascapes, amazing archaeological sites and country paths and nature trails.</p>
     <div class="clear"></div>
          <?php include "components/footerLinks.html"; ?>
    </div>
      

    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="jquery.parallaxer.js"></script>
    <script src="./js/weatherScript.js"></script>
</body>




</html>
