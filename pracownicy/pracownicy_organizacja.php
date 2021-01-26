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
     <a class="nav_link" href="formularz.html">Formularz</a>
    <a class="nav_link" href="daneDoBazy.php">Dodaj Dane</a>
    <a class="nav_link" href="function.php">Funkcja</a>
      <a class="nav_link" href="ksiazki/ksiazki.php">Biblioteka</a>
</div>  
    <div class='phpbox'>
    
<?php
   require_once('connect.php');
	$sql="SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org";
	
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
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
    $sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and (dzial=1 or dzial=4)';
    echo("<li>.$sql</li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	 $sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and imie like "%a"';
	 echo("<li>.$sql</li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and imie not like "%a"';
	
	 echo("<li>.$sql</li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	echo("<h2> Sortowanie </h2>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org order by imie desc';
	echo("<li>.$sql</li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and dzial=3 order by imie asc';
	
	echo("<li>.$sql</li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and imie like "%a" order by imie asc';
	
	echo("<li>.$sql</li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and imie  like "%a" and (dzial = 1 or dzial=3) order by zarobki asc';
	
	echo("<li>.$sql </li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial = id_org  and imie NOT LIKE "%a" order by  nazwa_dzial asc, zarobki asc';
	
	echo("<li>.$sql</li>");
    
  $result = $conn->query($sql);
        echo("<table border=1>");
	echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	echo("<hr>");
	
	echo("<h2> Limit </h2>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND dzial=4 order by zarobki desc limit 2';
		
	
	  echo("<li>.$sql</li>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
	echo("<hr>");
	
	
	
	
	
	$sql="SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND (dzial=4 or dzial=2) order by zarobki desc limit 3";
	echo("<li>.$sql</li>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
	
	$sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org order by data_urodzenia asc limit 1';
        echo("<li>.$sql</li>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
	
	
	
    
    ?>
	  </div>
   </div>
    </body>
</html>
