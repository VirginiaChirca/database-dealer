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
<?php 
session_start(); 
include "config.php";
//selecteaza top 3 clienti cu cel mai mare pret al comenzilor
$sql = "SELECT a.nume, a.prenume, C.pret_comanda
FROM clienti a INNER JOIN comenzi C on a.clientID=C.clientID
WHERE 3>(SELECT count(*)
FROM clienti an INNER JOIN comenzi Co on an.clientID=Co.clientID
WHERE C.pret_comanda < co.pret_comanda) order by pret_comanda DESC";
$result = $con->query($sql);
?>

<body>
  <?php
if (mysqli_num_rows($result) > 0) {
?>
     <h1 style="color:black;">Top clienți</h1>
       <table style="width:100%">
  <tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Valorea achizițiilor</th>

  </tr>
<?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
    <tr>
    <td><?php echo $row["nume"]; ?></td>
    <td><?php echo $row["prenume"]; ?></td>
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

    <a class="button" href="home.php"><i class="fa fa-home"></i>Acasă</a>
    
</body>
</html>

