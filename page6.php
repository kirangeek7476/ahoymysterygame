<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 6</title>
  <link rel="stylesheet" href="stylepage6.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <form action="page6db.php" method="post">
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <div class="story">
      <p>Suspecting all of them I went to a room nearby the dining hall, searching for some clue</p>
      <p>Help me to find any leads in that room and remember always think outside the room......... Always.........</p>
    </div>
    <input type="submit" value="Next" onclick="next()">
  </div>
  </form>
  <script>
    function next()
    {
      location.href='page7.php';
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