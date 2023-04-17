<?php
session_start();
$conn=new mysqli("localhost","root","","ahoydatabase");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$ans = $_POST['t1'];

echo "strtolower($ans)";

if (strtolower($ans)=='ventilator')
{

    $timer = time();

    $u = $_SESSION['username'];

    $sql = "UPDATE user_credentials SET end_11 = '$timer' WHERE username = '$u' ";
    $res = mysqli_query($conn, $sql);

    $s1 = "SELECT start_11 FROM user_credentials WHERE username='$u' ";
    $res1 = mysqli_query($conn, $s1);
    $row1 = mysqli_fetch_assoc($res1);
    $start_11 = $row1['start_11'];

    $s2 = "SELECT end_11 FROM user_credentials WHERE username='$u' ";
    $res2 = mysqli_query($conn, $s2);
    $row2 = mysqli_fetch_assoc($res2);
    $end_11 = $row2['end_11'];

    if ($res && $res1 && $res2) {
        $m = $end_11 - $start_11;
        $s3 = "UPDATE user_credentials SET score_11 = '$m' WHERE username = '$u'";
        $res3 = mysqli_query($conn, $s3);
        $sql = "UPDATE user_credentials SET start_12 = '$timer' WHERE username = '$u' ";
        $res = mysqli_query($conn, $sql);
        echo '<script>window.location.href = "page12.php";</script>';
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