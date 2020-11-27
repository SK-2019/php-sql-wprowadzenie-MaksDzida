<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
   <form action="insert.php" method="POST">
        <input type="text" name="imie" placeholder="imie"><br>
        <input type="text" name="dzial" placeholder="dzial" ><br>
   <input type="text" name="zarobki" placeholder="zarobki"><br>
   <input type="date" name="data_ur" ><br>
   <input type="submit" value="Dodaj">
   </form>
  <br>
  <br>
<h1>Usuwanie Pracownika</h1>
<form action="delete.php" method="POST">
    <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Usuń">
</form>

  
               
  </body>
</html>

 <?php
                require_once("connect.php");
                $result=$conn->query("Select * from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                    echo("<th>del</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("<td><form method=POST action='delete.php'>");
                             echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                     echo("<input type=submit value='Usuń'>");
                            echo("</form></td>");                       
                            echo("</tr>");
                           }
                echo("</table>");
?>
