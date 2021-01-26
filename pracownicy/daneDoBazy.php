<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/assets/style1.css">
</head>
<body>
  
   <div class='container'>
   <div class='name'><h1>Maks Dzida</h1></div>
<div class="nav">
  <strong><a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
   <a class="nav_link" href="/index.php">Strona</a>
    <a class="nav_link" href="/pracownicy/pracownicy.php">Pracownicy - wstęp</a>
     <a class="nav_link" href="/pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="/pracownicy/funkcAgregujace.php">Funkcje Agregujące</a>
   <a class="nav_link" href="/pracownicy/data_czas.php">Data i Czas</a>
     <a class="nav_link" href="/ćwiczenia/formularz.html">Formularz</a>
    <a class="nav_link" href="/pracownicy/daneDoBazy.php">Dodaj Dane</a>
    <a class="nav_link" href="/ćwiczenia/function.php">Funkcja</a>
      <a class="nav_link" href="/biblioteka/ksiazki.php">Biblioteka</a>
</div>  
    <div class='phpbox'>
  
   <form action="insert.php" method="POST">
        <input type="text" name="imie" placeholder="imie"><br>
        <input type="text" name="dzial" placeholder="dzial" ><br>
   <input type="text" name="zarobki" placeholder="zarobki"><br>
   <input type="date" name="data_ur" ><br>
   <input type="submit" value="Dodaj">
   </form>
  <br>
  <br>
<h1>Usuwanie Pracownika</h1>
<form action="delete.php" method="POST">
    <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Usuń">
</form>

  
       
 <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select * from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                    echo("<th>del</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("<td><form method=POST action='delete.php'>");
                             echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                     echo("<input type=submit value='Usuń'>");
                            echo("</form></td>");                       
                            echo("</tr>");
                           }
                echo("</table>");
?>
</div>
   </div>      
  </body>
</html>
