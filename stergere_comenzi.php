<?php
session_start(); 
include "config.php";
$result = mysqli_query($con,"SELECT * FROM Comenzi");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Stergere comenzi</title>
</head>
<body>
<table>
	<tr>
	
	<td>ID</td>
	<td>Data achizitie</td>

	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	
	<td><?php echo $row["comandaID"]; ?></td>
	<td><?php echo $row["data_achizitie"]; ?></td> 
	
	<td><a href="procesare_stergere_comenzi.php?comandaID=<?php echo $row["comandaID"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	// Close connection
        mysqli_close($con);
	?>
</table>
</body>
</html>