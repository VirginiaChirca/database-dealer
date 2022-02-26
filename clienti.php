<!DOCTYPE html>
<html>
<head>
     <title>Clienti</title>
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

$sql = "SELECT clientID, nume, prenume, sex, strada, numar, oras, judet, email, telefon FROM Clienti";
$result = $con->query($sql);
?>

<body>
  <div class="container">
  <form class="form-inline" method="post" action="cautare_client.php">
    <input type="text" name="numeCl" class="form-control" placeholder="Găsește informații despre clientul cu numele...">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
</div>
  <?php

if (mysqli_num_rows($result) > 0) {
?>
     <h1 style="color:black;">Datele clienților</h1>
       <table style="width:100%">
  <tr>
    <th>Numele clientului</th>
    <th>Prenume</th>
    <th>Sex</th>
    <th>Strada</th>
    <th>Numar</th>
    <th>Oras</th>
    <th>Judet</th>
    <th>Email</th>
    <th>Telefon</th>
    <th>Acțiune</th>
    
  </tr>
<?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
    <tr>
    <td><?php echo $row["nume"]; ?></td>
    <td><?php echo $row["prenume"]; ?></td>
    <td><?php echo $row["sex"]; ?></td>
    <td><?php echo $row["strada"]; ?></td>
    <td><?php echo $row["numar"]; ?></td>
    <td><?php echo $row["oras"]; ?></td>
    <td><?php echo $row["judet"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["telefon"]; ?></td>
    <td><a href="continut_comanda.php?clientID=<?php echo $row["clientID"]; ?>">Detalii comanda 
      <a href="procesare_stergere_client.php?clientID=<?php echo $row["clientID"]; ?>">Ștergere   
    <a href="update_client.php?clientID=<?php echo $row["clientID"]; ?>">Modificare</a></td>
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
    <a href="index_client.php">Adaugare clienți</a>&nbsp;
    <a href="top_clienti.sub2.php">Top Clienti</a>&nbsp;
    <a class="button" href="home.php"><i class="fa fa-home"></i>Acasă</a>
    
</body>
</html>
