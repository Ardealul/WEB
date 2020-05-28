<?php 

//primim orasul de plecare
$orasPlecare = $_GET['orasPlecare'];

//creeam conexiunea cu baza de date
$conn = mysqli_connect("localhost", "root", "", "mydatabase");

//obtinem rezultatul
$result = mysqli_query($conn, "SELECT Sosire FROM mersultrenurilor where Plecare = '".$orasPlecare."'");

//salvam rezultatul intr un array
$data = array();
while ($row = mysqli_fetch_assoc($result)){
	$data[] = $row;
}

//returnam rezultatul in format json
echo json_encode($data);

