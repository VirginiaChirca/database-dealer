<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page </title>
</head>
  
<body>
    <center>
        <?php
  
        session_start(); 
        include "config.php";
          
      
        $nume =  $_REQUEST['nume'];
        $prenume = $_REQUEST['prenume'];
        $sex =  $_REQUEST['sex'];
        $strada = $_REQUEST['strada'];
        $numar = $_REQUEST['numar'];
        $oras = $_REQUEST['oras'];
        $judet = $_REQUEST['judet'];
        $email = $_REQUEST['email'];
        $telefon = $_REQUEST['telefon'];
          
        
        $sql = "INSERT INTO Clienti VALUES (clientID, 1, '$nume', 
            '$prenume','$sex','$strada','$numar', '$oras', '$judet', '$email', '$telefon')";
          
        if(mysqli_query($con, $sql)){
            header("Location: clienti.php"); 
  
         
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