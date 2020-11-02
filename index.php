<?php
    echo("<h1>Maks Dzida</h1>");
   require_once('connect.php');
echo("<li>ZADANIE 1 SELECT * FROM pracownicy</li>");
    $result=$conn->query('SELECT * FROM pracownicy');

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

echo("<li>ZADANIE 2 SELECT * FROM pracownicy where imie like "%a"</li>");

    $result=$conn->query('SELECT * FROM pracownicy where imie like "%a"');
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

echo("<li>ZADANIE 3 SELECT * FROM pracownicy where imie not like "%a" </li>");

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

echo("<li>ZADANIE 4 SELECT * FROM pracownicy where zarobki>10 </li>");

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



        $result=$conn->query('SELECT * FROM pracownicy');
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

        $result=$conn->query('SELECT * FROM pracownicy');
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

            $result=$conn->query('SELECT * FROM pracownicy');
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




        
            

            
            
?>
