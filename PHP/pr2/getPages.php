<?php
	//obtine nr de produse de afisat pe o pagina
    $noProducts = $_GET["noProducts"];

    //realizeaza conexiunea
	$conn = mysqli_connect("localhost", "root", "", "mydatabase");

	//executa query-ul aferent obtinerii produselor din baza de date
	$sql = "SELECT denumire, pret, descriere FROM produse";
    $result = $conn->query($sql);

    //numara cate inregistrari se afla in baza de date
    $number = 0;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $number++;
        }
    }

    //calculeaza si salveaza nr de pagini in variabila totalPages
    $totalPages = ceil($number / $noProducts);

    //daca nr specificat al paginii depaseste nr total de pagini, seteaza nr paginii curente la 1
    if ($_GET["noPage"] > $totalPages)
        header("Location: index.php?noProducts=$noProducts&noPage=1");

?>