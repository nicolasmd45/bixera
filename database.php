
<?php
session_start();
$servername = "sql106.infinityfree.com";
$username = "epiz_33701965";
$password = "NaqaFYS7DsHhJmz";

// Create connection
$conn = new mysqli($servername, $username, $password, "epiz_33701965_perfis");

// Check connection
if ($conn->connect_error) {
  die("conexão perfis não conectada: " . $conn->connect_error);
}
echo "database perfis conectada";
echo "<br>";

  //id01
  $sql01 = "SELECT votos FROM dados WHERE id='1';";
  $result01 = mysqli_query($conn, $sql01);
  $row01 = mysqli_fetch_assoc($result01);
  $_SESSION["id1"] = $row01["votos"];

  //id02
  $sql02 = "SELECT votos FROM dados WHERE id='2';";
  $result02 = mysqli_query($conn, $sql02);
  $row02 = mysqli_fetch_assoc($result02);
  $_SESSION["id2"] = $row02["votos"];

  //id03
  $sql03 = "SELECT votos FROM dados WHERE id='3';";
  $result03 = mysqli_query($conn, $sql03);
  $row03 = mysqli_fetch_assoc($result03);
  $_SESSION["id3"] = $row03["votos"];

  //id04
  $sql04 = "SELECT votos FROM dados WHERE id='4';";
  $result04 = mysqli_query($conn, $sql04);
  $row04 = mysqli_fetch_assoc($result04);
  $_SESSION["id4"] = $row04["votos"];

  //id05
  $sql05 = "SELECT votos FROM dados WHERE id='5';";
  $result05 = mysqli_query($conn, $sql05);
  $row05 = mysqli_fetch_assoc($result05);
  $_SESSION["id5"] = $row05["votos"];

  //id06
  $sql06 = "SELECT votos FROM dados WHERE id='6';";
  $result06 = mysqli_query($conn, $sql06);
  $row06 = mysqli_fetch_assoc($result06);
  $_SESSION["id6"] = $row06["votos"];

  //id07
  $sql07 = "SELECT votos FROM dados WHERE id='7';";
  $result07 = mysqli_query($conn, $sql07);
  $row07 = mysqli_fetch_assoc($result07);
  $_SESSION["id7"] = $row07["votos"];

  //id08
  $sql08 = "SELECT votos FROM dados WHERE id='8';";
  $result08 = mysqli_query($conn, $sql08);
  $row08 = mysqli_fetch_assoc($result08);
  $_SESSION["id8"] = $row08["votos"];

  //id09
  $sql09 = "SELECT votos FROM dados WHERE id='9';";
  $result09 = mysqli_query($conn, $sql09);
  $row09 = mysqli_fetch_assoc($result09);
  $_SESSION["id9"] = $row09["votos"];

  //id10
  $sql10 = "SELECT votos FROM dados WHERE id='10';";
  $result10 = mysqli_query($conn, $sql10);
  $row10 = mysqli_fetch_assoc($result10);
  $_SESSION["id10"] = $row10["votos"];



//FUNÇÃO
function verificarphp(){
  //id01
  $sql01 = "SELECT votos FROM dados WHERE id='1';";
  $result01 = mysqli_query($conn, $sql01);
  $row01 = mysqli_fetch_assoc($result01);
  $_SESSION["id1"] = $row01["votos"];

  //id02
  $sql02 = "SELECT votos FROM dados WHERE id='2';";
  $result02 = mysqli_query($conn, $sql02);
  $row02 = mysqli_fetch_assoc($result02);
  $_SESSION["id2"] = $row02["votos"];

  //id03
  $sql03 = "SELECT votos FROM dados WHERE id='3';";
  $result03 = mysqli_query($conn, $sql03);
  $row03 = mysqli_fetch_assoc($result03);
  $_SESSION["id3"] = $row03["votos"];

  //id04
  $sql04 = "SELECT votos FROM dados WHERE id='4';";
  $result04 = mysqli_query($conn, $sql04);
  $row04 = mysqli_fetch_assoc($result04);
  $_SESSION["id4"] = $row04["votos"];

  //id05
  $sql05 = "SELECT votos FROM dados WHERE id='5';";
  $result05 = mysqli_query($conn, $sql05);
  $row05 = mysqli_fetch_assoc($result05);
  $_SESSION["id5"] = $row05["votos"];

  //id06
  $sql06 = "SELECT votos FROM dados WHERE id='6';";
  $result06 = mysqli_query($conn, $sql06);
  $row06 = mysqli_fetch_assoc($result06);
  $_SESSION["id6"] = $row06["votos"];

  //id07
  $sql07 = "SELECT votos FROM dados WHERE id='7';";
  $result07 = mysqli_query($conn, $sql07);
  $row07 = mysqli_fetch_assoc($result07);
  $_SESSION["id7"] = $row07["votos"];

  //id08
  $sql08 = "SELECT votos FROM dados WHERE id='8';";
  $result08 = mysqli_query($conn, $sql08);
  $row08 = mysqli_fetch_assoc($result08);
  $_SESSION["id8"] = $row08["votos"];

  //id09
  $sql09 = "SELECT votos FROM dados WHERE id='9';";
  $result09 = mysqli_query($conn, $sql09);
  $row09 = mysqli_fetch_assoc($result09);
  $_SESSION["id9"] = $row09["votos"];

  //id10
  $sql10 = "SELECT votos FROM dados WHERE id='10';";
  $result10 = mysqli_query($conn, $sql10);
  $row10 = mysqli_fetch_assoc($result10);
  $_SESSION["id10"] = $row10["votos"];
}
//update: increase
function upinc($id){
  $supi = $_SESSION["id$id"] + 1;
  $upi = "UPDATE dados SET votos = $supi WHERE id=$id";
  $rupi = mysqli_query($conn, $upi);
}
//update:
function updec($id){
  $supd = $_SESSION["id$id"] - 1;
  $upd = "UPDATE dados SET votos = $supd WHERE id=$id";
  $rupd = mysqli_query($conn, $upd);
}



//função admin
function edit($i, $txt){
// $i= id desejado
//txt = nome desejado
$sql = "UPDATE dados SET nome = $txt WHERE id=$i";
$resultsql = mysqli_query($conn, $sql);
}

?>