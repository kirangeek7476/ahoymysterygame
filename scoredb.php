<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'ahoydatabase');

// Check for errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
$u = $_SESSION['username'];
// Execute a SELECT query to fetch a row from a table
$query = "SELECT score_3, score_7, score_10, score_11, score_12, score_14 FROM user_credentials WHERE username = '$u'";
$result = $mysqli->query($query);

// Check for errors
if (!$result) {
    echo "Error executing query: " . $mysqli->error;
    exit();
}

// Fetch the row from the result set
$row = $result->fetch_assoc();

// Calculate the sum of the required columns
$sum = 0;
foreach ($row as $column => $value) 
{ 
        $sum += $value;
}

// Print the sum
if($sum<=60)
{
  echo "<script>alert('Your score 10/10 and total time taken is $sum (secs)');</script>";
  $val=10;
}
else if($sum<=110)
{
  echo "<script>alert('Your score 9/10 and total time taken is $sum (secs)');</script>";
  $val=9;
}
else if($sum<=180)
{
  echo "<script>alert('Your score 8/10 and total time taken is $sum (secs)');</script>";
  $val=8;
}
else if($sum<=220)
{
  echo "<script>alert('Your score 7/10 and total time taken is $sum (secs)');</script>";
  $val=7;
}
else if($sum<=350)
{
  echo "<script>alert('Your score 6/10 and total time taken is $sum (secs)');</script>";
  $val=6;
}
else{
  echo "<script>alert('Your score 5/10 and total time taken is $sum (secs)');</script>";
  $val=5;
}
// Free the result set and close the connection

$sql = "UPDATE user_credentials SET total_time = '$sum' WHERE username = '$u' ";
$sql2 = "UPDATE user_credentials SET total_score = '$val' WHERE username = '$u' ";
$res = $mysqli->query($sql);
$res2 = $mysqli->query($sql2);
echo "<script>window.location.href='score.php';</script>";
$result->free();
$mysqli->close();
?>
