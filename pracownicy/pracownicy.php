<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>
<body>
   
   <div class='container'>
    <div class='name'><h1>Maks Dzida</h1></div>
      
   
   
<div class="nav">
   <strong><a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
    <a class="nav_link" href="index.php">Strona</a>
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
     <a class="nav_link" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="funkcAgregujace.php">Funkcje Agregujące</a>
   <a class="nav_link" href="data_czas.php">Data i Czas</a>
</div>
      <div class='phpbox'>

<?php
    require_once('connect.php');
   $sql="SELECT * from pracownicy";
echo("<li>.$sql</li>");
    $result=$conn->query($sql);

       echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 

                echo("</tr>");
            }
    echo("</table>");
   echo("<hr>");
   
$sql="SELECT * from pracownicy where dzial=2";
   
   echo("<li>.$sql</li>");
    $result=$conn->query($sql);

       echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 

                echo("</tr>");
            }
   

        echo("</table>");
   echo("<hr>");
   
   $sql="SELECT * from pracownicy where (dzial=2 or dzial=3)";
   
     echo("<li>.$sql</li>");
    $result=$conn->query($sql);

       echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
   echo("<hr>");
   
   $sql="SELECT * from pracownicy where zarobki<30";
   
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);

       echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
   
   
   
   
  
     
?>
           
      </div>
   </div>
   
    </body>
</html>
