<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page Comanda</title>
</head>
  
<body>
    <center>
        <?php
  
        session_start(); 
        include "config.php";
          
        $nume =  $_REQUEST['nume'];
        $data_achizitie =  $_REQUEST['data_achizitie'];
        $Mod_plata = $_REQUEST['Mod_plata'];
        $stare_comanda = $_REQUEST['stare_comanda'];
        $pret_comanda = $_REQUEST['pret_comanda'];

//in interiorul insertului pe pozitia ClientID selectez id-ul care corespunde cu numele introdus pentru comanda
        $sql = "INSERT INTO comenzi VALUES (comandaID, (SELECT clienti.clientID
        FROM clienti 
        LEFT JOIN comenzi as C  ON clienti.clientID = C.clientID
        where clienti.nume='$nume'), '$data_achizitie', 
        '$Mod_plata','$stare_comanda','$pret_comanda')";
        


        if(mysqli_query($con, $sql)){
            header("Location: comenzi.php"); 
  
         
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>
    </center>
</body>
  
</html>