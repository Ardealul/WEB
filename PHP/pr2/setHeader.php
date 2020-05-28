<?php
    $ok = 0;

    //verifica daca nr de produse de pe pagina e setat in header si nu e null
    //daca nu e, il seteaza la 5
    if (!isset($_GET["noProducts"])) {
        $noProducts = "5";
        $ok = 1;
    }
    else {
        $noProducts = $_GET["noProducts"];
    }

    //verifica daca nr paginii e setat in header
    //daca nu e, o seteaza la 1
    if (!isset($_GET["noPage"])) {
        $page = "1";
        $ok = 1;
    }
    else {
        $page = $_GET["noPage"];
    }

    //seteaza header-ul cu nr de produse afisate pe o pagina si nr paginii
    if ($ok)
        header("Location: index.php?noProducts=$noProducts&noPage=$page");
?>