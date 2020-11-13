<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp,</a>
     <a class="nav_link" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="funkcAgregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="index.php">Strona</a>
</div>
 <h1>Maks Dzida</h1>   
    
<?php
   require_once('connect.php');
    
    $sql='SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
     
        echo("<li>.$sql</li>");
       $result = $conn->query($sql);
           echo("<table border=1>");
           echo("<th>Id</th>");
           echo("<th>Imie</th>");
           echo("<th>Dział</th>");
           echo("<th>Nazwa_Działu</th>");
           echo("<th>Zarobki</th>");
           echo("<th>Data_urodzenia</th>");
           echo("<th>Wiek</th>");
               while($row=$result->fetch_assoc()){ 
                   echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                    
                   echo("</tr>");
               }
    echo("</table>");
    echo("<hr>");
    
    $sql='SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"';
    
    echo("<li>.$sql</li>");
           $result = $conn->query($sql);
               echo("<table border=1>");
               echo("<th>Id</th>");
               echo("<th>Imie</th>");
               echo("<th>Dział</th>");
               echo("<th>Nazwa_Działu</th>");
               echo("<th>Zarobki</th>");
               echo("<th>Data_urodzenia</th>");
               echo("<th>Wiek</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>"); 
                       echo("</tr>");
                   }
       
               echo("</table>");
    echo("<hr>");
    
    $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
            echo("<li>.$sql</li>");
            $result = $conn->query($sql);
                echo("<table border>");
                echo("<th>Wiek_wszystkich_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["wiek"]."</td>");                    
                        echo("</tr>");
                   }
           echo("</table>");
    echo("<hr>");
           
           $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="handel"';
           echo("<li>.$sql</li>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Wiek_pracowników_handel</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["wiek"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");
    echo("<hr>");
    
     $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie like "%a"';
          echo("<li>.$sql</li>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_kobiet</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");
    echo("<hr>");
    
     $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie not like "%a"';
          echo("<li>.$sql</li>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");
    echo("<hr>");
    
    $sql='SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
          echo("<li>.$sql</li>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
              echo("<th>Średnia_wiek</th>");
              echo("<th>Nazwa_działu</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");
    echo("<hr>");
    
    $sql = 'SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<li>.$sql</li>");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Suma_wieku</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
    echo("<hr>");
    
    $sql = 'SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<li>.$sql</li>");
    
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Wiek - najstarsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["max"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
    echo("<hr>");
    
    $sql = 'SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" OR nazwa_dzial="serwis") group by dzial';
echo("<li>.$sql</li>");
    
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_najmłodsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["min"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
    echo("<hr>");
   
    $sql = 'Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" or nazwa_dzial="serwis") group by nazwa_dzial';
echo("<li>.$sql</li>");
    
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek</th>");
        echo("<th>Imię</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["minwiek"]."</td><td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
    echo("<hr>");
    
    $sql = 'SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy';
echo("<li>.$sql</li>");

 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Imie</th>");
        echo("<th>Dni_życia</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["imie"]."</td><td>".$row["dni_zycia"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
    echo("<hr>");
    
     $sql = 'SELECT * from pracownicy where imie not like "%a" order by data_urodzenia asc limit 1';
echo("<li>.$sql</li>");

 $result = $conn->query($sql);
        echo("<table border>");
         echo("<th>ID</th>");
        echo("<th>Imię</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");
    
    
  

    
    
    
    
  
?>
</body>
</html>
