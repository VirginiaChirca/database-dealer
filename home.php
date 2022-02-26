<?php 
session_start();

if (isset($_SESSION['ID_admin']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
     <title>HOME</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <style>
     body  {
     background-image: url("Tesla-on-BitCars-with-bitcoin-mob_1024x.progressive.jpg");
     background-color: #cccccc;
     }
</style>
</head>
<body>
     <h1>Bine ai venit, <?php echo $_SESSION['username']; ?></h1>
     <a href="masini.php">Listă mașini</a>&nbsp;    
     <a href="clienti.php">Clienți</a>&nbsp;
     <a href="comenzi.php">Comenzi</a>&nbsp;
     <a href="programari.php">Programări test drive</a>&nbsp;
     <a href="logout.php">Logout</a>
   
</body>
</html>

<?php 
}else{
     header("Location: indexx.php");
     exit();
}
 ?>