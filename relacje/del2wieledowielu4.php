<?php
require("../assets/connect.php");
$sql = "DELETE FROM artykul where id_artykul='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu4.php");
?>