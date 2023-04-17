<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="stylelogin.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
  <title>Ahoy | Register</title>
</head>
<body>
  <form action="dbconnectivity.php" method="POST">
  <div class="container">
    <img src="stars.jpg" class="stars">
    <div class="form signup">
      <h2>Sign Up</h2>
      <div class="inputBox">
        <input type="text" required="required" name="username">
        <i class="fa-regular fa-user"></i>
        <span>username</span>
      </div>
      <div class="inputBox">
        <input type="email" required="required" name="email">
        <i class="fa-regular fa-envelope"></i>
        <span>email address</span>
      </div>
      <div class="inputBox">
        <input type="password" required="required" name="pswd">
        <i class="fa-solid fa-lock"></i>
        <span>create password</span>
      </div>
       <div class="inputBox">
        <input type="password" required="required" name="cnfpswd">
        <i class="fa-solid fa-lock"></i>
        <span>confirm password</span>
      </div>
      <div class="inputBox">
        <input type="submit" value="create account">
      </div>
      <p>already a member? <a href="index.php"
      class=login> login</a></p>
    </div>
  </div>
  </form>
  <section>
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
    </div>
  </section>

</body>
</html>
