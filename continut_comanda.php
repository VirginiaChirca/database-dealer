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
<?php
session_start(); 
include "config.php";
$sql = "SELECT clienti.nume, clienti.prenume, comenzi.comandaID, masini.marca, masini.model, masini.versiune
from clienti      
INNER JOIN comenzi  ON clienti.clientID = comenzi.clientID
INNER JOIN masini  ON comenzi.comandaID = masini.comandaID
WHERE clienti.clientID='" . $_GET["clientID"] . "'";
$result = $con->query($sql);
//display data on web page

 $i=0;
while($row = mysqli_fetch_array($result)){
    echo " Client : ". $row['nume'], " ". $row['prenume']," , Mașină comandată : ". $row['marca']  ," ". $row['model'];

    echo "<br>";
   $i++;
}

mysqli_close($con);
?>

</body>
</html>