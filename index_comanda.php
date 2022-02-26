<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Store Data Comanda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <style>
     body  {
     background-image: url("istockphoto-1277592603-170667a.jpg");
     background-color: #cccccc;
     }
          * {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
</head>
  
<body>
    <center>
        <h1>Storing Form data in Database</h1>
  
        <form class="form-inline" action="adaugare_comanda.php" method="post">
              
           

<p>
                <label for="nume">Nume client:</label>
                <input type="text" name="nume" id="nume">
            </p>

<p>
                <label for="data_achizitie">Data achizitie:</label>
                <input type="text" name="data_achizitie" id="data_achizitie">
            </p>
              
<p>
                <label for="Mod_plata">Mod plata:</label>
                <input type="text" name="Mod_plata" id="Mod_plata">
            </p>
        
              
<p>
                <label for="stare_comanda">Stare comanda:</label>
                <input type="text" name="stare_comanda" id="stare_comanda">
            </p>
  
              
<p>
                <label for="pret_comanda">Pret comanda:</label>
                <input type="text" name="pret_comanda" id="pret_comanda">
            </p>
           
                   
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>