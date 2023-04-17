<?php
session_start();
$conn=new mysqli("localhost","root","","ahoydatabase");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$timer = time();

$u = $_SESSION['username'];

$sql = "UPDATE user_credentials SET start_3 = '$timer' WHERE username = '$u' ";
$res = mysqli_query($conn, $sql);

if($res)
  {
    echo ' <script> window.location.href = "page3.php"; </script>';
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
