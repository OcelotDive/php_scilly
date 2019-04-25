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
    <title>TRESCO ISLAND</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery.parallaxer.css">
</head>


<body>
    <?php include 'components/Header.html'; ?>
    <div class="islandPage">

        <h1 class="islandTitle">TRESCO ISLAND</h1>
        <img src="images/tresco.jpg" />
        <p class="islandDescription">Tresco is the second largest of the islands and a subtropical gem. It is the only one of the islands to be privately-owned; it is currently cared for by Lucy and Robert Dorrien-Smith.</p>
        <img src="images/tresco4.jpg" />
        <p class="islandDescription">This island has a little bit of everything – from dramatic rocky outcrops, bronze age burial sites and romantic castle ruins, to secluded sandy beaches and, of course, the world famous Tresco Abbey Garden which was established in the 1830s by Augustus Smith.</p>
        <img src="images/tresco3.jpg" />
        <p class="islandDescription">The rugged north of the island is a great place to walk and explore, while in the centre of the island, there are bird hides to seek out around Tresco’s freshwater pools. You can hire bikes to travel around, or if you are feeling active, borrow a boat, windsurf or kayak from Tresco Sailing Club.</p>
        <img src="images/tresco2.jpg" />
        <p class="islandDescription">Whatever you choose to do on Tresco, you’ll notice that it oozes sophistication at every level - from its top-notch accommodation, art gallery and fabulous deli to the amazing eateries serving fine local produce and the award-winning leisure spa, the Flying Boat Club.</p>

        <div class="clear"></div>
        <?php include "components/footerLinks.html"; ?>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="jquery.parallaxer.js"></script>
    <script src="js/weatherScript.js"></script>
</body>




</html>
