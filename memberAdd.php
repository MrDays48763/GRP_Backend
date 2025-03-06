<?php
require_once 'db.php';
?>

<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:text/html;charset=utf-8");

$UserID = $_GET['UserID'];
$roleID = $_GET['roleID'];

$sql = "INSERT INTO `users_groups_roles`(`UserID`, `roleID`) VALUES (" . $UserID . "," . $roleID . ")";
// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($conn,$sql);
mysqli_free_result($result);
?>