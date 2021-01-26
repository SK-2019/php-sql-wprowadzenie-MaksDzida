
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
   <a class="nav_link" href="index.php">Strona</a>
    <a class="nav_link" href="/pracownicy/pracownicy.php">Pracownicy - wstęp</a>
     <a class="nav_link" href="/pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="/pracownicy/funkcAgregujace.php">Funkcje Agregujące</a>
   <a class="nav_link" href="/pracownicy/data_czas.php">Data i Czas</a>
     <a class="nav_link" href="/ćwiczenia/formularz.html">Formularz</a>
    <a class="nav_link" href="/pracownicy/daneDoBazy.php">Dodaj Dane</a>
    <a class="nav_link" href="/ćwiczenia/function.php">Funkcja</a>
      <a class="nav_link" href="/biblioteka/ksiazki.php">Biblioteka</a>
</div>  
    <div class='phpbox'>
  
        
  <?php
        
  
 require_once('/assets/connect.php');
echo("<h1>Książki i ich autorzy:</h1>");
$sql = 'SELECT * FROM biblTytul';
echo("<h2>Tytuły:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
      
      echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){ 
echo("<option value=".$row['id'].">".$row['tytul']."</option>");
        }
    echo("</select>");
        
        
    
    
$sql = 'SELECT * FROM biblAutor';
echo("<h2>Autorzy:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
      echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){
echo("<option value=".$row['id'].">".$row['autor']."</option>");
        }
    echo("</select>");
    
    $sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
echo("<h2>Łączna tabelka:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
        
        
        

?>
         </div>
   </div>
    </body>
</html>
