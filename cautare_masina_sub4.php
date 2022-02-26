<?php
session_start(); 
include "config.php";
;
if(count($_POST)>0) {
$an=$_POST['an_introdus'];
//selectare date masina cu pretul cel mai mare fabricata dupa anul introdus de la tastatura
$result = mysqli_query($con,"SELECT *
from masini A where A.pret_masina >= 
(SELECT max(M.pret_masina) FROM masini M
WHERE M.an_fabricatie > '$an') ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
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
    border: 1px solid black;
}
</style>
</head>
<body>
    <h1 style="color:black;">Mașina care are prețul cel mai mare si este fabricată dupa anul introdus</h1>
       <table style="width:100%">

<tr>
<td>Marca</td>
<td>Model</td>
<td>Versiune</td>
<td>Pret</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["marca"]; ?></td>
<td><?php echo $row["model"]; ?></td>
<td><?php echo $row["versiune"]; ?></td>
<td><?php echo $row["pret_masina"]; ?></td>

</tr>
<?php
$i++;
}
?>

</table>
<br>
    <a href="clienti.php">Back</a>&nbsp;
    <a class="button" href="home.php"><i class="fa fa-home"></i>Acasă</a>
</body>
</html>