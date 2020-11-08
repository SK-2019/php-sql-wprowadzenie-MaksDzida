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
    
    echo("<li> SELECT SUM(zarobki) as suma from pracownicy where imie like %a</li>");

    $result=$conn->query("SELECT SUM(zarobki) as suma FROM pracownicy WHERE imie  LIKE '%a'");
        echo("<table border=1>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["suma"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
     echo("<li>SELECT SUM(zarobki) as suma FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=3 OR dzial=2) </li>");

    $result=$conn->query("SELECT SUM(zarobki) as suma FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=3 OR dzial=2)");
        echo("<table border=1>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["suma"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
     echo("<li>SELECT AVG(zarobki) as srednia FROM pracownicy WHERE imie LIKE %a </li>");

    $result=$conn->query("SELECT AVG(zarobki) as srednia FROM pracownicy WHERE imie LIKE '%a'");
        echo("<table border=1>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["srednia"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
    echo("<li>SELECT AVG(zarobki) as srednia FROM pracownicy WHERE dzial=4 </li>");

    $result=$conn->query("SELECT AVG(zarobki) as srednia FROM pracownicy WHERE dzial=4");
        echo("<table border=1>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["srednia"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
     echo("<li>SELECT AVG(zarobki) as srednia FROM pracownicy WHERE imie NOT LIKE %a and (dzial=1 OR dzial=2) </li>");

    $result=$conn->query("SELECT AVG(zarobki)as srednia FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=1 OR dzial=2)");
        echo("<table border=1>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["srednia"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
     echo("<li>SELECT COUNT(imie) as ilosc FROM pracownicy</li>");

    $result=$conn->query("SELECT COUNT(imie) as ilosc FROM pracownicy");
        echo("<table border=1>");
        echo("<th>ilość</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["ilosc"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
    echo("<li>SELECT COUNT(imie) as ilosc FROM pracownicy WHERE imie LIKE '%a' and (dzial=1 OR dzial=3)</li>");

    $result=$conn->query("SELECT COUNT(imie) as ilosc FROM pracownicy WHERE imie LIKE '%a' and (dzial=1 OR dzial=3)");
        echo("<table border=1>");
        echo("<th>ilość</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["ilosc"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
         
         
         
?>
</body>
</html>
