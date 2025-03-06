<?php
require_once 'account.php';
?>
<?php
$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
mysqli_query($conn,'SET NAMES utf8');
echo "Connected successfully<br>";
?>