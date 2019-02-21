<?php
/*variables*/
    $doc = new DomDocument;
    $doc->validateOnParse = true;

$videoHeader = 'WELCOME EXPERIENCES';
$locationOne = 'St Mary\'s';
$locationTwo = 'Tresco';
$locationThree = 'St Martin\'s';
$orderInfo = "Order before 1pm and we will dispatch your brochures the same day via Royal Mail first class post.";
/*brochure names */
$brochureName1 = "Islands-Tour";
$brochureName2 = "Scuba-Breaks";
$brochureName3 = "Sailing-Charters";
$brochureName4 = "Hotel-Stays";
$brochureName5 = "Fishing";
$brochureName6 = "Backpacking";
/*brochure images*/
$IslandTourImage = 'images/scillyCard1.webp';
$scubaImage = 'images/scubaImage.jpg';
$sailingImage = 'images/sailingImage.jpg';
$hotelsImage = 'images/hotelsImage.jpg';
$fishingImage = 'images/fishing.jpg';
$backpackingImage = 'images/backpacking.jpg';

function createCard($brochureName, $brochureImage) {
    
return "<div class='brochureCard'>
        <input type='checkbox' id=$brochureName name='value[]'>
        <label for=$brochureName>Order Now</label>
        <div class='brochureTitle'>$brochureName</div>
        <img class='brochureImage' src=$brochureImage />
        </div>";
}




?>
<!DOCTYPE hmtl>
<html>

<head>
    <title>BROCHURES</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="css/brochure.css" />
    <!--why does this not import in to index css same as rest? -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery.parallaxer.css">
</head>


<body style="background-color: #EDE7E7">
   
    <?php include 'components/Header.html'; ?>
    <h1 class="brochurePageTitle">Brochures</h1>
    <p class="brochureOrderInfo">
        <?php echo $orderInfo ?>
    </p>
    
    <section class="brochureContainer">
        <?php echo createCard($brochureName1, $IslandTourImage); ?>
        <?php echo createCard($brochureName2, $scubaImage); ?>
        <?php echo createCard($brochureName3, $sailingImage); ?>
        <?php echo createCard($brochureName4, $hotelsImage); ?>
        <?php echo createCard($brochureName5, $fishingImage); ?>
        <?php echo createCard($brochureName6, $backpackingImage); ?>
    </section>
    
  <?php 
    
   
        $customerArray = [];
        array_push($customerArray, $_POST, $_COOKIE);
   
       
        
     
    
    ?>
    <div class="splitter">
    <form class="brochureForm" action="brochure.php" method="post">
     <fieldset>
    <legend> Your Details</legend>
    <label for="name">Name:</label>
    <input type="text" id="name" name="user_name" />

    <label for="mail">Email:</label>
    <input type="email" id="mail" name="user_email" />

    <label for="address">Address:</label>
    <input type="text" id="address" name="user_address" />
         <button type="submit">Submit</button>
    </fieldset>

    </form>
        <?php include "components/footerLinks.html"; ?>
    </div>
    
    
   


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="jquery.parallaxer.js"></script>
    <script src="./js/weatherScript.js"></script>
    
</body>




</html>
