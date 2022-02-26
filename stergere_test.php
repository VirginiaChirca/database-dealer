<?php
session_start(); 
include "config.php";
$result = mysqli_query($con,"SELECT * FROM test drive");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	
	<td>First Name</td>
	<td>Last Name</td>

	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	
	<td><?php echo $row["nume"]; ?></td>
	<td><?php echo $row["prenume"]; ?></td> 
	
	<td><a href="procesare_stergere_client.php?clientID=<?php echo $row["clientID"]; ?>">Delete</a></td>
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