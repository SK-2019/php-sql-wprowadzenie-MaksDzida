<?php
require("../assets/connect.php");
$sql = "DELETE FROM pracownik_projekt where id='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu1.php");
?>