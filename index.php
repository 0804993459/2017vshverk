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
				<li class="v1">HEIMASIDA</li></a>
				<li class="v2">FORRIT</li></a>
				<li class="v3">UM OKKUR</li></a>
				<li class="v4">FERILL</li></a>
			</ul>	
		</nav>
<div class="popular">
	<h1>bbbbbbbbbbbbbb</h1><br>
</div>
<div class="show">
	<table>

<?php

$sql = "SELECT * FROM vidburdur";
$result = $conn->query($sql);
echo "<thead><tr><th> viðburðs típa: </th><th>Host : </th><th>dagsetning : </th></tr></thead> <tr> </tr>";
if ($result->num_rows > 0) {
    // output data of each row
    
	while($row = $result->fetch_assoc()) {
        echo  "<tr><td>". $row["vidburds tipa"]. "</td><td>". $row["NAFN"]. "</td><td>". $row["DAGSET"]. "</td></tr>";
    }
      
} else {
    echo "0 results";
}

?>
</table>
</div>
<div class="seatl">
	<h1>lllllllllllllll</h1><br>
</div>
<div class="coment">

<form action="input.php" method="post">
	<textarea name="lysing" rows="10" cols="30" >comment</textarea>
	<input type="text" name="nafn" value="nafn">
	<input type="submit" value="submit" >
</form>

<div class="commentbox">
<table>
<?php

$sql = "SELECT * FROM comments";
$result = $conn->query($sql);
echo "<tr><th>username : </th><th>comment : </th></tr> <tr> </tr>";
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
        echo  "<tr><td>". $row["user"]. "</td><td>". $row["comment"]. "</td></tr>";
    }

    
} else {
    echo "0 results";
}

$conn->close();
?>
</table>
</div>
</div>
<footer>
<h5>tæknemi® and all related logos and other elements are trademarks of tæknemi hf.
©2016 tæknemi hf. All rights reserved. <a href=""> hafiðsamband</a></h5>
		</footer>
</body>
</html>