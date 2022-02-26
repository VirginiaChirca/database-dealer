<?php
 session_start(); 
include "config.php";

if(count($_POST)>0) {
mysqli_query($con,"UPDATE masini set masinaID='" . $_POST['masinaID'] . "', comandaID= '" . $_POST['comandaID'] . "', marca='" . $_POST['marca'] . "', model='" . $_POST['model'] . "', versiune='" . $_POST['versiune'] . "' , generatie='" . $_POST['generatie'] . "' , an_fabricatie='" . $_POST['an_fabricatie'] .  "', combustibil='" . $_POST['combustibil'] . "', putere='" . $_POST['putere'] . "', cutie_viteza='" . $_POST['cutie_viteza'] . "', kilometraj='" . $_POST['kilometraj'] . "', pret_masina='" . $_POST['pret_masina'] . "', stare_masina='" . $_POST['stare_masina'] . "' WHERE masinaID='" . $_POST['masinaID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM masini WHERE masinaID='" . $_GET['masinaID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Modificare date masini</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="masini.php">Înapoi la listă</a>
</div>
masinaID: <br>
<input type="hidden" name="masinaID" class="txtField" value="<?php echo $row['masinaID']; ?>">
<input type="text" name="masinaID"  value="<?php echo $row['masinaID']; ?>">
<br>
comandaID: <br>
<input type="hidden" name="comandaID" class="txtField" value="<?php echo $row['comandaID']; ?>">
<input type="text" name="comandaID"  value="<?php echo $row['comandaID']; ?>">
<br>
marca :<br>
<input type="text" name="marca" class="txtField" value="<?php echo $row['marca']; ?>">
<br>
model:<br>
<input type="text" name="model" class="txtField" value="<?php echo $row['model']; ?>">
<br>
versiune:<br>
<input type="text" name="versiune" class="txtField" value="<?php echo $row['versiune']; ?>">
<br>
generatie:<br>
<input type="text" name="generatie" class="txtField" value="<?php echo $row['generatie']; ?>">
<br>
an_fabricatie:<br>
<input type="text" name="an_fabricatie" class="txtField" value="<?php echo $row['an_fabricatie']; ?>">
<br>
combustibil:<br>
<input type="text" name="combustibil" class="txtField" value="<?php echo $row['combustibil']; ?>">
<br>
putere:<br>
<input type="text" name="putere" class="txtField" value="<?php echo $row['putere']; ?>">
<br>
cutie_viteza:<br>
<input type="text" name="cutie_viteza" class="txtField" value="<?php echo $row['cutie_viteza']; ?>">
<br>
Kilometraj:<br>
<input type="text" name="kilometraj" class="txtField" value="<?php echo $row['kilometraj']; ?>">
<br>
Pret:<br>
<input type="text" name="pret_masina" class="txtField" value="<?php echo $row['pret_masina']; ?>">
<br>
Stare:<br>
<input type="text" name="stare_masina" class="txtField" value="<?php echo $row['stare_masina']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
<?php
mysqli_close($con);
?>
</form>
</body>
</html>

