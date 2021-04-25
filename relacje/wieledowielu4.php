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
     $sql="SELECT * from artykul,producent,artykul_producent where id_artykul=artykulID and id_producent=producentID";
     echo("<li>.$sql</li>");
     $result=$conn->query($sql);
         echo("<table border=1>");
         echo("<th>ID</th>");
         echo("<th>Producent</th>");
         echo("<th>Artykuł</th>");
         echo("<th>cena</th>");
             while($row=$result->fetch_assoc()){
                     echo("<tr>");
                     echo("<td>".$row["id_producent"]."</td><td>".$row["nazwa_producent"]."</td><td>".$row["nazwa_artykul"]."</td><td>".$row["cena"]."</td>");
                     echo("</tr>");
             }            
         echo("</table>");
      echo("<hr>");


    $sql="SELECT * from artykul";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Artykuł</th>");
        echo("<th>Cena</th>");
    
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>" .$row["id_artykul"]. "</td><td>" .$row["nazwa_artykul"]. "</td><td>".$row["cena"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");


    $sql="SELECT * from producent";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Producent</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_producent"]. "</td><td>" .$row["nazwa_producent"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");

?>