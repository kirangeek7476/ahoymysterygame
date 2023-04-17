<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 4</title>
  <link rel="stylesheet" href="stylepage4.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <div class="story">
      <p>As you guessed it right....May be something is mixed with the beef and we Indians never touch it which saved our lifes today</p>
      <p>After sometime I called everyone on the ship to assemble at the main area</p>
      <p>Then I noticed that only three British Soldiers are alive </p>
      <p>I asked them, "what are you doing at the time of dinner ?"</p>
    </div>
    <input type="submit" value="Next" onclick="next()">
  </div>
  <script>
    function next()
    {
      location.href='page5.php';
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