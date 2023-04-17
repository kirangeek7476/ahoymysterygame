<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 8</title>
  <link rel="stylesheet" href="stylepage8.css">
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
  <form>
    <a href="page9.php"><img title="Click me" src="manus1.png" width="1050px" height="750px"></a>
  </form>

</body>
</html>