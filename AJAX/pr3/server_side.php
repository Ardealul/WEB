<?php

//verificam optiunea
$optiune = $_GET['optiune'];

if($optiune == "get"){
	//obtinem id-ul
	$id = $_GET['id'];

	//creeam conexiunea cu baza de date
	$conn = mysqli_connect("localhost", "root", "", "mydatabase");

	//obtinem rezultatul
	$result = mysqli_query($conn, "SELECT * FROM autoturisme where ID = '".$id."'");

	//salvam rezultatul intr un array
	$data = array();
	while ($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}

	//returnam rezultatul in format json
	echo json_encode($data);
}
else if($optiune == "update"){
	//obtinem datele
	$id = $_GET['id'];
	$marca = $_GET['marca'];
	$model = $_GET['model'];
	$an = $_GET['an'];


	//creeam conexiunea cu baza de date
	$conn = mysqli_connect("localhost", "root", "", "mydatabase");

	//obtinem rezultatul
	$result = mysqli_query($conn, "UPDATE autoturisme
									SET Marca='".$marca."',
										Model='".$model."',
										AnFabricatie='".$an."'
									WHERE ID = '".$id."'"
							);
}
?>