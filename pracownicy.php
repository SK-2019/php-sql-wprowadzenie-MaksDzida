<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Maksymilian Dzida 2Ti</h1>
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida"> link do mojego githuba </a>
   <a class="nav_link" href="funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a class="nav_link" href="index.php">Pracownicy - Strona</a>
<?php
    require_once('connect.php');
echo("<li> SELECT * FROM pracownicy</li>");
    $result=$conn->query("SELECT * from pracownicy");

       echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
   
  
     
?>
    </body>
</html>
