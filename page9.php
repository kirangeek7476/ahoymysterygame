<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 9</title>
  <link rel="stylesheet" href="stylepage9.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <form action="page9db.php" method="post">
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <div class="story">
      <p>This is a morse code.......I dont know how to crack this</p>
      <p>When I'm heading to treatment sector I saw 3 drug bottles lying around. Something is not right</p>
      <p>Holding the 3 bottles I went to the Radio center and found a manual of morse code </p>
      <p>help me to crack this code</p>
    </div>
    <input type="submit" value="Next" onclick="next()">
  </div>

  </form>
  
  <script>
    function next()
    {
      location.href='page10.php';
    }
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
</body>
</html>