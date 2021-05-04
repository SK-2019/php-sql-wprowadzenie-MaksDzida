<?php
require("../assets/connect.php");
$sql = "DELETE FROM pracownik_projekt where id='".$_POST['tabid']."'";
$conn->query($sql);
header("location:wieledowielu1.php");
?>