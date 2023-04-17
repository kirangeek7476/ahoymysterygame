<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 13</title>
  <link rel="stylesheet" href="stylepage13.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <form method="post" action="page13db.php">
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <div class="story">
      <p>At the end I've followed all the leads, which bought me here</p>
      <p>One final ACT</p>
      <p>Help me to find who might be the man behind all this</p>
    </div>
    <input type="submit" value="Next" onclick="next()">
  </div>

  </form>
  
  <script>
    function next()
    {
      location.href='page14.php';
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