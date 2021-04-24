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
     $sql="SELECT * from pacjent,lekarz,pacjent_lekarz where id_pacjent=pacjentID and id_lekarz=lekarzID";
     echo("<li>.$sql</li>");
     $result=$conn->query($sql);
         echo("<table border=1>");
         echo("<th>ID</th>");
         echo("<th>Imie</th>");
         echo("<th>Dział</th>");
         echo("<th>Projekt</th>");
             while($row=$result->fetch_assoc()){
                     echo("<tr>");
                     echo("<td>".$row["id_lekarze"]."</td><td>".$row["imie"]."</td><td>".$row["id_pacjent"]."</td><td>".$row["imie"]."</td>");
                     echo("</tr>");
             }            
         echo("</table>");
      echo("<hr>");


    $sql="SELECT * from pacjent";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie i nazwisko</th>");
    
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>" .$row["id_pacjent"]. "</td><td>" .$row["imie"]. "</td>");
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
                        echo("<td>" .$row["id_lekarz"]. "</td><td>" .$row["imie"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");

?>