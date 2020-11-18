<?php

echo($_POST['Imie']);
echo($_POST['Nazwisko']);

require_once('conn.php');
  $sql = "INSERT INTO pracownicy (Imie, Nazwisko)
  VALUES ('John', 'Doe')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();



?>
