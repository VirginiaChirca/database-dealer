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
//selectez luna cu cele mai multe programari de test_drive
$sql = "SELECT ora,data_programare,locatie,month(data_programare) Luna, count(programareID) nr_programari
FROM programare
GROUP BY month(data_programare)
HAVING count(programareID)=
(SELECT max(s.nrang)
FROM (select (count(programareID)) AS nrang
FROM programare
GROUP BY  month(data_programare)) AS s)";
$result = $con->query($sql);

?>

<body>
<!--   <?php
if (mysqli_num_rows($result) > 0) {
?>
     <h1 style="color:black;">Luna cu cele mai multe programări</h1>
       <table style="width:100%">
  <tr>
    <th>Ora</th>
    <th>Data programare</th>
    <th>Locatie</th>
 
    
  </tr> -->
<?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <?php echo $row["nr_programari"]; ?> programări in luna <?php echo $row["Luna"]; ?>  <br>
    
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
    <a href="programari.php">Back</a>&nbsp;
    <a class="button" href="home.php"><i class="fa fa-home"></i>Acasă</a>
    
</body>
</html>
