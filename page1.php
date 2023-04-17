<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 1</title>
  <link rel="stylesheet" href="stylepage1.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <h1 style="font-size: 100px;color:aquamarine">Ahoy</h1>
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <div class="story">
      <p>Hello my name is <span class="name">Ram Sarup Singh</span>, an British-Indian General and today is 22nd June 1943 and something strange happened on the ship</p>
      <p>We are coursing toward Normandy Landings and we will reach there in a few days</p>
      <p>But today as all British-Indian soldiers had our dinner and having a conference on how to proceed towards France I heard noises coming from the dining hall.</p>
      <p>We ran to the dining hall and saw all the British soldiers lying on the floor with big blue eyes</p>
    </div>
    <input type="submit" value="Next" onclick="next()">
  </div>
  <script>
    function next()
    {
      location.href='page2.php';
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