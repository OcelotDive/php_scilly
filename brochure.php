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
$scubaImage = 'images/scubaImage.webp';
$sailingImage = 'images/sailingImage.webp';
$hotelsImage = 'images/hotelsImage.webp';
$fishingImage = 'images/fishing.webp';
$backpackingImage = 'images/backpacking.webp';

function createCard($brochureName, $brochureImage) {
    
return "<div class='brochureCard'>
        <input type='checkbox' id=$brochureName name='value[]'>
        <label for=$brochureName>Order Now</label>
        <div class='brochureTitle'>$brochureName</div>
        <img class='brochureImage' src=$brochureImage />
        </div>";
}

$user_name = '';
    $user_email = '';
    $user_address = '';
    
        

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
    
    
   

        
    
    
   
       $errors = array('user_name'=>'', 'user_email'=>'', 'user_address'=>'');
    
    if(isset($_POST['submit'])) {

        
//check name
if(empty($_POST['user_name'])){
    $errors['user_name'] = '* Name field required';
    
}

else {
    $user_name = $_POST['user_name'];
    
}
    
//check email
if(empty($_POST['user_email'])){
    $errors['user_email'] = '* Valid email required';
    
}
else {
 $user_email = $_POST['user_email'];
    
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $errors['user_email'] =  '* Enter valid email';
    }
}
       
//check address
if(empty($_POST['user_address'])){
    $errors['user_address'] = '* Address field required';
    
}
else {
    $user_address = $_POST['user_address'];
     
}
        
    }
  $orderObject = '';
    ?>

    <div class="splitter"></div>

    <form class="brochureForm" action="brochure.php" method="post">
        <fieldset>
            <legend> Your Details</legend>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name" value="<?php  echo htmlspecialchars($user_name); ?>" />
            <div class="redText">
                <?php echo $errors['user_name'] ?>
            </div>

            <label for="mail">Email:</label>
            <input type="email" id="email" name="user_email" value="<?php  echo htmlspecialchars($user_email); ?>" />
            <div class="redText">
                <?php echo $errors['user_email'] ?>
            </div>

            <label for="address">Address:</label>
            <input type="text" id="address" name="user_address" value="<?php  echo htmlspecialchars($user_address); ?>" />
            <div class="redText">
                <?php echo $errors['user_address'] ?>
            </div>

            <button type="submit" name="submit">Submit</button>
            <div class="dispatchLabel">
        <?php 
        if(isset($_POST['submit'])) {    
           
            if($errors['user_email'] === '' && $errors['user_email'] === '' && $errors['user_address'] === '') {
        
        foreach(array_keys($_COOKIE) as $paramName){
          echo str_replace('_', ' ',$paramName);
        }
          echo " brochures dispatched for $user_name to: $user_address";
            }
              }
            

        ?>
           </div>
        </fieldset>

    </form>
    <br/>
    <br/>
    <?php include "components/footerLinks.html"; ?>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="jquery.parallaxer.js"></script>
    <script src="./js/weatherScript.js"></script>

</body>




</html>














