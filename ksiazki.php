
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
<div class="nav">
    <a class="nav_link" href="index.php">Strona</a>
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
     <a class="nav_link" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="funkcAgregujace.php">Funkcje Agregujące</a>
   <a class="nav_link" href="data_czas.php">Data i Czas</a>
     <a class="nav_link" href="ksiazki.php">Biblioteka</a>
</div>
 <h1>Maks Dzida</h1>   
  
  <?php
  
 require_once('connect.php');
echo("<h1>Książki i ich autorzy:</h1>");
$sql = 'SELECT * FROM biblTytul';
echo("<h2>Tytuły:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Tytuł</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    
    require_once('connect.php');
$sql = 'SELECT * FROM biblAutor';
echo("<h2>Autorzy:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Autorzy</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

?>
    </body>
</html>
