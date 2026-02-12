<?php
$servername = "sql112.infinityfree.com";
$username = "if0_41140673";
$password = "UVGimYXIy0Q5n8V";
$dbname = "if0_41140673_e_lixo_zero_lisboa";


try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}
?>