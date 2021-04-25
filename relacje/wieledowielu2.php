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
     $sql="SELECT * from klasa,nauczyciel,klasa_nauczyciel where id_klasa=klasaID and id_nauczyciel=nauczycielID";
     echo("<li>.$sql</li>");
     $result=$conn->query($sql);
         echo("<table border=1>");
         echo("<th>ID</th>");
         echo("<th>Nauczyciel</th>");
         echo("<th>ID</th>");
         echo("<th>Klasa</th>");
             while($row=$result->fetch_assoc()){
                     echo("<tr>");
                     echo("<td>".$row["id_nauczyciel"]."</td><td>".$row["imie_nauczyciel"]."</td><td>".$row["id_klasa"]."</td><td>".$row["klasa"]."</td>");
                     echo("</tr>");
             }            
         echo("</table>");
      echo("<hr>");


    $sql="SELECT * from klasa";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>klasa</th>");
    
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>" .$row["id_klasa"]. "</td><td>" .$row["klasa"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");


    $sql="SELECT * from nauczyciel";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Nauczyciel</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_lekarz"]. "</td><td>" .$row["imie_nauczyciel"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");

?>