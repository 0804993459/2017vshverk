<?php
$servername = "tsuts.tskoli.is";
$username = "0804993459";
$password = "mypassword";
$dbname = "0804993459_vsh2017v";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="verkefni 4">
	<meta name="author" content="Hakon klaus Haraldsson">
	<title>Hakon klaus .H. verkefni 4</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body class="page1body">
	<input type="checkbox" id="toggle">
    <label for="toggle">&#9776; menu</label>
		<nav>
			<ul>
				<a href="http://tsuts.tskoli.is/2t/0804993459/2017vshverk"><li class="v1">HEIMASIDA</li></a>
				<a href="https://nam.inna.is/Components/Students/Students.html#/StudentInfo"><li class="v2">INNA</li></a>
				<a href="https://github.com/0804993459/2017vshverk"><li class="v3">GITHUB</li></a>
				<a href="http://tsuts.tskoli.is/2t/0804993459/2017vshverk/nafnalisti.php"><li class="v4">UPPLÝSINGAR</li></a>
			</ul>	
		</nav>
<div class="popular"><h1>hér er nafnalistinn</h1><br></div>
<div class="show">
<table>
<?php

$sql = "SELECT * FROM persona";
$result = $conn->query($sql);
echo "<tr><th>NAFN : </th><th>EMAIL : </th></tr> <tr> </tr>";
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
        echo  "<tr><td>". $row["NAFN"]. "</td><td>". $row["EMAIL"]. "</td></tr>";
    }

    
} else {
    echo "0 results";
}

$conn->close();
?>
</table>
</div>
<div class="popular">
	<h2>skrá nafn þitt</h2><br>
	<form action="nafn.php" method="post">
	<input type="text" name="nafn" value="nafn">
	<input type="text" name="lysing" value="email">
	<input type="submit" value="submit" >
</form>
</div>
<footer>
<h5>tæknemi® and all related logos and other elements are trademarks of tæknemi hf.
©2016 tæknemi hf. All rights reserved. <a href=""> hafiðsamband</a></h5>
		</footer>
</body>
</html>