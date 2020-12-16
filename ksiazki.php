
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style1.css">
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
      <a class="nav_link" href="ksiazki.php">Biblioteka</a>
</div>  
    <div class='phpbox'>
  
        
  <?php
        
  
 require_once('connect.php');
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
        
        
        <h2>Wyświetalnie książek danych autorów</h2>        
	      
<form id="mForm">
<select id="mSelect">

    <option value='1'>Henryk SIenkiewicz</option>
    <option value='2'>Adam Mickiewicz</option>
    <option value='3'>Tolkien</option>
    <option value='4'>William Shakespeare</option>
    <option value='5'>Rafał Kosik</option>
    <option value='6'>Alexander Fredro</option>
    <option value='7'>Jan Brzechwa</option>
    <option value='8'>Kacper Korczak</option>

</select>
</form>
<div id="tytul">
</div>

<script type="text/javascript">
var mS = document.getElementById('mSelect');
var mYesNo = document.getElementById('tytul');
mS.onchange=function() {
    if(mS.value==='1') {
        mYesNo.innerHTML='<table><tr><td>Krzyżacy</td><td>Ogniem i mieczem</td></tr></table>';
    }
    else if(mS.value==='2') {
        mYesNo.innerHTML='<table><tr><td>Pan Tadeusz</td></tr></table>';
    }
    else if(mS.value==='3') {
        mYesNo.innerHTML='<table><tr><td>Hobbit</td><td>Władca Pierścieni</td></tr></table>';
    }
    else if(mS.value==='4') {
        mYesNo.innerHTML='<table><tr><td>Romeo i Julia</td></tr></table>';
    }
    else if(mS.value==='5') {
        mYesNo.innerHTML='<table><tr><td>Felix, Net i Nika</td></tr></table>';
    }
    else if(mS.value==='6') {
        mYesNo.innerHTML='<table><tr><td>Zemsta</td></tr></table>';
    }
    else if(mS.value==='7') {
        mYesNo.innerHTML='<table><tr><td>Akademia Pana Kleksa</td></tr></table>';
    }
    else if(mS.value==='8') {
        mYesNo.innerHTML='<table><tr><td>Jak zmienić szkołę</td><td>Jak zmienić nauczyciela z zawodowych</td></tr></table>';
    }
    else {
        mYesNo.innerHTML='';
    }
}
</script>
    

?>
         </div>
   </div>
    </body>
</html>
