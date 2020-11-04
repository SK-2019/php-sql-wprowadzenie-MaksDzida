<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
<?php




    echo("<h1>Maks Dzida</h1>");
    
   require_once('connect.php');
echo("<li>ZADANIE 1 SELECT * FROM pracownicy</li>");
    $result=$conn->query("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org");

       echo("<table>");
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
echo("<li>ZADANIE 2 SELECT * FROM pracownicy where imie like %a </li>");

    $result=$conn->query('SELECT * FROM pracownicy where imie like "%a"');
        echo("<table>");
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

echo("<li>ZADANIE 3 SELECT * FROM pracownicy where imie not like %a </li>");

    $result=$conn->query('SELECT * FROM pracownicy where imie not like "%a"');
        echo("<table>");
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

echo("<li>ZADANIE 4 SELECT * FROM pracownicy where zarobki>10 </li>");

        $result=$conn->query('SELECT * FROM pracownicy where zarobki>10');
        echo("<table>");
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
                     
?>
</body>
</html>
