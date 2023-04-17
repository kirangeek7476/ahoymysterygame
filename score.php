<!DOCTYPE html>
<html>
<head>
	<title>Table with Database Values</title>
	<style>
		table {
			margin: auto;
			text-align: center;
		}
		th, td {
			padding: 10px;
		}
	</style>
</head>
<body>
  <center><h1>Session's Scores</h1></center>
	<table>
		<thead>
			<tr>
				<th>Username</th>
				<th>Score 1</th>
				<th>Score 2</th>
				<th>Score 3</th>
				<th>Score 4</th>
				<th>Score 5</th>
				<th>Score 6</th>
				<th>Eye For Detailing (10)</th>
				<th>Curiosity (10)</th>
				<th>Puzzle Solving Abilities (10)</th>
				<th>Patience (10)</th>
				<th>Accuracy (10)</th>
				<th>Total Score</th>
			</tr>
		</thead>
		<tbody>
			<?php
			session_start();
			// Connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ahoydatabase";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$u = $_SESSION['username'];
			// Retrieve data from database
			$sql = "SELECT score_3, score_7, score_10, score_11, score_12, score_14, total_score FROM user_credentials WHERE username = '$u'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// Output data of each row
				$res = $result->fetch_assoc();
				if ($res['total_score'] == 5) {
					$efd = 3;
					$cur = 4;
					$puz = 5;
					$pat = 7;
					$acu = 3;
				} else if ($res['total_score'] <= 7) {
					$efd = 4;
					$cur = 3;
					$puz = 4;
					$pat = 6;
					$acu = 5;
				} else if ($res['total_score'] == 8) {
					$efd = 7;
					$cur = 7;
					$puz = 5;
					$pat = 4;
					$acu = 7;
				} else if ($res['total_score'] == 9) {
					$efd = 8;
					$cur = 7;
					$puz = 8;
					$pat = 9;
					$acu = 8;
				} else if ($res['total_score'] == 10) {
					$efd = 10;
					$cur = 10;
					$puz = 10;
					$pat = 10;
					$acu = 10;
				}
				echo "<tr>";
				echo "<td>" . $u . "</td>";
				echo "<td>" . $res["score_3"] . "</td>";
				echo "<td>" . $res["score_7"] . "</td>";
				echo "<td>" . $res["score_10"] . "</td>";
				echo "<td>" . $res["score_11"] . "</td>";
				echo "<td>" . $res["score_12"] . "</td>";
				echo "<td>" . $res["score_14"] . "</td>";
				echo "<td>" . $efd . "</td>";
				echo "<td>" . $cur . "</td>";
				echo "<td>" . $puz . "</td>";
				echo "<td>" . $pat . "</td>";
				echo "<td>" . $acu . "</td>";
        echo "<td>" . $res["total_score"] . "</td>";
        echo "</tr>";
      }
       else {
      echo "0 results";
    }

    $conn->close();
  ?>
</tbody>
</table>
</body>
</html>


