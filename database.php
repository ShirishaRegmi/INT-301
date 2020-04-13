<?php
	$area = $_POST['area'];
	$flat = $_POST['flat'];


	$con = mysqli_connect("localhost", "root", "", "shirisha");
	
	$result = mysqli_query($con, "select * from rentingportal where Area = '$area' and Flat_Type = '$flat' ");
	$row = mysqli_fetch_array($result);

	if(is_null($result))	
	{
		echo "No results found. Try something else!";
	}
	else
	{
		echo $row['Apartment_Name'];
		echo "<br>";
		echo "Flat Number: ";
		echo $row['Flat_Number'];
		echo "<br>";
		echo $row['Flat_Type'];
		echo " Flat";
		echo "<br>";
		echo "Rent: ";
		echo $row['Rent'];
		echo "<br>";
		echo "Owner: ";
		echo $row['Owner_Name'];
		echo "<br>";
		echo "Contact Owner: ";
		echo $row['Contact'];
		echo "<br>";
		echo "Address: ";
		echo $row['Area'];
		
		
	}
?>
