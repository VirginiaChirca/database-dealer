<!DOCTYPE html>
<html>
<head>
     <title>Comenzi înregistrate</title>
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

$sql = "SELECT * FROM comenzi";
$result = $con->query($sql);
?>

<body>
  <?php
if (mysqli_num_rows($result) > 0) {
?>
     <h1 style="color:black;">Listă comenzi</h1>
       <table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Dată achiziție</th>
    <th>Mod plată</th>
    <th>Starea comenzii</th>
    <th>Preț</th>
   


    
  </tr>
<?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
    <tr>
    <td><?php echo $row["comandaID"]; ?></td>
    <td><?php echo $row["data_achizitie"]; ?></td>
    <td><?php echo $row["Mod_plata"]; ?></td>
    <td><?php echo $row["stare_comanda"]; ?></td>
    <td><?php echo $row["pret_comanda"]; ?></td>
  
    

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
    <a href="index_comanda.php">Adaugare comandă</a>&nbsp;
    <a class="button" href="home.php"><i class="fa fa-home"></i>Acasă</a>
    
</body>
</html>


