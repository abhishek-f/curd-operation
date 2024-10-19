<?php
include("Config.php");
$sid = $_GET["id"];
$query = "DELETE FROM `student` WHERE id='$sid'";
$result = mysqli_query($conn,$query);
header("location:Select.php");
?>