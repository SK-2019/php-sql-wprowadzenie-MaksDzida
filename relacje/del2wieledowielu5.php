<?php
require("../assets/connect.php");
$sql = "DELETE FROM klient where id_klient='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu5.php");
?>