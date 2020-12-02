<?php
  
 require_once('connect.php');
echo("<h1>Książki i autorzy:</h1>");
$sql = 'SELECT * FROM biblTytul';
echo("<h2>Tytuły:</h2>");
echo("<li>".$sql);

 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Tytuł</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

?>
