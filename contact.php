<?php foreach($_SERVER as $key => $value): ?>

<?php endforeach; ?>
<?php
$locationOne = 'St Mary\'s';
$locationTwo = 'Tresco';
$locationThree = 'St Martin\'s';

?>
<!DOCYPE hmtl>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="index.css" />

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery.parallaxer.css">
</head>


<body>
    <?php include 'components/Header.html'; ?>
    <section class="panels">
        <div class="panel panel1">
            <p>Submit a query to our friendly team.</p>
            <p id="panelTitle">Email</p>
            <p><a href="email.php">Support@elitetravel.co.uk</a></p>
        </div>

        <div class="panel panel2">
            <p>8am to 6pm Monday - Friday</p>
            <p id="panelTitle">Phone</p>
            <p>Customer Service 20 7084 6500</p>
        </div>

        <div class="panel panel3">
            <p>Elite Travel Head office</p>
            <p id="panelTitle">Post</p>
            <p>2 Ayr Road, London, NW1 4DF</p>
        </div>

      


        <div class="panel panel4">
            <p>For press or media quries</p>
            <p id="panelTitle">Press</p>
            <p>please see our press office.</p>
        </div>

    </section>
    <div class="block"></div>
    <?php include "components/footerLinks.html"; ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="jquery.parallaxer.js"></script>
    <script src="./js/weatherScript.js"></script>
</body>

</html>

<script>
    
    const panels = document.querySelectorAll('.panel');
    const cursor = document.querySelector('.cursor');

    function toggleOpen(e) {
            this.classList.toggle('open');
        }
    

    function toggleActive(e) {

        if (e.propertyName.includes('flex')) {
            this.classList.toggle('open-active');
        }
    }
   
    panels.forEach(panel => panel.addEventListener('click', toggleOpen));
    panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));

    



</script>
