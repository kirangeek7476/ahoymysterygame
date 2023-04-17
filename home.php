<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylehome.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
  <title>Ahoy | Home</title>
</head>
<body>
  <section>
      <img src="stars.jpg" class="stars">
  <button class="startbut" onclick="next()">start the mission</button>
    <div class="waves">
      <h2 style="display:inline-block">AHOY!!!!<span style="font-size: medium;">a mystery on the ship</span></h2>
      <img src="mountains.png" class="mount">
      <div class="ship"><img src="ship.gif" width="150px" height="100px"></div>
    
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
  </section>
  <script>
      function next()
      {
        location.href="page1.php"
      }

  </script>
</body>
</html>