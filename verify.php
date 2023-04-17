<?php
$conn=new mysqli("localhost","root","","ahoydatabase");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['username'];
$pass=$_POST['pswd'];
if(isset($_POST['cb']) && $user=='ADMIN@gmail.com' && $pass=='PASSWORD')
{
    echo "<script>alert('Hello Admin');
    window.location.href='dashboard.php';</script>";
}
$sql="SELECT * FROM user_credentials WHERE username='$user' AND password='$pass'";
$res=mysqli_query($conn,$sql);
if($res->num_rows>0)
{
    session_start();
    $_SESSION['username']=$user;
    echo "<script>alert('Hello $user');
    window.location.href='home.php';</script>";
}
else
{  
    echo '<script>alert("Username or Password is invalid");
    window.location.href="index.php";</script>';
}
$conn->close();
?>
