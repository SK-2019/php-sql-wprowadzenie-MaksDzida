<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width">
</head>
<body>
  
   <form action="insert.php" method="POST">
             <input type="text" name="imie" placeholder="imie"></br>
        <input type="text" name="dzial" placeholder="dzial" ></br>
   <input type="text" name="zarobki" placeholder="zarobki"></br>
   <input type="date" name="data_ur" ></br>
   <input type="submit" value="Dodaj">
   </form>
  <br>
  <br>
<h1>Usuwanie Pracownika</h1>
<form action="delete.php" method="POST">
    <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Usuń">
  
               
  </body>
</html>