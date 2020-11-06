<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="index.php">Strona</a>
</div>
 <h1>Maks Dzida</h1>   
    
<?php
   require_once('connect.php');
    
echo("<li>ZADANIE 4 - SELECT avg(zarobki), nazwa_dzial FROM pracownicy, organizacja group by nazwa_dzial</li>");

    $result=$conn->query("SELECT avg(zarobki) as srednia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org group by dzial");
        echo("<table border=1>");
        echo("<th>Średnia</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["srednia"]. "</td><td>" .$row["nazwa_dzial"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
    echo("<li>ZADANIE 5 - SELECT avg(zarobki) AS srednia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org GROUP BY dzial HAVING avg(zarobki)<36</li>");
   $result = $conn -> query('SELECT avg(zarobki) AS srednia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org GROUP BY dzial HAVING avg(zarobki)<36');
       echo("<table border=1>");
         echo("<th>Średnia</th>");
         echo("<th>Dział</th>");
             while($row = $result -> fetch_assoc()){                                                                                                    
                echo("<tr>");
                   echo("<td>" .$row["srednia"]. "</td><td>" .$row["nazwa_dzial"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
     echo("<hr>");
    
    echo("<li>ZADANIE 6 -SELECT min(zarobki) AS minimum, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org  and imie like %a and dzial=2 </li>");
   $result = $conn -> query('SELECT min(zarobki) AS minimum, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org  and (imie like "%a") and dzial=2');
       echo("<table border=1>");
         echo("<th>Minimum</th>");
         echo("<th>Dział</th>");
             while($row = $result -> fetch_assoc()){                                                                                                    
                echo("<tr>");
                   echo("<td>" .$row["minimum"]. "</td><td>" .$row["nazwa_dzial"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
    
    
    
?>
</body>
</html>
