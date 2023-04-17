<?php
session_start();
$conn=new mysqli("localhost","root","","ahoydatabase");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$ans = $_POST['t1'];

echo "strtolower($ans)";

if (strtolower($ans)=='ricin')
{

    $timer = time();

    $u = $_SESSION['username'];

    $sql = "UPDATE user_credentials SET end_10 = '$timer' WHERE username = '$u' ";
    $res = mysqli_query($conn, $sql);

    $s1 = "SELECT start_10 FROM user_credentials WHERE username='$u' ";
    $res1 = mysqli_query($conn, $s1);
    $row1 = mysqli_fetch_assoc($res1);
    $start_10 = $row1['start_10'];

    $s2 = "SELECT end_10 FROM user_credentials WHERE username='$u' ";
    $res2 = mysqli_query($conn, $s2);
    $row2 = mysqli_fetch_assoc($res2);
    $end_10 = $row2['end_10'];

    if ($res && $res1 && $res2) {
        $m = $end_10 - $start_10;
        $s3 = "UPDATE user_credentials SET score_10 = '$m' WHERE username = '$u'";
        $res3 = mysqli_query($conn, $s3);
        $sql = "UPDATE user_credentials SET start_11 = '$timer' WHERE username = '$u' ";
        $res = mysqli_query($conn, $sql);
        echo '<script>window.location.href = "page11.php";</script>';
    }

    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

else
{
    echo ' <script> window.location.href = "deadend.php"; </script>';
}
?>