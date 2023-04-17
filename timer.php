<div id="countdown"></div>
<script>
  // set the time limit to 10 minutes (600,000 milliseconds)
const timeLimit = 600000;

// set the end time by adding the time limit to the current time
const endTime = new Date().getTime() + timeLimit;

// update the countdown every second
const countdown = setInterval(function() {
  // get the current time
  const now = new Date().getTime();
  
  // calculate the remaining time in milliseconds
  const remainingTime = endTime - now;
  
  // calculate the remaining minutes and seconds
  const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
  
  // display the remaining time in the element with the ID "countdown"
  document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s";
  
  // stop the countdown when the remaining time is zero
  if (remainingTime < 0) {
    clearInterval(countdown);
    document.getElementById("countdown").innerHTML = "TIME'S UP";
  }
}, 1000);


</script>