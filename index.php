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
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery.parallaxer.css">
</head>


<body>
    
    <?php include "components/Header.html";  ?>
    <?php include "components/videoBox.html";  ?>
    <?php include "components/parallax.html";  ?>
    <?php include "components/photoGrid.html";  ?>
    <?php include "components/statement.html"; ?>
   
  <br/>
    <?php include "components/footerLinks.html"; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
 <script src="jquery.parallaxer.js"></script>
 <script src="./js/weatherScript.js"></script>
    
</body>


<script>
   

    
    $(".parallaxer").parallaxer();

</script>

</html>
