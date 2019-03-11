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
            <p>One</p>
            <p>Email</p>
            <p>Two</p>
        </div>

        <div class="panel panel2">
            <p>Three</p>
            <p>Phone</p>
            <p>Four</p>
        </div>

        <div class="panel panel3">
            <p>Five</p>
            <p>Post</p>
            <p>Six</p>
        </div>

        <div class="panel panel4">
            <p>Seven</p>
            
            <p class="panelTitle">Live Chat</p>
           
<div class="chat-widget-wrapper">
  <div class="chat-widget-container">
    <div class="chat-widget-text">

      <p class="chatHeader">Click to start chat</p>
    </div>
    <div class="chat-widget-avatar">
      <img class="chatImage" src="./images/livechat.jpg" alt="" />
    </div>
  </div>
  <div class="chat-box-container">
    <div class="chat-box-nav">
    </div>
    <div class="chat-box-content">
      <form action="" class="chat-box-form">
          <br/>
        &nbsp;<p class="message">what can I help you with today? <span class="cursor">_</span></p>
      </form>
    </div>
  </div>
</div>
        </div>
        

        <div class="panel panel5">
            <p>Nine</p>
            <p>Connect</p>
            <p>Ten</p>
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
        console.log(e);
        if(e.target.className !== 'chat-widget-container' && e.target.className !== 'chatHeader' && e.target.className !== 'chat-widget-avatar' && e.target.className !== 'chatImage' && e.target.className !=="chat-box-container show"){
        this.classList.toggle('open');
        const cb = document.querySelector('.chat-box-container.show');
           cb.classList = 'chat-box-container';
        }
    }
    
    function toggleActive(e) {

        if(e.propertyName.includes('flex')) {
            this.classList.toggle('open-active');
        }
    }
    
    panels.forEach(panel => panel.addEventListener('click', toggleOpen));
    panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
    
    
    
    $(function() {
  var chatWidget = (".chat-widget-container"),
      chatBox = $(".chat-box-container");
  
  $(chatWidget).click(function(e){
    
    e.preventDefault();
    
    $(chatBox).toggleClass("show");
    $(chatWidget).toggleClass("open");
  })
  
});

    setInterval(()=> {
        cursor.classList.toggle('blink');
    }, 1000)
</script>
