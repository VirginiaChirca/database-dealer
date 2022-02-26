<?php
 session_start(); 
include "config.php";

if(count($_POST)>0) {
mysqli_query($con,"UPDATE Clienti set clientID='" . $_POST['clientID'] . "', Nume='" . $_POST['nume'] . "', Prenume='" . $_POST['prenume'] . "', Sex='" . $_POST['sex'] . "', strada='" . $_POST['strada'] . "' , Numar='" . $_POST['numar'] . "' , Oras='" . $_POST['oras'] .  "', Judet='" . $_POST['judet'] . "', email='" . $_POST['email'] . "', telefon='" . $_POST['telefon'] . "' WHERE clientID='" . $_POST['clientID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM Clienti WHERE clientID='" . $_GET['clientID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Modificare date</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="clienti.php">Înapoi la listă</a>
</div>
clientID: <br>
<input type="hidden" name="clientID" class="txtField" value="<?php echo $row['clientID']; ?>">
<input type="text" name="clientID"  value="<?php echo $row['clientID']; ?>">
<br>
Nume: <br>
<input type="text" name="nume" class="txtField" value="<?php echo $row['nume']; ?>">
<br>
Prenume :<br>
<input type="text" name="prenume" class="txtField" value="<?php echo $row['prenume']; ?>">
<br>
Sex:<br>
<input type="text" name="sex" class="txtField" value="<?php echo $row['sex']; ?>">
<br>
Strada:<br>
<input type="text" name="strada" class="txtField" value="<?php echo $row['strada']; ?>">
<br>
Numar:<br>
<input type="text" name="numar" class="txtField" value="<?php echo $row['numar']; ?>">
<br>
Oras:<br>
<input type="text" name="oras" class="txtField" value="<?php echo $row['oras']; ?>">
<br>
Judet:<br>
<input type="text" name="judet" class="txtField" value="<?php echo $row['judet']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Telefon:<br>
<input type="text" name="telefon" class="txtField" value="<?php echo $row['telefon']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
<?php
mysqli_close($con);
?>
</form>
</body>
</html>