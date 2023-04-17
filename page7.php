<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 7</title>
  <link rel="stylesheet" href="stylepage7.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <form method="post" action="page7db.php">

  <div class="storydiv">
    <div class="soldier">
      <img src="soldier.png" width="400px" height="550px">
    </div>
    <div class="room">
      <div class="paper1">
        <img src="paper.png" width="50px" height="40px">
        <span style="color: azure;">1</span>
      </div>
      <div class="paper2">
      <img src="paper.png" width="50px" height="40px">
      </div>
      <div class="paper3">
      <img src="paper.png" width="50px" height="40px">
        <span style="color: azure;">3</span>
      </div>
      <div class="paper4">
      <img src="paper.png" width="50px" height="40px">
        <span style="color: azure;">4</span>
      </div>
      <img class="roomimg" src="Room.jpg" width="550px" height="550px">
      <input type="text" class="ans" placeholder="paper number ?" name="t1">
    <input type="submit" class="sub" name="but">
    </div>
  </div>
  </form>
  
  <p><span style="color: blanchedalmond; font-size:20px;">Hint</span></p><br>
  <p><span class="hint">&nbsp;&nbsp;Resize your Screen</span></p>
</body>
</html>