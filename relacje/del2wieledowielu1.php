<?php
require("../assets/connect.php");
$sql = "DELETE FROM pracownik where id_pracownik='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu1.php");
?>