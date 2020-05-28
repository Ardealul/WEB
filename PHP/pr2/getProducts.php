<?php
    //obtine nr de produse de afisat pe o pagina si nr paginii din header
    $noProducts = $_GET["noProducts"];
    $noPage = $_GET["noPage"];

    //realizeaza conexiunea
    $conn = mysqli_connect("localhost", "root", "", "mydatabase");

    //executa query-ul aferent obtinerii produselor din baza de date
    $sql = "SELECT denumire, pret, descriere FROM produse";
    $result = $conn->query($sql);

    //salveaza in variabila products un array cu produsele corespunzatoare paginii specificare
    $number = 0;
    $min = ($noPage - 1) * $noProducts + 1;
    $max = $noPage * $noProducts;
    $products = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $number++;
            if ($min <= $number && $number <= $max) {
                array_push($products, array($row["denumire"], $row["pret"], $row["descriere"]));
            }
        }
    }
?> 