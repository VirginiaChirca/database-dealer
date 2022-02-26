<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <style>
     body  {
     background-image: url("istockphoto-1277592603-170667a.jpg");
     background-color: #cccccc;
 }
     
</style>
</head>
  
<body>
    <center>
        <h1>Storing Form data in Database</h1>
  
        <form action="adaugare_clienti.php" method="post">
              
              
<p>
                <label for="nume">Nume:</label>
                <input type="text" name="nume" id="nume">
            </p>              
              
<p>
                <label for="prenume">Prenume:</label>
                <input type="text" name="prenume" id="prenume">
            </p>
  
  
  
              
              
<p>
                <label for="Sex">Sex:</label>
                <input type="text" name="sex" id="sex">
            </p>
  
  
              
              
              
<p>
                <label for="strada">Stradă:</label>
                <input type="text" name="strada" id="strada">
            </p>
  
  
              
              
              
<p>
                <label for="numar">Număr:</label>
                <input type="text" name="numar" id="numar">
            </p>


<p>
                <label for="oras">Oraș:</label>
                <input type="text" name="oras" id="oras">
            </p>
  

<p>
                <label for="judet">Județ:</label>
                <input type="text" name="judet" id="judet">
            </p>
 

 <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </p>

<p>
                <label for="telefon">Telefon:</label>
                <input type="text" name="telefon" id="telefon">
            </p> 
  
  
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>