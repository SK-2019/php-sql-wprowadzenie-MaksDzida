<?php
require("../assets/connect.php");
$sql = "DELETE FROM producent where id_producent='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu4.php");
?>