<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 2</title>
  <link rel="stylesheet" href="stylepage2.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
<h1 style="font-size: 100px;color:aquamarine">Ahoy</h1>
  <div class="storydiv">

    <div class="soldier">
      <img src="soldier.png" width=380px" height="550px">
    </div>
    <div class="story">
      <p>I'm in a panic and looking around to find what happened....What might be the cause of this destruction</p>
      <p>I thought something is mixed with the food which leads to this massacre</p>
      <p>On the table I saw three food items lying</p>
      <p>Help me to find in which it is mixed</p>
    </div>
    <form action="page2db.php" method="post">
    <input type="submit" value="Next" onclick="next()">
    </form>
    
  </div>
  <script>
    function next()
    {
      location.href='page3.php';
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