<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 14</title>
  <link rel="stylesheet" href="stylepage14.css">
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
  <h1 style="color: red;">Who is the KILLER ?</h1>
<form action="page14db.php" method="post">
  <div class="storydiv">

    <div class="intro">
<div class="daniel><div class="Daniel" style="margin-left: 40px;"><img src="Daniel Harvey.png" width="450px" height="500px"><span>1</span></div>
<div class="Peggytaylo"><img src="Peggy Taylo.png" width="350px" height="500px"><span>2</span></div>
 <div class="William"><img src="William.png" width="410px" height="500px"><span>3</span></div>
    </div>
  <input type="text" id="ans" name="t1" placeholder="who is the killer ?">
  <input type="submit" id="ans" name="res">
  </div>
  </form>
</body>
</html>