<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 12</title>
  <link rel="stylesheet" href="stylepage12.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <h2  class="heading">BLUEPRINT OF VENTILATORS</h2>
<form method="post" action="page12db.php">
<div class="pipediv">
  <div class="pipe1"><img src="arrsec7.png" height="60px" width="150px"><span style="color: aliceblue; font-size:25px;">1</span></div>
  <div class="pipe2"><img src="arrsec5.png" height="60px" width="150px"><span style="color: aliceblue; font-size:25px;">3</span></div>
  <div class="pipe3"><img src="arrsec2.png" height="60px" width="150px"><span style="color: aliceblue; font-size:25px;">2</span></div>
<div class="pipes">
  <img src="pipes.png" width="600px" height="650px">
</div>
<div class="pipe4"><img src="arrdin.png" height="60px" width="150px"></div>
  <div class="pipe5"><img src="arrwheel.png" height="60px" width="150px"></div>
  <div class="pipe6"><img src="arrdin.png" height="60px" width="150px"></div>
</div>
<input type="text" name="t1" id="pip" placeholder="Pipe no ?">
<input type="submit" name="sub" id="pip" value="Next">
</form>
<script>
  function next1()
  {
    location.href="page13.php";
  }
  function next2()
  {
    location.href="deadend.php";
  }
  function next3()
  {
    location.href="deadend.php";
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