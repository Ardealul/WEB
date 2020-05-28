<!DOCTYPE html>
<html>
<head>
	<title>Problema 2</title>
	<style type="text/css">
		div{
			position: absolute;
			left: 30%;
			text-align: center;
		}
		#productTable{
			border: 1px solid black;
			font-family: Arial;
		}
		td, tr{
			width: 200px;
			margin: 10px;
			padding: 10px;
		}
		tr:nth-child(even)
		{
			background-color: #b8b894;
			color: black;
		}
		tr:nth-child(odd)
		{
			background-color: #ccccb3;
			color: black;
		}
		th{
			background-color: black;
			color:white;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<!--Seteaza header-ul corespunzator-->
<?php include('setHeader.php'); ?>
<!--Obtine produsele de pe o pagina-->
<?php include('getProducts.php'); ?>
<!--Obtine nr de pagini-->
<?php include('getPages.php'); ?>

<body>
	<div>
		<form>
			Number products/page:
	        <select name="noProducts" onchange="this.form.submit()">
	        	<!--Umple "select"-ul cu optiunile disponibile-->
	        	<!--Seteaza optiunea cu nr de produse aferent celui specificat in header-->
	            <?php
	                for ($i = 1; $i <= 15; $i+=1) {
	                    if ($i != $_GET["noProducts"])
	                        $selected = "";
	                    else
	                        $selected = "selected";
	                    echo "<option value=$i $selected>$i</option>";
	                }
	            ?>
	        </select>
	    <br><br>
	    <table id="productTable">
	        <tr>
	            <th>Denumire</th>
	            <th>Pret</th>
	            <th>Descriere</th>
	        </tr>
	        <!--Umple tabla cu produsele obtinute-->
	        <?php
	            foreach($products as $product) {
	                echo "<tr>";
	                echo "<td>" . $product[0] . "</td>";
	                echo "<td>" . $product[1] . "</td>";
	                echo "<td>" . $product[2] . "</td>";
	                echo "</tr>";
	            }
	        ?>
	    </table>
	    <br><br>
	    	Pagina: 
	        <select name="noPage" onchange="this.form.submit()">
	        	<!--Umple "select"-ul cu optiunile disponibile-->
	        	<!--Seteaza optiunea cu nr paginii aferent celui specificat in header-->
	            <?php
	                for ($i = 1; $i <= $totalPages; $i++) {
	                    if ($i != $_GET["noPage"])
	                        $selected = "";
	                    else
	                        $selected = "selected";
	                    echo "<option value=$i $selected>$i</option>";
	                }
	            ?>
	        </select>
	    </form>
	</div>
</body>
</html>