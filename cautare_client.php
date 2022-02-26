<?php
session_start(); 
include "config.php";
;
if(count($_POST)>0) {
$nume=$_POST['numeCl'];
//afisare informatii relevante despre clientul cautat
$result = mysqli_query($con,"SELECT clienti.nume, clienti.prenume, clienti.telefon, comenzi.comandaID, masini.marca, masini.model, masini.versiune
    FROM clienti 
    INNER JOIN comenzi  ON clienti.clientID = comenzi.clientID
    INNER JOIN masini  ON comenzi.comandaID = masini.comandaID
    where clienti.nume='$nume' ");
}
?>
<!DOCTYPE html>
<html>
<head>
     <title>Top Clienti</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
     body  {
     background-image: url("istockphoto-1277592603-170667a.jpg");
     background-color: #cccccc;
     }
     table, th, td {
  border:1px solid black;
}
.btn {
  background-color: Grey;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: Black;
}
</style>
</head>
<body>
<table>
<tr>
<td>nume</td>
<td>prenume</td>
<td>telefon</td>
<td>Masina comandata</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["nume"]; ?></td>
<td><?php echo $row["prenume"]; ?></td>
<td><?php echo $row["telefon"]; ?></td>
<td><?php echo $row["marca"]; ?>
    <?php echo $row["model"]; ?>
    <?php echo $row["versiune"]; ?>
</td>

</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>