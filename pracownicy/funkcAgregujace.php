<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/style1.css">
</head>
<body>
    
	<div class='container'>
		<div class='name'><h1>Maks Dzida</h1></div>

<div class="nav">
	<strong><a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-MaksDzida">Github</a></strong>
    <a class="nav_link" href="/index.php">Strona</a>
    <a class="nav_link" href="/pracownicy/pracownicy.php">Pracownicy - wstęp</a>
     <a class="nav_link" href="/pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="/pracownicy/funkcAgregujace.php">Funkcje Agregujące</a>
   <a class="nav_link" href="/pracownicy/data_czas.php">Data i Czas</a>
</div>
    
    <div class='phpbox'>
<?php
   require_once('../assets/connect.php');
    $sql="SELECT sum(zarobki) as suma from pracownicy";
    echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma</th>");
    
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["suma"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
	
	$sql="SELECT SUM(zarobki) as suma FROM pracownicy WHERE imie  LIKE '%a'";
    
    echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["suma"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
	
	$sql="SELECT SUM(zarobki) as suma FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=3 OR dzial=2)";
    
     echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["suma"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
	
	$sql="SELECT AVG(zarobki) as srednia FROM pracownicy WHERE imie LIKE '%a'";
    
     echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["srednia"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
	
	$sql="SELECT AVG(zarobki) as srednia FROM pracownicy WHERE dzial=4";
    
    echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["srednia"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
	
	$sql="SELECT AVG(zarobki)as srednia FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=1 OR dzial=2)";
    
     echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["srednia"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
	
	$sql="SELECT COUNT(imie) as ilosc FROM pracownicy";
    
     echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ilość</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["ilosc"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
	
	$sql="SELECT COUNT(imie) as ilosc FROM pracownicy WHERE imie LIKE '%a' and (dzial=1 OR dzial=3)";
		
    
    echo("<li>.$sql</li>");

    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ilość</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["ilosc"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");
    
    echo("<h2> Group By </h2>");
	
	$sql='SELECT nazwa_dzial, sum(zarobki) as sz FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
    
    echo("<li>.$sql</li>");
	
         $result = $conn->query($sql);
             echo("<table border=1>");
             echo("<th>Nazwa_działu</th>");
              echo("<th>Suma_zarobków</th>");
                  while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sz"]."</td>"); 
                        echo("</tr>");
                    }
	 echo("</table>");
	 echo("<hr>");
	
	$sql='SELECT count(imie) as ilosc, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
	
	  echo("<li>.$sql</li>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Ilość</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["ilosc"]."</td>"); 
                        echo("</tr>");
                    }
	echo("</table>");
	echo("<hr>");
	
	$sql='SELECT avg(zarobki) as srednia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
	
	echo("<li>.$sql</li>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["srednia"]."</td>"); 
                        echo("</tr>");
                    }

        echo("</table>");  
	echo("<hr>");
	
	$sql='SELECT sum(zarobki) as suma, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
	
	                echo("<li>.$sql</li>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Suma</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["suma"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
			    
                    }

                echo("</table>");
	echo("<hr>");
	
	$sql='SELECT avg(zarobki) as srednia, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
	
	echo("<li>.$sql</li>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Średnia</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["srednia"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>"); 
	echo("<hr>");
	
	echo("<h2> Klauzula Having </h2>");
	
	$sql='SELECT avg(zarobki) as srednia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie not like "%a") group by dzial having avg(zarobki)>30';
	
	
	
	
	 echo("<li>.$sql</li>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["srednia"]."</td>");
                    }

                echo("</table>");
	echo("<hr>");
	
	$sql='SELECT count(imie) as ilosc, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) group by dzial having count(imie)>3';
	
	echo("<li>.$sql</li>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Ilość</th>");
                echo("<th>Nazwa_działu</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["ilosc"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    }

                echo("</table>");
 
         
         
?>
	    </div>
		</div>
</body>
</html>
