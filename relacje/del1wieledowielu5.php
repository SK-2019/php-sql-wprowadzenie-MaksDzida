<?php
require("../assets/connect.php");
$sql = "DELETE FROM klient_fryzjer where id='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu5.php");
?>