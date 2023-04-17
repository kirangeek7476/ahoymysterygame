<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 10</title>
  <link rel="stylesheet" href="stylepage10.css">
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
  <form action="page10db.php" method="post">
  <div class="storydiv">
    <div class="soldier">
      <img src="morse.png" width="800px" height="550px">
    </div>
    <div class="table">
      <div class="drg2"><img src="ricin.png" width="250px" height="300px"><span>Ricin</span></div>
      <div class="drg1"><img src="cynide.png" width="250px" height="300px"><span>Cynide</span></div>
      <div class="drg3"><img src="arsenic.png" width="250px" height="300px"><span>Arsenic</span></div>
      <input type="text" class="ans" placeholder="Which Drug ?" name="t1">
    <input type="submit" class="sub" name="but">
    </div>

  </form>
  
  </div>
</body>
</html>