<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 11</title>
  <link rel="stylesheet" href="stylepage11.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
  <form action="page11db.php" method="post">
  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <div class="story">
      <p>Great Work!!!! we are almost at the end of the investigatiom</p>
      <p>We found that the ricin the most dangerous drug and even most dangerous when it mixes with the air </p>
      <p>The only way this will reach to every corner in the ship is by <input type="text" id="res" name="t1" placeholder="Press Enter (Starts with V and ends with R way to direct used to connect)"></p>
      <p>We will get a clear idea by looking at this blue print</p>
      <p>Help me to find the correct one</p>
    </div>
    <input type="submit" name="but" onclick="next()" value="Next" class="inp"> 
  </div>

  </form>
  
  <script>
    function next()
    {
      const answerInput = document.getElementById('res').value;
      if(answerInput.toLowerCase() == 'ventilator')
    {
      window.location.href = "page12.php";
    }
    else if (answerInput=="")
    {
      alert("Please fill the field");
    }
    else
    {
      window.location.href = "deadend.php";
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
    }
  </script>
</body>
</html>