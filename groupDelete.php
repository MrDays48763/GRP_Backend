<?php
require_once 'db.php';
?>

<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:text/html;charset=utf-8");

$ID = $_GET['ID'];

// $sql = "SELECT ID FROM users_groups_roles, roles WHERE GroupID=$ID AND RoleID=roles.ID";
// $result = mysqli_query($conn,$sql);
// if ($result) {
//   if (mysqli_num_rows($result)>0) {
//       while ($row = mysqli_fetch_assoc($result)) {
//           $row['RoleID'] = (int) $row['RoleID'];
//           $sql = "DELETE FROM roles WHERE ID=" . $row['RoleID'];
//           $result1 = mysqli_query($conn,$sql);
//           mysqli_free_result($result1);
//       }
//   }
//   mysqli_free_result($result);
// }
// else {
//   echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
// }

// $sql = "DELETE FROM roles WHERE ID IN (SELECT ID FROM users_groups_roles, roles WHERE GroupID=$ID AND RoleID=roles.ID)";
$sql = "DELETE roles FROM users_groups_roles, roles WHERE GroupID=" . $ID . " AND RoleID=roles.ID";
try {
    mysqli_query($conn,$sql);
    echo "Record deleted successfully";
} catch(mysqli_sql_exception $e) {
    echo "Error: " . $sql . "<br>\n" . $e;
}

$sql = "DELETE FROM groups WHERE ID=" . $ID;
try {
    mysqli_query($conn,$sql);
    echo "Record deleted successfully";
} catch(mysqli_sql_exception $e) {
    echo "Error: " . $sql . "<br>\n" . $e;
}
mysqli_close($conn);
?>