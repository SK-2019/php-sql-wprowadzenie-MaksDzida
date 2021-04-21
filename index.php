<!DOCTYPE html>
<html>
<head>
<title> Maks Dzida 2Ti gr2 </title>
<link rel="stylesheet" href="assets/style1.css">
<link  rel = "icon" href = "https://cdn.galleries.smcloud.net/t/galleries/gf-adXv-uHGX-gbwR_harambe-664x0-nocrop.jpg">
</head>
<body>
<!-- sprawdzenie polaczenia -->
<div class='container'>

<div class='name'><h1>Maks Dzida</h1></div>
<div class="nav">
<strong><a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
<a class="nav_link" href="/index.php">Strona</a>
 <a class="nav_link" href="/pracownicy/pracownicy.php">Pracownicy - wstęp</a>
  <a class="nav_link" href="/praacownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
<a class="nav_link" href="/pracownicy/funkcAgregujace.php">Funkcje Agregujące</a>
<a class="nav_link" href="/pracownicy/data_czas.php">Data i Czas</a>
  <a class="nav_link" href="/ćwiczenia/formularz.html">Formularz</a>
 <a class="nav_link" href="/pracownicy/daneDoBazy.php">Dodaj Dane</a>
 <a class="nav_link" href="/ćwiczenia/function.php">Funkcja</a>
   <a class="nav_link" href="/biblioteka/ksiazki.php">Biblioteka</a>
   <a class="nav_link" href="/biblioteka/wieledowielu.php">Wiele do wielu</a>
   <a class="nav_link" href="/flexbox/flexbox.html">Flexbox</a>
</div>  
 <div class='phpbox'>


<?php


    



    
require_once("assets/connect.php");

   


echo("<li>ZADANIE 1 SELECT * FROM pracownicy</li>");
    $result=$conn->query("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org");

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
     echo("<hr>");
    

echo("<li>ZADANIE 2 SELECT * FROM pracownicy where imie not like %a </li>");

    $result=$conn->query('SELECT * FROM pracownicy where imie not like "%a"');
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                        echo("</tr>"); 
            }
        echo("</table>");
    echo("<hr>");    

echo("<li>ZADANIE 3 SELECT * FROM pracownicy where zarobki>10 </li>");

        $result=$conn->query('SELECT * FROM pracownicy where zarobki>10');
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
            echo("</tr>");
        }
        echo("</table>");
     echo("<hr>");
    
   
    
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
      </div>
   </div>
</body>
</html>
