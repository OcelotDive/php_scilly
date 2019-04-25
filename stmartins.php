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
    <title>ST MARTIN'S ISLAND</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery.parallaxer.css">
</head>


<body>
    <?php include 'components/Header.html'; ?>
    <div class="islandPage">

        <h1 class="islandTitle">ST MARTIN'S ISLAND</h1>
        <img src="images/stmartins.jpg" />
        <p class="islandDescription">Crystal clear waters, idyllic beaches and a prevailing sense of calm make St. Martin's a delight. With its iconic red and white Daymark, erected in 1683 by Thomas Ekins, it is the first island you spot as you cross from the mainland. </p>
        
        <img src="images/stmartins2.jpg" />
        <p class="islandDescription">The island is just two miles long, yet it has some of the finest beaches in the British Isles, if not the world. Whether searching the rock pools in Lawrence’s Bay, or taking a dip in the water off the sweeping Par Beach or simply chilling on Bread and Cheese Cove, Great Bay or Little Bay, they all jostle for the accolade!</p>
        <img src="images/stmartins3.jpg" />
        <p class="islandDescription">Behind these beautiful scenes, there lies an enterprising and diverse community. The 120 or so inhabitants are industrious folk – there’s a flower farm and vineyard – both open to visitors, a fabulous dive school offering underwater adventures and snorkelling with seals and a locally-inspired silver jewellery designer.</p>
        <img src="images/stmartins4.jpg" />
        <p class="islandDescription">At St. Martin's store, off licence and post office, visitors can purchase everything they need for a great holiday - it can even be delivered in advance to accommodation across the island.</p>

        <div class="clear"></div>
        <?php include "components/footerLinks.html"; ?>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="jquery.parallaxer.js"></script>
    <script src="./js/weatherScript.js"></script>
</body>




</html>
