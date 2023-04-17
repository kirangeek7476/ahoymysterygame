<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahoy | Page 5</title>
  <link rel="stylesheet" href="stylepage5.css">
  <link rel="icon" href="favicon1.ico" type="image/icon type">
</head>
<body>
<h1 style="font-size: 50px;color:aquamarine">Responses</h1>
  <div class="storydiv">
  <input type="submit" value="Next" onclick="next()">
    <form>
    <div class="intro">
      <div class="Daniel" style="margin-left: 40px;"><img src="Daniel Harvey.png" width="450px" height="500px"><br><span>Name: Daniel Harvey <br><span><a target="_blank" href="https://www.indeed.com/career-advice/finding-a-job/how-to-become-navy-pharmacist#:~:text=A%20Navy%20pharmacist%20is%20a%20medical%20professional%20that,overseen%20by%20the%20Navy%20such%20as%20naval%20bases.">Pharmacist</a><br><br>(I was diagnosing a hostage in treatment area sector 4)</span></div>
      <div class="William"><img src="William.png" width="410px" height="500px"><br><span>Name: William David <br> <span><a target="_blank" href="https://www.collegedekho.com/careers/radio-officer-merchant-navy">Radio Engineer</a><br><br>(I was at the spotter room decoding the morse code sector 5)</span></div>
      <div class="Peggytaylo"><img src="Peggy Taylo.png" width="350px" height="500px"><br><span>Name: Peggy Taylor <br><a target="_blank" href="https://en.wikipedia.org/wiki/Shipfitter" >Shipfitter</a><br><br>(I was at the basement fixing the leakage sector 7)</span></div>
    </div>
    </form>
  </div>
  <script>
    function next()
    {
      location.href='page6.php';
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