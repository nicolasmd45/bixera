<?php
session_start();
$servername = "sql300.epizy.com";
$username = "epiz_33958675";
$password = "XR7yzygTix";

// criar conexão
$conn = new mysqli($servername, $username, $password, "epiz_33958675_perfis");

// checar conexão
if ($conn->connect_error) {
  die("falha na conexão da conta: " . $conn->connect_error);
}
echo "conta conectada";
echo "<br>";

?>