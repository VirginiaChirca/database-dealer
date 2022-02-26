<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page Masina </title>
</head>
  
<body>
    <center>
        <?php

        session_start();
        include "config.php";
        $marca =  $_REQUEST['marca'];
        $model = $_REQUEST['model'];
        $versiune =  $_REQUEST['versiune'];
        $generatie =  $_REQUEST['generatie'];
        $an_fabricatie = $_REQUEST['an_fabricatie'];
        $combustibil =  $_REQUEST['combustibil'];
        $putere = $_REQUEST['putere'];
        $cutie_viteza =  $_REQUEST['cutie_viteza'];
        $kilometraj = $_REQUEST['kilometraj'];
        $pret =  $_REQUEST['pret'];
        $stare_masina =  $_REQUEST['stare_masina'];
      
        
        $sql = "INSERT INTO masini VALUES (masinaID, comandaID,'$marca', '$model','$versiune','$generatie', '$an_fabricatie','$combustibil','$putere','$cutie_viteza','$kilometraj', '$pret', '$stare_masina')";
          
        if(mysqli_query($con, $sql)){
            header("Location: masini.php"); 
  
         
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