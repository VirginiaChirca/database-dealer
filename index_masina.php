<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Store Data</title>
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
  
        <form class="form-inline" action="adaugare_masina.php" method="post">
              
              
<p>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca">
            </p>
              
<p>
                <label for="model">Model:</label>
                <input type="text" name="model" id="model">
            </p>
        
              
<p>
                <label for="versiune">Versiune:</label>
                <input type="text" name="versiune" id="versiune">
            </p>
  
              
<p>
                <label for="generatie">Generatie:</label>
                <input type="text" name="generatie" id="generatie">
            </p>
           
              
<p>
                <label for="an_fabricatie">An fabricatie:</label>
                <input type="text" name="an_fabricatie" id="an_fabricatie">
            </p>


<p>
                <label for="combustibil">Combustibil:</label>
                <input type="text" name="combustibil" id="combustibil">
            </p>
  

<p>
                <label for="putere">Putere:</label>
                <input type="text" name="putere" id="putere">
            </p>
 

 <p>
                <label for="cutie_viteza">Cutie viteza:</label>
                <input type="text" name="cutie_viteza" id="cutie_viteza">
            </p>

<p>
                <label for="kilometraj">Kilometraj:</label>
                <input type="text" name="kilometraj" id="kilometraj">
            </p> 

<p>
                <label for="pret">Pret:</label>
                <input type="text" name="pret" id="pret">
            </p> 

<p>
                <label for="stare_masina">Stare masina:</label>
                <input type="text" name="stare_masina" id="stare_masina">
            </p> 
  
  
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>