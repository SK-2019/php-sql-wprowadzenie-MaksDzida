<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
     <a class="nav_link" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="index.php">Strona</a>
</div>
 <h1>Maks Dzida</h1>   
    
<?php
   require_once('connect.php');
    
    echo("<li> SELECT sum(zarobki) as suma from pracownicy</li>");

    $result=$conn->query("SELECT sum(zarobki) as suma from pracownicy");
        echo("<table border=1>");
        echo("<th>Suma</th>");
    
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["suma"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
    echo("<li> SELECT sum(zarobki) as suma from pracownicy</li>");

    $result=$conn->query("SELECT SUM(zarobki) as suma, dzial FROM pracownicy WHERE imie  LIKE '%a'");
        echo("<table border=1>");
     echo("<th>ID</th>");
    echo("<th>imie</th>");
        echo("<th>Suma</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["suma"]. "</td><td>" .$row["dzial"]. "</td>);
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    

  
    
    
?>
</body>
</html>
