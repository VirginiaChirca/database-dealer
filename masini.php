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

$sql = "SELECT * FROM masini";
$result = $con->query($sql);
?>

<body>
  <div class="container">
  <form class="form-inline" method="post" action="cautare_masina_sub4.php">
    <input type="text" name="an_introdus" class="form-control" placeholder="Găsește informații despre masinile cu cel mai mare pret fabricata dupa anul introdus">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
</div>
  <?php
if (mysqli_num_rows($result) > 0) {
?>
     <h1 style="color:black;">Listă mașini</h1>
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
    <th>Actiune</th>

    
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
    <td><a href="procesare_stergere_masini.php?masinaID=<?php echo $row["masinaID"]; ?>"> Ștergere   
      <a href="update_masina.php?masinaID=<?php echo $row["masinaID"]; ?>">Modificare</a>
      <a href="dotari.php?masinaID=<?php echo $row["masinaID"]; ?>">Dotări</a></td>

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
    <a href="index_masina.php">Adaugare mașină</a>&nbsp;
    <a href="masini_vandute_sub1.php">Mașini vândute</a>&nbsp;
    <a class="button" href="home.php"><i class="fa fa-home"></i>Acasă</a>
    
</body>
</html>

