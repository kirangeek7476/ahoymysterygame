<!DOCTYPE html>
</html>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 15</title>
  <link rel="stylesheet" href="stylepage15.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <script>
  var refreshFlag = false;

window.onload = function() {
  if (performance.navigation.type === 1) {
    refreshFlag = true;
    var confirmRefresh = confirm('Do you want to start from the beginning?');
    if (confirmRefresh) {
      window.location.href = 'home.php';
    }
  }
}
  </script>
  <form action="scoredb.php" method="post">
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="320px" height="550px">
    </div>
    <div class="story">
    <p>Your are right!!!!!....We've caught the killer</p>
    <p>In further research we found to know that he is actualy a <span>A FRENCH SPY</span></p>
    <p>I dont finally understand whether this is the end of Everything like this to happen again....Even though everyone is appreciating for my duty...</span></p>
    <p>Only one who is not appreciating is myself......He killed so many people...I could'nt save them......</p>
    <p>At the end all this appreciations is also because of you... Today we saved a lot and a tomorrow a lot to come...</p>
    </div>
    <input type="submit" value="ThankYou">
  </div>

  </form>
 
</body>
</html>