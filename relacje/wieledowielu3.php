<!DOCTYPE html>
<html>
<head>
<title> Maks Dzida 2Ti gr2 </title>
<link rel="stylesheet" href="../assets/style.css">
<link  rel = "icon" href = "https://cdn.galleries.smcloud.net/t/galleries/gf-adXv-uHGX-gbwR_harambe-664x0-nocrop.jpg">
</head>
<body>
<!-- sprawdzenie polaczenia -->
<div class='container'>


<?php
      include("../assets/header.php");
      include("../assets/menu.php");
?>

<?php
     require_once('../assets/connect.php');
     $sql="SELECT *,pacjent_lekarz.id as tabid  from pacjent,lekarz,pacjent_lekarz where id_pacjent=pacjentID and id_lekarz=lekarzID";
     echo("<li>.$sql</li>");
     $result=$conn->query($sql);
         echo("<table border=1>");
         echo("<th>ID</th>");
         echo("<th>Lekarz</th>");
         echo("<th>ID</th>");
         echo("<th>Pacjent</th>");
             while($row=$result->fetch_assoc()){
                     echo("<tr>");
                     echo("<td>".$row["id_lekarz"]."</td><td>".$row["imie_lekarz"]."</td><td>".$row["id_pacjent"]."</td><td>".$row["imie"]."</td>");
                     echo("<td><form method=POST action='del1wieledowielu3.php'>");
                     echo("<input type name=id value='".$row['tabid']."'hidden>");
                 echo("<input type=submit value='Usuń'></form></td>");
                     echo("</tr>");
             }            
         echo("</table>");
      echo("<hr>");


    $sql="SELECT * from pacjent";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie i nazwisko</th>");
    
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>" .$row["id_pacjent"]. "</td><td>" .$row["imie"]. "</td>");
                    echo("<td><form method=POST action='del2wieledowielu3.php'>");
                    echo("<input type name=id value='".$row['id_pacjent']."'hidden>");
                echo("<input type=submit value='Usuń'></form></td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");


    $sql="SELECT * from lekarz";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imię i nazwisko</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_lekarz"]. "</td><td>" .$row["imie_lekarz"]. "</td>");
                        echo("<td><form method=POST action='del2wieledowielu3.php'>");
                    echo("<input type name=id value='".$row['id_lekarz']."'hidden>");
                echo("<input type=submit value='Usuń'></form></td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");

?>