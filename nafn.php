<?php
$servername = "10.200.10.24";
$username = "0804993459";
$password = "mypassword";
$dbname = "0804993459_vsh2017v";
$lysing = $_POST['lysing'];
$nafn = $_POST['nafn'];

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	die("Connection faild: ".$conn->connect_error);
}

$sql = "INSERT INTO persona(ID,NAFN,EMAIL) VALUES (null,\"$nafn\",\"$lysing\")";
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	echo "<a href=\"http://tsuts.tskoli.is/2t/0804993459/2017vshverk\">Fara til baka hérna</a>";
} else{
	echo "Error:". $sql."<br>".$conn->error;
}
$conn->close();
?>