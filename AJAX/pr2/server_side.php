<?php

//primeste de la a cata inregistrare sa afiseze urm 3
$from = $_GET['from'];

//creeam conexiunea cu baza de date
$conn = mysqli_connect("localhost", "root", "", "mydatabase");

//obtinem rezultatul
$result = mysqli_query($conn, "SELECT * FROM datecontact LIMIT ".$from.", 3");

//salvam rezultatul intr un array
$data = array();
while ($row = mysqli_fetch_assoc($result)){
	$data[] = $row;
}

//returnam rezultatul in format json
echo json_encode($data);