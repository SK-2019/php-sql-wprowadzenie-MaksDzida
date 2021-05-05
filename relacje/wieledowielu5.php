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
     $sql="SELECT *,klient_fryzjer.id as tabid  from klient,fryzjer,klient_fryzjer where id_klient=klientID and id_fryzjer=fryzjerID";
     echo("<li>.$sql</li>");
     $result=$conn->query($sql);
         echo("<table border=1>");
         echo("<th>ID</th>");
         echo("<th>Fryzjer</th>");
         echo("<th>ID</th>");
         echo("<th>Imie i nazwisko klienta</th>");
             while($row=$result->fetch_assoc()){
                     echo("<tr>");
                     echo("<td>".$row["id_fryzjer"]."</td><td>".$row["imie_fryzjer"]."</td><td>".$row["id_klient"]."</td><td>".$row["imie"]."</td>");
                     echo("<td><form method=POST action='del1wieledowielu5.php'>");
                     echo("<input type name=id value='".$row['tabid']."'hidden>");
                 echo("<input type=submit value='Usuń'></form></td>");
                     echo("</tr>");
             }            
         echo("</table>");
      echo("<hr>");


    $sql="SELECT * from klient";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie i nazwisko klienta</th>");
    
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>" .$row["id_klient"]. "</td><td>" .$row["imie"]. "</td>");
                    echo("<td><form method=POST action='del2wieledowielu5.php'>");
                     echo("<input type name=id value='".$row['id_klient']."'hidden>");
                 echo("<input type=submit value='Usuń'></form></td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");


    $sql="SELECT * from fryzjer";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Fryzjer</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_fryzjer"]. "</td><td>" .$row["imie_fryzjer"]. "</td>");
                        echo("<td><form method=POST action='del3wieledowielu5.php'>");
                     echo("<input type name=id value='".$row['id_fryzjer']."'hidden>");
                 echo("<input type=submit value='Usuń'></form></td>");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");

?>