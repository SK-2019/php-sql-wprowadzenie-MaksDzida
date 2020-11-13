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
     echo("<hr>");
    
    echo("<h2>Formatowanie</h2>");
    
    $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%W") from pracownicy';
echo("<li>.$sql</li>");

 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
     echo("<hr>");
    
$sql1 = 'SET lc_time_names = "pl_PL"';
   $sql2 = 'SELECT DATE_FORMAT(CURDATE(), "%W")';
echo("<li>".$sql1);
echo("<li>".$sql2);


$result = $conn->query($sql1);
$result = $conn->query($sql2);
       echo("<table border>");
       echo("<th>Dzień</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['DATE_FORMAT(CURDATE(), "%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
      echo("<hr>");
    
     $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%M") from pracownicy';
echo("<li>.$sql</li>");

 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%M")']."</td>");
        echo("</tr>");
    }
echo("</table>");
    echo("<hr>");
    
   require("connect.php");
            $sql2 = ("SELECT curtime(4)");
            echo("<li>.$sql2</li>");
            $result=$conn->query($sql2);
            include("connect.php");
                      echo("<table border=1>");
                     echo("<th>Curtime(4)</th>");
                     while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                  echo("<td>".$row["curtime(4)"]."</td>");
                            echo("</tr>");
                            }
                         echo("</table>");
    
    
    $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%Y-%M-%W") from pracownicy';
echo("<li>.$sql</li>");



 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%Y-%M-%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
    echo("<hr>");
    
       $sql = 'SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy';
echo("<li>.$sql</li>");

 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Imie</th>");
       echo("<th>Dni</th>");
       echo("<th>Godziny</th>");
       echo("<th>Minuty</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['imie']."</td><td>".$row['dni']."</td><td>".$row['godziny']."</td><td>".$row['minuty']."</td>");
        echo("</tr>");
    }
echo("</table>");
     echo("<hr>");
    
     $sql = "SELECT DATE_FORMAT('2003-10-21', '%Y-%M-%D') as dataurodzenia";
echo("<li>.$sql</li>");


 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Data_Urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['dataurodzenia']."</td>");
        echo("</tr>");
    }
echo("</table>");
    echo("<hr>");
    
    $sql = 'SELECT DATE_FORMAT(data_urodzenia,"%W") as dzien, imie, data_urodzenia FROM pracownicy ORDER BY CASE WHEN dzien = "Monday" THEN 1 WHEN dzien = "Tuesday" THEN 2 WHEN dzien = "Wednesday" THEN 3 WHEN dzien= "Thursday" THEN 4 WHEN dzien = "Friday" THEN 5 WHEN dzien = "Saturday" THEN 6 WHEN dzien = "Sunday" THEN 7 END ASC';
echo("<li>.$sql</li>");



 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Imie</th>");
       echo("<th>Dzień</th>");
  echo("<th>Data_urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['imie']."</td><td>".$row['dzien']."</td><td>".$row['data_urodzenia']."</td>");
        echo("</tr>");
    }
echo("</table>");
    echo("<hr>");
    
    $sql = 'SELECT Count(DATE_FORMAT(data_urodzenia, "%W")) as ilosc FROM pracownicy where DATE_FORMAT(data_urodzenia, "%W")="Monday"';
echo("<li>.$sql/li>");



 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Ilość</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['ilosc']."</td>");
        echo("</tr>");
    }
echo("</table>");
     echo("<hr>");
    
   
                $sql1 = ("SET lc_time_names = 'pl_PL'");
                $sql2 = ("SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, Count(DATE_FORMAT(data_urodzenia,'%W')) as ilosc FROM pracownicy group by dzien ORDER BY 
                             CASE
                                  WHEN dzien = 'Poniedziałek' THEN 1
                                  WHEN dzien = 'Wtorek' THEN 2
                                  WHEN dzien = 'Środa' THEN 3
                                  WHEN dzien= 'Czwartek' THEN 4
                                  WHEN dzien = 'Piątek' THEN 5
                                  WHEN dzien = 'Sobota' THEN 6
                                  WHEN dzien = 'Niedziela' THEN 7
                             END ASC");
                echo("<li>".$sql2."</li>");
                
                $result=$conn->query($sql1);
                $result=$conn->query($sql2);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>dzien</th>");
                        echo("<th>ilosc</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["dzien"]."</td><td>".$row["ilosc"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
    
    
  
    
    
    
    
  

    
    
    
    
  
?>
</body>
</html>
