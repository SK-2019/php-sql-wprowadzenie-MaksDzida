<!DOCTYPE html>
<html>
<head>
<title> Maks Dzida 2Ti gr2 </title>
<link rel="stylesheet" href="../assets/style.css">
<link  rel = "icon" href = "https://cdn.galleries.smcloud.net/t/galleries/gf-adXv-uHGX-gbwR_harambe-664x0-nocrop.jpg">
</head>
<body>

<div class='container'>


<?php
      include("../assets/header.php");
      include("../assets/menu.php");
?>

<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


    function delete($plik,$nazwa,$nazwarow){
        echo("<td><form method=POST action=$plik>");
            echo("<input type name=$nazwa value='".$row[$nazwarow]."'hidden>");
        echo("<input type=submit value='Usuń'></form></td>");
    }

     require_once('../assets/connect.php');
     $sql="SELECT *,pracownik_projekt.id as tabid from pracownik,projekt,pracownik_projekt where id_pracownik=pracownikID and id_projekt=projektID";
     echo("<li>.$sql</li>");
     $result=$conn->query($sql);
         echo("<table border=1>");
         echo("<th>ID</th>");
         echo("<th>Imie</th>");
         echo("<th>Dział</th>");
         echo("<th>Projekt</th>");
             while($row=$result->fetch_assoc()){
                     echo("<tr>");
                         echo("<td>" .$row["tabid"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial_id"]. "</td><td>" .$row["nazwa"]. "</td>");
                         delete("del1wieledowielu1.php","id","tabid");
                     echo("</tr>");
             }            
         echo("</table>");
      echo("<hr>");


    $sql="SELECT * from pracownik";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data Urodzenia</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_pracownik"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial_id"]. "</td><td>" .$row["wynagrodzenie"]. "</td><td>" .$row["dataUrodzenia"]. "</td>");
                        delete("del2wieledowielu1.php","id","id_pracownik");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");


    $sql="SELECT * from projekt";
    echo("<li>.$sql</li>");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Nazwa</th>");
            while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_projekt"]. "</td><td>" .$row["nazwa"]. "</td>");
                        delete("del3wieledowielu1.php","id","id_projekt");
                        echo("</tr>");
            }            
        echo("</table>");
     echo("<hr>");

?>