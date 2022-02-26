<!DOCTYPE html>
<html>
<head>
     <title>Mașini</title>
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
<?php 
session_start(); 
include "config.php";
//selectez masinile vandute(care au un id de comanda valid)
$sql = "SELECT *
FROM masini
WHERE ComandaID IN
(SELECT X.ComandaID
FROM comenzi X inner JOIN masini Y ON X.comandaID = Y.comandaID)";
$result = $con->query($sql);
?>

<body>
  <?php
if (mysqli_num_rows($result) > 0) {
?>
     <h1 style="color:black;">Listă mașini vândute</h1>
       <table style="width:100%">
  <tr>
    <th>Marca</th>
    <th>Model</th>
    <th>Versiune</th>
    <th>Generație</th>
    <th>An fabricație</th>
    <th>Combustibil</th>
    <th>Putere</th>
    <th>Cutie viteza</th>
    <th>Kilometraj</th>
    <th>Pret</th>
    <th>Stare</th>
  
  </tr>
<?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
    <tr>
    <td><?php echo $row["marca"]; ?></td>
    <td><?php echo $row["model"]; ?></td>
    <td><?php echo $row["versiune"]; ?></td>
    <td><?php echo $row["generatie"]; ?></td>
    <td><?php echo $row["an_fabricatie"]; ?></td>
    <td><?php echo $row["combustibil"]; ?></td>
    <td><?php echo $row["putere"]; ?></td>
    <td><?php echo $row["cutie_viteza"]; ?></td>
    <td><?php echo $row["kilometraj"]; ?></td>
    <td><?php echo $row["pret_masina"]; ?></td>
    <td><?php echo $row["stare_masina"]; ?></td>

      </tr>
      <?php
      $i++;
      }
      ?>
</table>
<?php
}
else
{
    echo "No result found";
}
?>
<br>
    <a class="button" href="home.php"><i class="fa fa-home"></i>Acasă</a>
    
</body>
</html>
