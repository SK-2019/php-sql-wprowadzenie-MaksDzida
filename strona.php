<?php

echo("<li>Imie: ".$_POST['Imie']."</li>");
echo("<li>Nazwisko: ".$_POST['Nazwisko']."</li>");

require_once("connect.php");
  $sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['Imie']."',1,25,'1999-01-01')";
  
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();



?>
