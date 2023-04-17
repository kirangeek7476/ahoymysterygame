<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 3</title>
  <link rel="stylesheet" href="stylepage3.css">
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
<h1 style="font-size: 50px;color:aquamarine">Food Items</h1>
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <form action="page3db.php" method="post">
    <div class="table">
      <div class="beef"><img src="beef.png" width="200px" height="100px"><br><span>Beef</span></div>
      <div class="fish"><img src="fish.png" width="200px" height="100px"><br><span>Fish</span></div>
      <div class="chicken"><img src="chicken.png" width="200px" height="100px"><br><span>Chicken</span></div>
      <input class="ans" type="text" placeholder="answer" name="t1">
    <input class="sub" type="submit">
    </div>
    
    </form>
  </div>
  
  
</body>
</html>