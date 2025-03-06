<?php
require_once 'db.php';
?>

<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:text/html;charset=utf-8");

$ID = $_GET['ID'];

$sql = "DELETE FROM `roles` WHERE `ID`='" . $ID . "'";
$result1 = mysqli_query($conn,$sql);
mysqli_free_result($result1);
?>